<?php
    require "custom/academics/class.MessiahAcademicOfferings.php";
    $listing = new MessiahAcademicListing;

    $rows = $listing->get_department_list();
    $prefix = "Department of";
    $html = "";

    foreach($rows as $row) {
        $ds_name = $row['name'];
        $categoryID = $row['categoryID'];


        $html .= "<option value='" . $ds_name . "|" . $categoryID . "'>" . $prefix . " " . $ds_name . "</option>";

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
	</tbody>
</table>
