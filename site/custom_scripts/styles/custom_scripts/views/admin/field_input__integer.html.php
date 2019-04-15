<input
	type="number" size="5"
	id="<?php print encodeHtml($field->codename); ?>"
	name="<?php print encodeHtml($field->codename); ?>"
	value="<?php print encodeHtml($field->value); ?>"
	<?php if (!empty($field->config['class'])): ?> class="<?php print encodeHtml($field->config['class']); ?>"<?php endif; ?>
	<?php if ($fieldIndex == 0): ?> autofocus<?php endif; ?>
/>