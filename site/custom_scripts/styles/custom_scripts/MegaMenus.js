/**
 * MegaMenus
 *
 * Lazy loads submenu content for all the mega menus on the page, in a single muxed request
 *
 * @author matt.dolan@jadu.co.uk
 * @copyright 2014 Jadu Ltd.
 *
 */
var MegaMenus = function (options) {

	// used on main page
	MegaMenus.prototype.MENU_ATTRIBUTE = 'data-mega-menu';
	// used with submenu content loaded via Ajax
	MegaMenus.prototype.LINK_ATTRIBUTE = 'data-mega-menu-link';

	/*****/

	this.menus = [];
	this.submenus = {};
	this.menuLinks = [];

	/*****/

	/**
	 * Initialise any MegaMenus on the page
	 */
	this.initMenus = function () {
		this.menus = $('[data-mega-menu]');
		if (!this.menus.length) return;
		this.loadSubMenuContent();
	}

	/**
	 * Performs a single Ajax request to get submenu content for all the menus
	 */
	this.loadSubMenuContent = function () {
		var menuIds = $.map(this.menus, function(menu) { return $(menu).attr(MegaMenus.prototype.MENU_ATTRIBUTE); }).join(',');
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
		$(sandbox).find('[' + MegaMenus.prototype.LINK_ATTRIBUTE + ']').each($.proxy(function(index, el){
			var linkId = $(el).attr(MegaMenus.prototype.LINK_ATTRIBUTE);
			if (linkId) {
				this.submenus[linkId] = $(el).detach();
			}
		},this));

		$('li[' + MegaMenus.prototype.LINK_ATTRIBUTE + ']').each($.proxy(function(index, li){
			var linkId = $(li).attr(MegaMenus.prototype.LINK_ATTRIBUTE);
			if (this.submenus[linkId]) {
				$(li).append(this.submenus[linkId])
					 .on('click', $.proxy(this.linkClick, this, this.submenus[linkId]));
			}
		},this));

		delete this.submenus;
	}

	/**
	 * Click handler for links that have submenus
	 * @param  {Event} ev
	 */
	this.linkClick = function (submenu, ev) {
		ev.preventDefault();
		submenu.toggleClass(this.options.submenuVisibleClass);
	}

	/*****/

	this.options = $.extend({
		submenuContentUrl: '/site/custom_scripts/mega_menu_submenus.php',
		submenuVisibleClass: 'megaMenu_submenu_visible'
	}, options||{});

	this.initMenus();
}
