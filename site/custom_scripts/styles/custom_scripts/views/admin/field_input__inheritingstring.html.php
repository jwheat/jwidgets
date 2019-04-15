<input
	type="text"
	id="<?php print encodeHtml($field->codename); ?>"
	name="<?php print encodeHtml($field->codename); ?>"
	value="<?php print encodeHtml($field->value); ?>"
	placeholder="<?php print encodeHtml($field->inheritedValue); ?>"
	<?php if (!empty($field->config['class'])): ?> class="<?php print encodeHtml($field->config['class']); ?>"<?php endif; ?>
	<?php if ($fieldIndex == 0): ?> autofocus<?php endif; ?>
/>