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
          <td class="label_cell">Link text</td>
          <td class="data_cell">
            <input type="text" value="" id="param_link_text" class="field" size="12">
          </td>
        </tr>
        <tr>
          <td class="label_cell">Link url</td>
          <td class="data_cell">
            <input type="text" value="" id="param_link" class="field" size="65" />
          </td>
        </tr>  
        <tr>
          <td class="label_cell">Video url (Full url to video)</td>
          <td class="data_cell">
            <input type="text" value="" id="video_url" class="field" size="65" />
          </td>
        </tr>         
        <tr>
          <td class="label_cell">Video Image</td>
          <td class="data_cell">
            <input type="hidden" id="video_thumb" value="" onchange="$('video_thumbi').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="video_thumbi" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=video_thumbi&imageFilenameID=video_thumb');" />
          </td>
        </tr>  



      </tbody>
    </table>
    