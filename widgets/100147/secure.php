<?php
include_once("JaduConstants.php");
$editor = $jadu->getEditor();
?>
<table class="form_table" id="lb_widget_content">
    <tbody>


       <tr>
          <td class="label_cell">Icon</td>
          <td class="data_cell">
          <input type="hidden" id="icon" value="" onchange="$('iconi').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="iconi" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=iconi&imageFilenameID=icon');" />
          </td>
        </tr>
        <tr>
            <td class="label_cell"><label for="param_heading">Heading</label></td>
            <td class="data_cell"><textarea name='param_heading' rows='1' cols='10' id='param_heading'></textarea></td>
        </tr>

        <tr>
            <td class="label_cell"><label for="content">Content</label></td>
            <td class="data_cell">
                <?php print $editor->getEditorMarkup('content', '', 'content', false); ?>
            </td>
        </tr>      
        <tr>
            <td class="label_cell"><label for="param_show">Show / Hide</label></td>
            <td class="data_cell">
                <select name="param_show" id="param_show">
                    <option value='show'>Show Accordion</option>
                    <option value='hide'>Hide Accordion</option>
                </select>
            </td>
        </tr>  
    </tbody>
</table>
