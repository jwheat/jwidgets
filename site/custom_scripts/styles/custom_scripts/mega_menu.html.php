<ul data-mega-menu="<?php print $megaMenu->id ?>"<?php
    // insert additional atributes
    if (is_array($attributes)):
        foreach ($attributes as $attribute => $value):
            print ' ' . encodeHtml($attribute) . '="' . addcslashes(encodeHtml($value), '"') . '"';
        endforeach;
    endif;
?>>
<?php
    foreach ($megaMenu->links as $megaMenuLink):
?>
		<li data-mega-menu-link="<?php print $megaMenuLink->id; ?>">
			<a href="<?php print ($megaMenuLink->link) ? encodeHtml($megaMenuLink->link) : '#'; ?>"
<?php
                if (!empty($megaMenuLink->alt)):
?>
					title="<?php print encodeHtml($megaMenuLink->alt); ?>"
<?php
                endif;
?>
			>
				<?php print encodeHtml($megaMenuLink->title); ?>
			</a>
		</li>
<?php
    endforeach;
?>
</ul>
 