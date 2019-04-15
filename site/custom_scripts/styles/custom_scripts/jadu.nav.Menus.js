/**
 * jadu.nav.Menus
 *
 * Lazy loads submenu content for all the nav menus on the page, in a single muxed request
 *
 * @author matt.dolan@jadu.co.uk
 * @copyright 2014 Jadu Ltd.
 *
 */
window.jadu = window.jadu||{};
window.jadu.nav = window.jadu.nav||{};
window.jadu.nav.Menus = function (options) {

	// used on main page
	jadu.nav.Menus.prototype.MENU_ATTRIBUTE = 'data-nav-menu';
	// used on <li>s and with submenu content loaded via Ajax
	jadu.nav.Menus.prototype.LINK_ATTRIBUTE = 'data-nav-menuitem';

	jadu.nav.Menus.prototype.HAS_SUBMENU_ATTRIBUTE = 'data-nav-menu-has-submenu';

	/** set to none on the Menu outer element to disable submenu close buttons **/
	jadu.nav.Menus.prototype.CLOSE_BUTTON_ATTRIBUTE = 'data-nav-close-button';

	jadu.nav.Menus.prototype.SUBMENU_TRIGGER_ATTRIBUTE = 'data-nav-submenu-trigger';

	/*****/

	this.menus = [];
	this.submenus = {};
	this.menuLinks = [];

	/*****/

	/**
	 * Initialise any jadu.nav.Menus on the page
	 */
	this.initMenus = function () {
		this.menus = $('[' + jadu.nav.Menus.prototype.MENU_ATTRIBUTE + ']');
		if (!this.menus.length) return;
		this.loadSubMenuContent();
	}

	/**
	 * Performs a single Ajax request to get submenu content for all the menus
	 */
	this.loadSubMenuContent = function () {
		var menuIds = $.map(this.menus, function(menu) { return $(menu).attr(jadu.nav.Menus.prototype.MENU_ATTRIBUTE); }).join(',');
		$.ajax({
			url: this.options.submenuContentUrl,
			context: this,
			data: {
				menus: menuIds
			},
			success: this.processSubMenuData
		});
	}

	/**
	 * Unpacks the sub menu content from the Ajax response, and inserts each submenu <div> into the appropriate <li>
	 * @param  {string} html
	 */
	this.processSubMenuData = function (html) {
		var sandbox;

		sandbox = document.createElement('div');
		sandbox.innerHTML = html;

		this.submenus = {};

		// extract sub menus from the HTML
		$(sandbox).find('[' + jadu.nav.Menus.prototype.LINK_ATTRIBUTE + ']').each($.proxy(function(index, el){
			var linkId = $(el).attr(jadu.nav.Menus.prototype.LINK_ATTRIBUTE);
			if (linkId) {
				this.submenus[linkId] = $(el).detach();
			}
		},this));

		$('li[' + jadu.nav.Menus.prototype.LINK_ATTRIBUTE + ']').each($.proxy(function(index, li){
			var $li = $(li),
				$a = $li.children('a'),
				linkId = $li.attr(jadu.nav.Menus.prototype.LINK_ATTRIBUTE),
				linkHref = $a.attr('href'),
				submenuContainerSelector = $(li).parent().attr('data-nav-submenu-container'),
				submenuContainer,
				submenuCloseButton,
				$menu = $li.parents('[' + jadu.nav.Menus.prototype.MENU_ATTRIBUTE + ']').first();
			if (submenuContainerSelector) {
				submenuContainer = $(submenuContainerSelector).first();
			}
			if (!submenuContainer) {
				submenuContainer = $li;
			}
			if (linkHref.match(/^#(.+)$/)) {
				this.submenus[linkId].attr('id',linkHref.replace(/^#/,''));
			}
			if (this.submenus[linkId]) {
				if (!$menu.attr(jadu.nav.Menus.prototype.HAS_SUBMENU_ATTRIBUTE)) {
					$menu.off('jadu:nav:disable-submenu')
						 .off('jadu:nav:enable-submenu')
					     .on('jadu:nav:disable-submenu', this.disableNavSubmenu)
					     .on('jadu:nav:enable-submenu', this.enableNavSubmenu);
					this.enableNavSubmenu.call($menu);
				}
				this.submenus[linkId].on('jadu:nav:close', $.proxy(this.subMenuClose, this, this.submenus[linkId]));
				this.submenus[linkId].on('jadu:nav:open', $.proxy(this.subMenuOpen, this, this.submenus[linkId]));
				if (this.options.submenuCloseButton !== false && $menu.attr(jadu.nav.Menus.prototype.CLOSE_BUTTON_ATTRIBUTE) != 'off') {
					submenuCloseButton = $(this.options.submenuCloseButton)
											.on('click',$.proxy(this.submenuCloseButtonClick, this, this.submenus[linkId]));
					this.submenus[linkId].append(submenuCloseButton);
				}
				submenuContainer.append(this.submenus[linkId]);
				if ($menu.attr(jadu.nav.Menus.prototype.SUBMENU_TRIGGER_ATTRIBUTE) != 'hover') {
					$a.on('click', $.proxy(this.linkClick, this, this.submenus[linkId]));
				}
			}
		},this));

		delete this.submenus;
	}

	// custom event handler for jadu:nav:enable-submenu
	this.enableNavSubmenu = function (ev) {
		$(this).attr(jadu.nav.Menus.prototype.HAS_SUBMENU_ATTRIBUTE,"true");
	}

	// custom event handler for jadu:nav:disable-submenu
	this.disableNavSubmenu = function (ev) {
		$(this).removeAttr(jadu.nav.Menus.prototype.HAS_SUBMENU_ATTRIBUTE);
	}

	// custom event handler for jadu:nav:open
	this.subMenuOpen = function (submenu, ev) {
		submenu.removeClass(this.options.submenuVisibleSwitchClass).addClass(this.options.submenuVisibleClass);
	}

	// custom event handler for jadu:nav:close
	this.subMenuClose = function (submenu, ev) {
		var visibleClass = this.options.submenuVisibleClass;

		submenu.css({height: submenu.outerHeight() + 'px'})
				.removeClass(this.options.submenuVisibleSwitchClass);
		setTimeout(function(){
			submenu.removeClass(visibleClass)
				   .css({height: ''});
		},0);
		$('.' + this.options.hasOpenSubmenu).removeClass(this.options.hasOpenSubmenu);
	}

	/**
	 * Click handler for links that have submenus
	 * @param  {Event} ev
	 */
	this.linkClick = function (submenu, ev) {
		var otherVisibleSubmenus, fullHeight, visibleClass, $li;

		$li = $(ev.target).parent('[' + jadu.nav.Menus.prototype.LINK_ATTRIBUTE + ']');
		// if there's no submenus attribute on the menu, don't handle the link click
		if (!$li.parents('[' + jadu.nav.Menus.prototype.MENU_ATTRIBUTE + ']').attr(jadu.nav.Menus.prototype.HAS_SUBMENU_ATTRIBUTE)) {
			return;
		}
		ev.preventDefault();
		var currentlyVisible = submenu.hasClass(this.options.submenuVisibleClass);
		if (currentlyVisible) {
			this.subMenuClose(submenu, ev);
		}
		else {
			otherVisibleSubmenus = $('.' + this.options.submenuVisibleClass);
			// instantly switch from other submenu
			if (otherVisibleSubmenus.length) {
				otherVisibleSubmenus.css({height: '0'})
									.addClass(this.options.submenuVisibleSwitchClass)
									.removeClass(this.options.submenuVisibleClass);
				$('.' + this.options.hasOpenSubmenu).removeClass(this.options.hasOpenSubmenu);
				submenu.addClass(this.options.submenuVisibleSwitchClass);
				submenu.addClass(this.options.submenuVisibleClass);
				submenu.css({height: 'auto'});
				$li.addClass(this.options.hasOpenSubmenu);
			}
			// transition to visible
			else {
				submenu.addClass(this.options.submenuVisibleSwitchClass).addClass(this.options.submenuVisibleClass);
				submenu.css({height: 'auto'});
				fullHeight = submenu.outerHeight() + 'px';
				submenu.css({height: '0'});
				submenu.removeClass(this.options.submenuVisibleSwitchClass).removeClass(this.options.submenuVisibleClass);
				$li.addClass(this.options.hasOpenSubmenu);
				visibleClass = this.options.submenuVisibleClass;
				setTimeout(function(){
					submenu.addClass(visibleClass);
					submenu.css({height: fullHeight});
				},0);
			}
		}

	}

	this.submenuCloseButtonClick = function (submenu, ev) {
		submenu.trigger('jadu:nav:close');
	}

	/*****/

	this.options = $.extend({
		submenuContentUrl: '/site/custom_scripts/nav_menu_submenus.php',
		submenuVisibleClass: 'nav-menu-submenu__visible',
		submenuVisibleSwitchClass: 'nav-menu-submenu__visible_switch',
		submenuCloseButton: '<span class="nav-menu-submenu__close">Close<span>&times;</span></span>',
		hasOpenSubmenu: 'nav-menu-submenu_open'
	}, options||{});

	this.initMenus();
}
