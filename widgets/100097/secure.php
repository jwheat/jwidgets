<?php include_once("JaduConstants.php"); ?>

<table class="form_table" id="lb_widget_content">
    <tbody>
        <tr>
          <td class="label_cell">Headline</td>
          <td class="data_cell">
            <input type="text" value="" id="param_headline" class="field" size="12">
          </td>
        </tr>
        <tr>
          <td class="label_cell">Content</td>
          <td class="data_cell">
            <textarea cols="43" rows="3" value="" id="param_content" class="field"></textarea>
          </td>
        </tr>
        <tr>
          <td class="label_cell">Video Image</td>
          <td class="data_cell">
          <input type="hidden" id="param_video_image" value="" onchange="$('param_video_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="param_video_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=param_video_imagei&imageFilenameID=param_video_image');" />
          </td>
        </tr>         
        <tr>
          <td class="label_cell">Video Link</td>
          <td class="data_cell">
            <input type="text" value="" id="param_video_link" class="field" size="12">
          </td>
        </tr>
        <tr>
          <td class="label_cell">Infographic 1 icon</td>
          <td class="data_cell">
          <input type="hidden" id="param_infographic_1_image" value="" onchange="$('param_infographic_1_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="param_infographic_1_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=param_infographic_1_imagei&imageFilenameID=param_infographic_1_image');" />
          </td>
        </tr>         
        <tr>
          <td class="label_cell">Infographic 1 text</td>
          <td class="data_cell">
            <input type="text" value="" id="param_infographic_1_text" class="field" size="12">
          </td>
        </tr>
    </tbody>
</table>