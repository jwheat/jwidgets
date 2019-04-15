<?php
namespace custom\Nav;

global $adminPageAccessPermissions;

use custom\Nav\Form\Field\HiddenField;

if (!$readOnly):
?>
	<form action="<?php print encodeHtml(CC_URL_ROOT . CC_DETAIL_SCRIPT); ?>" method="post" class="menu-item-form">
<?php
endif;

?>
<h4><?php print ($menuItem->id) ? encodeHtml($menuItem->title) : 'New Menu Item'; ?></h4>
<?php
    if ($view->errors):
?>
        <p class="validate_mssg">Please check that <span>these details*</span> are completed correctly</p>
<?php
    elseif (isset($saveSuccess) && !$saveSuccess):
?>
        <div class="validate_mssg">Unable to save changes. Please try again.</div>
<?php
    endif;

?>
	<table class="generic_table">
	<?php
		$fieldIndex = 0;
		$hadAdvanced = false;
		foreach ($view->fields as $field) {
			$vars = array();
			if (!($field instanceof HiddenField)) {
				$vars['fieldIndex'] = $fieldIndex++;
			}
			if ($field->getConfig('advanced') && !$hadAdvanced):
				$hadAdvanced = true;
				?>
				<tr>
					<td colspan="2" class="generic_desc"><span class="label menu-item-form__advanced" tabindex="0">Show advanced settings</span></td>
				</tr>
<?php
			endif;
			print $field->render('field_row',$vars);
		}
	?>
	<?php
	    if (!$readOnly):
	?>
	        <tr>
	            <td colspan="2" class="generic_finish">
	                <span><input type="submit" name="save" class="btn submit" value="Save" /></span>
	            </td>
	        </tr>
	<?php
	    endif;
	?>
	</table>
<?php
    if (!$readOnly):
    	if ($menuItem->id && $adminPageAccessPermissions->deleteContent):
?>
			<button name="delete" type="submit" class="btn menu-item__delete">Delete</button>
<?php
		endif;
?>
</form>
<?php
	endif;
?>