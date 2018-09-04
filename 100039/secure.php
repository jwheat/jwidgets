<?php
    require "custom/academics/class.MessiahDirectoryCategoryHelper.php";
    $directoryhelper = new MessiahDirectoryCategoryHelper;

    $rows = $directoryhelper->get_directory_categories (9);
    $html = "";

    foreach($rows as $row) {
        $ds_id = $row['id'];
        $ds_title = $row['title'];

        $html .= "<option value='" . $ds_id . "'>" . $prefix . " " . $ds_title . "</option>";
    }

?>

<table class="form_table" id="lb_widget_content">
	<tbody>
		<tr>
			<td class="label_cell">
				<label for="param_department">Academic Department</label>
			</td>
			<td class="data_cell">
				<select name='param_department' id='param_department' size='1'>
					<?php print $html; ?>
				</select>
			</td>
		</tr> 

	    <tr>
	      <td class="label_cell">
	        <label for="param_hidefilter">Hide Filter Options</label>
	      </td>
	      <td class="data_cell">
	        <input type='checkbox' value='Y' name='param_hidefilter' id='param_hidefilter' /> Hide Filter       
	      </td>
	    </tr>
	    		 
	</tbody>
</table>

