<?php
namespace custom\Nav;
?>
<a href="<?php print ControlCenterView::url('item',$menuItem->menuId,'',array('parent'=>(string)$menuItem->reference)); ?>" class="menu-item__title menu-item__add">
	<span class="btn menu-item__add__label">New menu item</span>
</a>
