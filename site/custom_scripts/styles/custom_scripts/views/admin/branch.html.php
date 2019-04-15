<?php
namespace custom\Nav;

if (!$menuItem->isValid(true)) return;

?>
<li id="menuItem_<?php print $menuItem->id; ?>" data-nav-menuitem="<?php print encodeHtml((string)$menuItem->reference); ?>"
	data-nav-visible="<?php print $menuItem->visible; ?>"<?php
	if ($menuItem->active===true): ?> data-nav-active="active"<?php
	elseif ($menuItem->active): ?> data-nav-active="<?php print encodeHtml($menuItem->active); ?>"<?php endif;
	if ($menuItem->class): ?> data-nav-class="<?php print encodeHtml($menuItem->class); ?>"<?php endif;
	print $this->buildAttributesString('li');
?>>
	<a href="<?php print ControlCenterView::url('menu',$menuItem->menuId,$menuItem->reference,array('parent'=>(string)$menuItem->parentRef)); ?>" class="menu-item__bullet" title="Show child items of <?php print encodeHtml($menuItem->getTitle()); ?>">•</a>
	<a class="menu-item__title" href="<?php print ControlCenterView::url('item',$menuItem->menuId,$menuItem->reference,array('parent'=>(string)$menuItem->parentRef)); ?>"><?php print encodeHtml((string)$menuItem->getTitle('(Untitled)')) ?></a>
	<span class="menu-item__type"><?php print encodeHtml($menuItem->describe()); ?></span>

	<ul<?php print $this->buildAttributesString('ul'); ?>>
<?php
		$this->renderBranch($menuItem,$depth);
?>
	</ul>
</li>