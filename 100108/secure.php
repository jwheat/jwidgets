<?php
include_once("JaduConstants.php");
?>

<h1>Graduate Rankings Carousel Settings</h1>

<table class="form_table" id="lb_widget_content">
    <tbody>
        <tr>
          <td class="label_cell">Ranking 1 Heading Text</td>
          <td class="data_cell">
            <input type="text" value="" id="heading1" class="field" size="65">
          </td>
        </tr>  
        <tr>
          <td class="label_cell">Image 1 URL</td>
          <td class="data_cell">
            <input type="text" value="" id="r1_image_url" class="field" size="65">
          </td>
        </tr>         
        <tr>
          <td class="label_cell">Ranking 1 Image</td>
          <td class="data_cell">
          <input type="hidden" id="r1_image" value="" onchange="$('r1_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="r1_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=r1_imagei&imageFilenameID=r1_image');" />
          </td>
        </tr>
        <tr>
          <td colspan='2' style="background-color: #000; height:2px"> 
          </td>
        </tr>

        <tr>
          <td class="label_cell">Ranking 2 Heading Text</td>
          <td class="data_cell">
            <input type="text" value="" id="heading2" class="field" size="65">
          </td>
        </tr>
        <tr>
          <td class="label_cell">Image 2 URL</td>
          <td class="data_cell">
            <input type="text" value="" id="r2_image_url" class="field" size="65">
          </td>
        </tr>          
        <tr>
          <td class="label_cell">Ranking 2 Image</td>
          <td class="data_cell">
          <input type="hidden" id="r2_image" value="" onchange="$('r2_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="r2_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=r2_imagei&imageFilenameID=r2_image');" />
          </td>
        </tr>
        <tr>
          <td colspan='2' style="background-color: #000; height:2px"> 
          </td>
        </tr>


        <tr>
          <td class="label_cell">Ranking 3 Heading Text</td>
          <td class="data_cell">
            <input type="text" value="" id="heading3" class="field" size="65">
          </td>
        </tr>  
        <tr>
          <td class="label_cell">Image 3 URL</td>
          <td class="data_cell">
            <input type="text" value="" id="r3_image_url" class="field" size="65">
          </td>
        </tr>          
        <tr>
          <td class="label_cell">Ranking 3 Image</td>
          <td class="data_cell">
          <input type="hidden" id="r3_image" value="" onchange="$('r3_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="r3_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=r3_imagei&imageFilenameID=r3_image');" />
          </td>
        </tr>
        <tr>
          <td colspan='2' style="background-color: #000; height:2px"> 
          </td>
        </tr>


        <tr>
          <td class="label_cell">Ranking 4 Heading Text</td>
          <td class="data_cell">
            <input type="text" value="" id="heading4" class="field" size="65">
          </td>
        </tr>  
        <tr>
          <td class="label_cell">Image 4 URL</td>
          <td class="data_cell">
            <input type="text" value="" id="r4_image_url" class="field" size="65">
          </td>
        </tr>          
        <tr>
          <td class="label_cell">Ranking 4 Image</td>
          <td class="data_cell">
          <input type="hidden" id="r4_image" value="" onchange="$('r4_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="r4_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=r4_imagei&imageFilenameID=r4_image');" />
          </td>
        </tr>
        <tr>
          <td colspan='2' style="background-color: #000; height:2px"> 
          </td>
        </tr>

        <tr>
          <td class="label_cell">Ranking 5 Heading Text</td>
          <td class="data_cell">
            <input type="text" value="" id="heading5" class="field" size="65">
          </td>
        </tr>  
        <tr>
          <td class="label_cell">Image 5 URL</td>
          <td class="data_cell">
            <input type="text" value="" id="r5_image_url" class="field" size="65">
          </td>
        </tr>          
        <tr>
          <td class="label_cell">Ranking 5 Image</td>
          <td class="data_cell">
          <input type="hidden" id="r5_image" value="" onchange="$('r5_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="r5_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=r5_imagei&imageFilenameID=r5_image');" />
          </td>
        </tr>
        <tr>
          <td colspan='2' style="background-color: #000; height:2px"> 
          </td>
        </tr>

    </tbody>
</table>
