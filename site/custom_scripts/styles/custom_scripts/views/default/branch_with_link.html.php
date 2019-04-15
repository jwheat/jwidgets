<?php
namespace custom\Nav;

if (!$menuItem->valid) return;

?>
<li <?php
	if ($menuItem->submenuHomepageId): ?> data-nav-menuitem="<?php print encodeHtml($menuItem->id); ?>"<?php endif;
	if ($menuItem->active===true): ?> data-nav-active="active"<?php
		print $this->buildAttributesString('li:active');
	elseif ($menuItem->active): ?> data-nav-active="<?php print encodeHtml($menuItem->active); ?>"<?php endif;
	if ($menuItem->class): ?> data-nav-class="<?php print encodeHtml($menuItem->class); ?>"<?php endif;
	print $this->buildAttributesString('li');
?>>
		<a href="<?php print encodeHtml($menuItem->url); ?>"<?php
			if (!empty($menuItem->alt)): ?> title="<?php print encodeHtml($menuItem->alt); ?>"; ?>"<?php endif;
			print $this->buildAttributesString('a');
		?>>
			<?php print encodeHtml($menuItem->title); ?>
		</a>
<?php
	if ($depth > 0 && $menuItem->children && (!$this->getConfig('onlyActiveBranch') || $menuItem->active)):
		ob_start();
		$this->renderBranch($menuItem, $depth);
		$branchContents = trim(ob_get_contents());
		ob_end_clean();
		if ($branchContents != ''): ?>
			<ul><?php print $branchContents; ?></ul>
		<?php
		endif;
	endif;
?>
</li>