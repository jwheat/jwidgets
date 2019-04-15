<?php
namespace custom\Nav;

$heading = ($view->getConfig('showHeading')) ? $menu->getHeading() : null;

if (!empty($heading)): ?>
	<div <?php print $view->buildAttributesString('div'); ?>>
<?php
	$linkHeading = $view->getConfig('linkHeading') && $rootItem->active !== true && $rootItem->url != NULL;
	if ($linkHeading):
		print '<a href="' . $menu->rootItemForView->url . '">';
	endif;
	printf('<%1$s>%2$s</%1$s>',
			encodeHtml($view->getConfig('headingTag')),
			encodeHtml($heading)
		);
	if ($linkHeading):
		print '</a>';
	endif;
endif;
?>
		<ul <?php print $view->buildAttributesString('ul'); ?>>
<?php

		$view->renderBranch($rootItem,$menu->getDepth());
?>
		</ul>
<?php
	if (!empty($heading)): ?>
		</div>
<?php
endif;