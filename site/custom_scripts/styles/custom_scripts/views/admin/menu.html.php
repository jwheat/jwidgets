<?php
namespace custom\Nav;

if ($rootItem->ancestors):
?>
	<ul class="menu-item__ancestors">
<?php
		foreach ($rootItem->ancestors as $i => $ancestor):
?>
		<li>
			<a href="<?php print ControlCenterView::url('menu',$menu,$ancestor->reference,array('parent'=>$ancestor->parentRef)); ?>">
				<?php print ($i == 0 && !$ancestor->hasTitle) ? encodeHtml($rootItem->menu->name) : encodeHtml($ancestor->getTitle()); ?>
			</a>
		</li>
<?php
		endforeach;
?>
	</ul>
<?php
endif;
?>
<?php
if ($rootItem->hasTitle || !$menu->rootItem->matchesReference($rootItem->reference)):
?>
    <h3><?php print encodeHtml($rootItem->getTitle()); ?></h3>
<?php
endif;
?>

<ul class="navMenu_root" data-nav-menu="<?php print $menu->id; ?>" data-nav-rootitem="<?php print $rootItem->reference; ?>" <?php print $view->buildAttributesString('ul'); ?>>
<?php
	$view->renderBranch($rootItem,$menu->depth);
	$menuItem = $rootItem;
?>
</ul>
<?php
	include __DIR__ . '/includes/menuItem_add.html.php';
?>
