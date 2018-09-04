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
        <tr>
          <td class="label_cell">Side Image</td>
          <td class="data_cell">
            <input type="hidden" id="param_image" value="" onchange="$('param_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="param_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=param_imagei&imageFilenameID=param_image');" />
          </td>
        </tr>


        <?php for ($i = 1; $i < 4; $i++) { ?>
        <tr>
          <td class="label_cell">Button/Tab <?php echo $i; ?> Name</td>
          <td class="data_cell">
            <input type="text" value="" id="param_tab_<?php echo $i; ?>_buttontext" class="field" size="65">
          </td>
        </tr>
        <tr>
          <td class="label_cell">Button/Tab <?php echo $i; ?> / Link URL</td>
          <td class="data_cell">
            <input type="text" value="" id="param_tab_<?php echo $i; ?>_buttonlink" class="field" size="65">
          </td>
        </tr>
        <tr>
          <td class="label_cell">Button/Tab <?php echo $i; ?> / Content</td>
          <td class="data_cell">
            <textarea type="text" value="" id="param_tab_<?php echo $i; ?>_content" class="" cols="100" rows="10" style="width: 450px;"></textarea>
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Button/Tab <?php echo $i; ?> Image</td>
          <td class="data_cell">
            <input type="hidden" id="param_tab_<?php echo $i; ?>_image" value="" onchange="$('param_tab_<?php echo $i; ?>_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="param_tab_<?php echo $i; ?>_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=param_tab_<?php echo $i; ?>_imagei&imageFilenameID=param_tab_<?php echo $i; ?>_image');" />
          </td>
        </tr>
        
        <?php } ?>

        <?php for ($i = 1; $i < 5; $i++) { ?>

        <tr>
          <td class="label_cell">Infographic <?php echo $i; ?> Image</td>
          <td class="data_cell">
            <input type="hidden" id="param_infographic_<?php echo $i; ?>_image" value="" onchange="$('param_infographic_<?php echo $i; ?>_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="param_infographic_<?php echo $i; ?>_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=param_infographic_<?php echo $i; ?>_imagei&imageFilenameID=param_infographic_<?php echo $i; ?>_image');" />
          </td>
        </tr>
        <tr>
          <td class="label_cell">Infographic <?php echo $i; ?> Blue Text / Number</td>
          <td class="data_cell">
            <input type="text" value="" id="param_infographic_<?php echo $i; ?>_number" class="field" size="00">
          </td>
        </tr>
        <tr>
          <td class="label_cell">Infographic <?php echo $i; ?> Title Text</td>
          <td class="data_cell">
            <input type="text" value="" id="param_infographic_<?php echo $i; ?>_text" class="field" size="200">
          </td>
        </tr>                
        <?php } ?>

	</tbody>
</table>