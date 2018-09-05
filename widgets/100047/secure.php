<?php
    require "custom/academics/class.MessiahDirectoryCategoryHelper.php";
    $directoryhelper = new MessiahDirectoryCategoryHelper;

    $rows = $directoryhelper->get_directory_category_tree (1);
    $html = "";

    function has_children($rows,$id) {
      foreach ($rows as $row) {
        if ($row['parent_id'] == $id)
          return true;
      }
      return false;
    }
    function xbuild_menu($rows,$parent=-1)
    {  
      $result = "\n  <ul>\n";
      foreach ($rows as $row)
      {
        if ($row['parent_id'] == $parent){
          $result.= "   <li>{$row['title']}";
          if (has_children($rows,$row['id']))
            $result.= build_menu($rows,$row['id']);
          $result.= "</li>\n";
        }
      }
      $result.= "  </ul>\n";

      return $result;
    }

    function xhas_children($rows,$id,$intent) {
      foreach ($rows as $row) {
        if ($row['parent_id'] == $id)
          $indent++;
          return $indent;
      }
      return false;
    }

    function xxbuild_menu($rows,$parent=-1,$indent=0)
    {  
      $result = "<ul>\n";
      $indent++;
      foreach ($rows as $row)
      {

        if ($row['parent_id'] == $parent){
          $string_length = strlen($row['title']) + $indent*2;
          $result.= "<li>" . str_pad($row['title'],$string_length, '-',STR_PAD_LEFT);
          if (has_children($rows,$row['id'],$indent)) {
            #$indent++;
            $result.= build_menu($rows,$row['id'],$indent);
          } 
          $result.= "</li>\n";
          #$indent--;
        }
      }
      $result.= "</ul>\n";
      $indent--;

      return $result;
    }

    function build_menu($rows,$parent=-1,$indent=0)
    {  
      #$result = "<ul>\n";
      $result = "";
      $indent++;
      foreach ($rows as $row)
      {

        if ($row['parent_id'] == $parent){
          $string_length = strlen($row['title']) + $indent*2;
          $margin = $indent*5;

          if ($indent == 1) {
            $result .="<optgroup label='".$row['title']."'>";
          } else {
            #$result.= "<option>" . str_pad($row['title'],$string_length, '-',STR_PAD_LEFT) . "</option>\n";
            $result.= "<option value='".$row['id']."' style='margin-left:".$margin."px;'>" . $row['title'] . "</option>\n";
          }
          if (has_children($rows,$row['id'],$indent)) {
            #$indent++;
            $result.= build_menu($rows,$row['id'],$indent);
          } 
        }
      }
      #$result.= "</ul>\n";

      $indent--;
      if ($indent == 1) {
        $result .= "</optgroup>";
      }
      return $result;
    }

    $cat_rows = array();

    foreach($rows as $row) {
        $r = array();

        #$ds_id = $row['id'];
        #$ds_title = $row['title'];
        #$html .= "<option value='" . $ds_id . "'>" . $prefix . " " . $ds_title . "</option>";

        $r['id'] = $row['id'];
        $r['title'] = $row['title'];
        $r['parent_id'] = $row['parentID'];
        $r['depth'] = $row['depth'];

        array_push($cat_rows, $r);
    }

  


?>

<table class="form_table" id="lb_widget_content">
	<tbody>
		<tr>
			<td class="label_cell">
				<label for="param_department">Academic Department (Alumni)</label>
			</td>
			<td class="data_cell">
				<select name='param_department' id='param_department' size='1'>
					<?php echo build_menu($cat_rows); ?>
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