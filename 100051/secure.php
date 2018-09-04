<?php
    require "custom/academics/class.MessiahDirectoryCategoryHelper.php";
    $directoryhelper = new MessiahDirectoryCategoryHelper;

    $directory_id = 10;
    $parent_id = -1; 

    $rows = $directoryhelper->get_toplevel_directory_categories ($directory_id, $parent_id);
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
        <label for="param_edition_category">Bridge Edition</label>
      </td>
      <td class="data_cell">
        <select name='param_edition_category' id='param_edition_category' size='1'>
          <?php print $html; ?>
        </select>
      </td>
    </tr>            
  </tbody>
</table>

