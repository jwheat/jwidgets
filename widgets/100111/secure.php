<?php
include_once("JaduConstants.php");
?>

<table class="form_table" id="lb_widget_content">
    <tbody>

        <tr>
          <td class="label_cell">Picture</td>
          <td class="data_cell">
          <input type="hidden" id="image" value="" onchange="$('imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=imagei&imageFilenameID=image');" />
          </td>
        </tr>
        <tr>
          <td class="label_cell">Name</td>
          <td class="data_cell">
            <input type="text" value="" id="name" class="field" size="12">
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Title</td>
          <td class="data_cell">
            <input type="text" value="" id="title" class="field" size="12">
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Phone</td>
          <td class="data_cell">
            <input type="text" value="" id="phone" class="field" size="12">
          </td>
        </tr>   
        <tr>
          <td class="label_cell">Email</td>
          <td class="data_cell">
            <input type="text" value="" id="email" class="field" size="12">
          </td>
        </tr>           
    </tbody>
</table>
