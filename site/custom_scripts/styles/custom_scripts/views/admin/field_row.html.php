<tr<?php if ($field->getConfig('advanced')): ?> class="menu-item__field--advanced"<?php endif; ?> id="menuItem_fieldRow_<?php print encodeHtml($field->codename); ?>">
    <td class="generic_desc<?php print $field->error ? '_error' : '' ; ?>">
		<label for="<?php print encodeHtml($field->codename); ?>">
<?php
			print encodeHtml($field->label);
			if ($field->required) {
				print '*';
			}
?>
		</label>
	</td>
    <td class="generic_action">
        <?php print $field->render('field_input', $vars); ?>
<?php
		if ($field->note):
?>
			<div class="menu-item__field__note">
<?php
				print ($field->noteIsHtml) ? $field->note : nl2br(encodeHtml($field->note));
?>
			</div>
<?php
		endif;
?>
<?php
		if ($field->error):
?>
			<div class="menu-item__field__error">
<?php
				print encodeHtml($field->error);
?>
			</div>
<?php
		endif;
?>
    </td>
</tr>