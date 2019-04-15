<input
	type="checkbox"
	id="<?php print encodeHtml($field->codename); ?>"
	name="<?php print encodeHtml($field->codename); ?>"
	<?php if ($field->value): ?> checked<?php endif; ?>
    <?php if (!empty($field->config['class'])): ?> class="<?php print encodeHtml($field->config['class']); ?>"<?php endif; ?>
	<?php if (!empty($field->config['checkedValue'])): ?> value="<?php print encodeHtml($field->config['checkedValue']); ?>"<?php endif; ?>
	<?php if ($fieldIndex == 0): ?> autofocus<?php endif; ?>
/>