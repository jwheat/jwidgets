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
          <td class="label_cell">Sub-Heading</td>
          <td class="data_cell">
            <input type="text" value="" id="param_subhead" class="field" size="12">
          </td>
        </tr>

        <tr>
          <td class="data_cell" colspan="2">Body Copy
            <br/>
            <?php print $editor->getEditorMarkup('param_bodycopy', '', 'param_bodycopy', false); ?>
          </td>
        </tr>

        <tr>
          <td class="label_cell">YouTube Token/Code (NOT the entire url)</td>
          <td class="data_cell">
            <input type="text" value="" id="youtube_token" class="field" size="12">
          </td>
        </tr>
        <tr>
          <td class="label_cell">YouTube PreLoad-Image</td>
          <td class="data_cell">
            <input type="hidden" id="youtube_thumb" value="" onchange="$('youtube_thumbi').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="youtube_thumbi" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=youtube_thumbi&imageFilenameID=youtube_thumb');" />
          </td>
        </tr>

        <?php for ($i = 1; $i < 10; $i++) { ?>

        <tr>
          <td class="label_cell">Image <?php echo $i; ?> Title</td>
          <td class="data_cell">
            <input type="text" value="" id="image_<?php echo $i; ?>_title" class="field" size="12">
          </td>
        </tr>
        <tr>
          <td class="label_cell">Image <?php echo $i; ?> Summary</td>
          <td class="data_cell">
            <textarea type="text" value="" id="image_<?php echo $i; ?>_summary" class="field" cols="150" rows="3" style="width:400px;"></textarea>
          </td>
        </tr>  

        <tr>
          <td class="label_cell">Image <?php echo $i; ?> Thumbnail</td>
          <td class="data_cell">
            <input type="hidden" id="image_<?php echo $i; ?>_thumb" value="" onchange="$('image_<?php echo $i; ?>_thumbi').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="image_<?php echo $i; ?>_thumbi" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=image_<?php echo $i; ?>_thumbi&imageFilenameID=image_<?php echo $i; ?>_thumb');" />
          </td>
        </tr>  

        <tr>
          <td class="label_cell">Image <?php echo $i; ?> Gallery Image</td>
          <td class="data_cell">
            <input type="hidden" id="image_<?php echo $i; ?>_image" value="" onchange="$('image_<?php echo $i; ?>_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="image_<?php echo $i; ?>_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=image_<?php echo $i; ?>_imagei&imageFilenameID=image_<?php echo $i; ?>_image');" />
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>