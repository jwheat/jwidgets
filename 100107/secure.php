<?php
include_once("JaduConstants.php");

// initialise document editor
$editor = $jadu->getEditor();
?>
<table class="form_table" id="lb_widget_content">
    <tbody>
        <tr>
            <td class="label_cell"><label for="param_heading">Heading</label></td>
            <td class="data_cell"><textarea name='param_heading' rows='1' cols='10' id='param_heading'></textarea></td>
        </tr>

        <tr>
            <td class="label_cell"><label for="content">Text</label></td>
            <td class="data_cell">
                <?php print $editor->getEditorMarkup('content', '', 'content', false); ?>
            </td>
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
    </tbody>
</table>
