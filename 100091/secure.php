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
          <td class="label_cell">Link 1 Text</td>
          <td class="data_cell">
            <input type="text" value="" id="param_buttontext_1" class="field" size="12">
          </td>
        </tr>
        <tr>
          <td class="label_cell">Link 1 / URL</td>
          <td class="data_cell">
            <input type="text" value="" id="param_buttonlink_1" class="field" size="12">
          </td>
        </tr>

        <tr>
          <td class="label_cell">Link 2 Text</td>
          <td class="data_cell">
            <input type="text" value="" id="param_buttontext_2" class="field" size="12">
          </td>
        </tr>
        <tr>
          <td class="label_cell">Link 2 / URL</td>
          <td class="data_cell">
            <input type="text" value="" id="param_buttonlink_2" class="field" size="12">
          </td>
        </tr>

        <?php for ($i = 1; $i < 7; $i++) { ?>
        <tr>
          <td class="label_cell">Quote <?php echo $i; ?> Title</td>
          <td class="data_cell">
            <input type="text" value="" id="param_quote_<?php echo $i; ?>_title" class="field" size="65">
          </td>
        </tr>
        <tr>
          <td class="label_cell">Quote <?php echo $i; ?> Image</td>
          <td class="data_cell">

            <input type="hidden" id="param_quote_<?php echo $i; ?>_image" value="" onchange="$('param_quote_<?php echo $i; ?>_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="param_quote_<?php echo $i; ?>_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=param_quote_<?php echo $i; ?>_imagei&imageFilenameID=param_quote_<?php echo $i; ?>_image');" />


          </td>
        </tr>
        <tr>
          <td class="label_cell">Quote <?php echo $i; ?> quote</td>
          <td class="data_cell">
            <textarea value="" id="param_quote_<?php echo $i; ?>_quote" class="field" cols="65" rows="3"></textarea>
          </td>
        </tr>
        <?php } ?>

    </tbody>
</table>