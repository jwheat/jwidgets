<?php
namespace custom\Nav;

if (!$menuItem->isValid()) return;

?>
<li <?php
	if ($menuItem->getSubmenuHomepageId()): ?> data-nav-menuitem="<?php print encodeHtml($menuItem->getId()); ?>"<?php endif;
	if ($menuItem->isActive()===true): ?> data-nav-active="active"<?php
		print $this->buildAttributesString('li:active');
	elseif ($menuItem->isActive()): ?> data-nav-active="<?php print encodeHtml($menuItem->isActive()); ?>"<?php endif;
	if ($menuItem->getClass()): ?> data-nav-class="<?php print encodeHtml($menuItem->getClass()); ?>"<?php endif;
	print $this->buildAttributesString('li');
?>>
<?php

	if ($menuItem->isActive() === true): ?>
		<span<?php
			if (!empty($menuItem->alt)): ?> title="<?php print encodeHtml($menuItem->getAlt()); ?>"; ?>"<?php endif;
			print $this->buildAttributesString('a');
		?>>
			<?php print encodeHtml($menuItem->getTitle()); ?>
		</span>
<?php

	else: ?>
		<a href="<?php print encodeHtml($menuItem->getUrl()); ?>"<?php
			if (!empty($menuItem->alt)): ?> title="<?php print encodeHtml($menuItem->getAlt()); ?>"; ?>"<?php endif;
			print $this->buildAttributesString('a');
		?>>
			<?php print encodeHtml($menuItem->getTitle()); ?>
		</a>
<?php
	endif;

	if (($depth === null || $depth > 0) && $menuItem->getChildren() && (!$this->getConfig('onlyActiveBranch') || $menuItem->isActive())):
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