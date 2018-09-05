<?php
include_once("JaduConstants.php");

// initialise document editor
$editor = $jadu->getEditor();
?>
<table class="form_table" id="lb_widget_content">
    <tbody>
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
          <td class="label_cell"><label for="param_heading"> Heading</label></td>
          <td class="data_cell"><input type="text" size='85' value="" id="param_heading" name="param_heading" class='field'></td>
        </tr>
        <tr>
          <td class="label_cell"><label for="param_subheading"> Subheading</label></td>
          <td class="data_cell"><input type="text" size='85' value="" id="param_subheading" name="param_subheading" class='field'></td>
        </tr>
        <tr>
          <td class="label_cell"><label for="content">Content</label>
          <td class="data_cell">
            <?php print $editor->getEditorMarkup('content', '', 'content', false); ?>

        </td>
        </tr>
        <tr>
          <td class="label_cell"><label for="param_url">Link URL (http://....)</label>
          <td class="data_cell"><input type="text" size='85' value="" id="param_url" name="param_url" class='field'></td>
        </tr>
        <tr>
          <td class="label_cell"><label for="param_link_text">Link Text</label>
          <td class="data_cell"><input type="text" size='85' value="" id="param_link_text" name="param_link_text" class='field'></td>
        </tr>
    </tbody>
</table>
