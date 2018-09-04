<?php
  include_once("JaduConstants.php");
  $editor = $jadu->getEditor();
?>

<table class="form_table" id="lb_widget_content">
    <tbody>
        <tr>
          <td class="label_cell">Headline</td>
          <td class="data_cell">
            <input type="text" value="" id="param_headline" class="field" size="12">
          </td>
        </tr>

        <tr>
          <td class="data_cell" colspan="2">Body Copy
            <br/>
            <?php print $editor->getEditorMarkup('param_bodycopy', '', 'param_bodycopy', false); ?>
          </td>
        </tr>

        <?php for ($i = 1; $i < 5; $i++) { ?>

        <tr>
          <td class="label_cell">Class <?php echo $i; ?> Title / Name</td>
          <td class="data_cell">
            <input type="text" value="" id="param_class_<?php echo $i; ?>_title" class="field" size="12">
          </td>
        </tr>
        <tr>
          <td class="label_cell">Class <?php echo $i; ?> Text</td>
          <td class="data_cell">
            <textarea type="text" value="" id="param_class_<?php echo $i; ?>_text" class="field" cols="150" rows="3" style="width:400px;"></textarea>
          </td>
        </tr>  

        <tr>
          <td class="label_cell">Class <?php echo $i; ?> Image</td>
          <td class="data_cell">
            <input type="hidden" id="param_class_<?php echo $i; ?>_image" value="" onchange="$('param_class_<?php echo $i; ?>_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="param_class_<?php echo $i; ?>_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=param_class_<?php echo $i; ?>_imagei&imageFilenameID=param_class_<?php echo $i; ?>_image');" />
          </td>
        </tr>  
        <?php } ?>        

      </tbody>
    </table>
    