<?php
  include_once("JaduConstants.php");
  $editor = $jadu->getEditor();
?>

<table class="form_table" id="lb_widget_content">
    <tbody>

        <tr>
          <td class="label_cell">Show / Hide Announcement</td>
          <td class="data_cell">
              <input type='checkbox' name="param_hide" id='param_show' value='Y'> Hide Announcement
          </td>
        </tr>  
        <tr>
          <td class="data_cell" colspan="2">Body Copy
            <br/>
            <?php print $editor->getEditorMarkup('param_bodycopy', '', 'param_bodycopy', false); ?>
          </td>
        </tr>

        <tr>
          <td class="label_cell">Image</br><i>Search for "announcement" in the image library</br> to see available icons for this widget</i></td>
          <td class="data_cell">
            <input type="hidden" id="param_image" value="" onchange="$('param_class_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="param_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=param_imagei&imageFilenameID=param_image');" />
          </td>
        </tr>  

      </tbody>
    </table>