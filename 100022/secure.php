<?php
  /**************************************************
   * Messiah College Dynamic Quick Links Widget
   * Screen : Widget Settings
   *
   */
?>
<style>
.qlfield {
   -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #666666;
    border-image: none;
    border-style: solid;
    border-width: 1px 1px 2px;
    font-family: verdana,arial,sans-serif;
    font-size: 1em;
    padding: 1px;
    width: 250px;
}
</style>

<table id="quicklinks_top" class="form_table" id="lb_widget_content">
    <tbody>
 <tr>
          <td class="label_cell"><label for="param_site_url"> Sub-site URL</label></td>
          <td class="data_cell"><input type="text" size='85' value="" id="param_site_url" name="param_site_url" class='field'></td>
        </tr>    
    <tr>
            <td class="label_cell">Image</td>
            <td class="data_cell">
            <input type="hidden" id="img_src" value=""
                onchange="$('img_srci').src = 'http://' + DOMAIN + '/images/' +
                this.value;" />
                <img id="img_srci" class="img_preview"
                src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
                <br />
                <input type="button" class="button" value="Image Library"
                onclick="return loadLightbox('image_manager/image_manager', 'lb2',
                'mode=lb2&imagePreviewID=img_srci&imageFilenameID=img_src');" />
            </td>
        </tr>
        <tr>
          <td class="label_cell"><label for="param_image_alttext"> Image Alt Text</label></td>
          <td class="data_cell"><input type="text" size='85' value="" id="param_image_alttext" name="param_image_alttext" class='field'></td>
        </tr>
        <tr>
          <td class="label_cell"><label for="param_class"> Classname</label></td>
          <td class="data_cell"><input type="text" size='85' value="" id="param_class" name="param_class" class='field'></td>
        </tr>
        <tr>
          <td class="label_cell"><label for="param_heading"> Heading</label></td>
          <td class="data_cell"><input type="text" size='85' value="" id="param_heading" name="param_heading" class='field'></td>
        </tr>
          <td class="label_cell"><label for="content">Content</label>

          <td class="data_cell"><textarea id="content" name="content" cols="65" rows="5" class='field'></textarea></td>
        </tr>
      </tbody>
    </table>
    <table id="quicklinks" class="form_table" id="lb_widget_content">
      <tbody>
        <tr>
          <td class="label_cell"><label>Link URL (http://....)</label>
          <td class="data_cell"><input type="text" size='85' value="" id="param_1_url" name="param_1_url" class='qlfield'>
            <input rowid="1" trow="5" class="button remove_row" type="button" value="- Remove" />
          </td>
        </tr>
        <tr>
          <td class="label_cell"><label for="param_1_link_text">Link Text</label>
          <td class="data_cell"><input type="text" size='85' value="" id="param_1_link_text" name="param_1_link_text" class='qlfield'></td>
        </tr>

        <input type='hidden' value='1' name='number_of_links' id='number_of_links' />
    </tbody>
</table>

<input  class="button btn_add_link" type="button" value="+ Add New QuickLink" name="btn_add_link" />