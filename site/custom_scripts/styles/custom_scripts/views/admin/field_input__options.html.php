<?php
namespace custom\Nav;
// Documents
?>
<select
	id="<?php print encodeHtml($field->codename); ?>"
	name="<?php print encodeHtml($field->codename); ?>"
	<?php if (!empty($field->config['class'])): ?> class="<?php print encodeHtml($field->config['class']); ?>"<?php endif; ?>
	<?php if ($fieldIndex == 0): ?> autofocus<?php endif; ?>
>
<?php
if ($field->getConfig('showSelectOption') !== false):
?>
	<option value="">—— Select ——</option>
<?php
endif;

$optgroupDivider = $field->getConfig('optgroups',false);

if (is_array($field->options)):
	$i=0;
	$lastOptgroup = null;

	$options = $field->options;
	if ($optgroupDivider):
		// put top level categories first
		uasort($options, function($a, $b) use ($optgroupDivider) {
			$aTopLevel = (strpos($a, $optgroupDivider) === false) ? 0 : 1;
			$bTopLevel = (strpos($b, $optgroupDivider) === false) ? 0 : 1;
			$cmp = $aTopLevel - $bTopLevel;
			if ($cmp === 0) {
				$cmp = strcmp($a, $b);
			}
			return $cmp;
		});
	endif;

	foreach ($options as $value => $label):
		if ($optgroupDivider):
			list($optgroup,$label) = array_pad(explode($optgroupDivider, $label, 2), 2, null);
			if (empty($label) && !empty($optgroup)) {
				$label = $optgroup;
				$optgroup = '(Top Level)';
			}
			if ($optgroup != $lastOptgroup):
				if ($lastOptgroup === null): ?>
				</optgroup>
				<?php
				endif;
				$lastOptgroup = $optgroup;
				?>
				<optgroup label="<?php print encodeHtml($optgroup); ?>">
			<?php
			endif;
		endif;

		$maxLength = 85;
		if ($optgroupDivider) {	
			if (strlen($label) > $maxLength) {
				$labelBits = explode($optgroupDivider, $label);
				$label = array_pop($labelBits);
				if (strlen($label) < $maxLength) {
					while (strlen($label) <= $maxLength) {
						$next = array_pop($labelBits);
						$space = $maxLength - strlen($label . $optgroupDivider);
						if ($space < strlen($next)) {
							$next = substr($next, 0, $space-1) . '…';
						}
						$label = $next . $optgroupDivider . $label;
					}
				} else {
					// if the option itself is too long, just truncate the end
					$label = substr($label, 0, $maxLength-1) . '…';
				}
			}
		}
		?>
	    <option value="<?php print encodeHtml($value); ?>"<?php if ($value == $field->value): ?> selected<?php endif; ?>><?php print encodeHtml($label); ?></option>
	<?php
	endforeach;
endif;
if ($optgroupDivider && $lastOptgroup === null): ?></optgroup><?php endif; ?>
</select>