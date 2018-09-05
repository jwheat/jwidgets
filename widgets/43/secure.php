<table class="form_table" id="lb_widget_content">
  <tbody>
<tr>
<td width="112" class="label_cell">Image</td>
<td width="503" class="data_cell">
<input type="hidden" id="img_src" value=""
onchange="$('img_srci').src = 'http://' + DOMAIN + '/images/' +
this.value;" />
<img id="img_srci" class="img_preview"
src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" />
<br />
<input type="button" class="button" value="Image Library"
onclick="return loadLightbox('image_manager/image_manager', 'lb2',
'mode=lb2&imagePreviewID=img_srci&imageFilenameID=img_src');" />
</td>
    <tr>
      <td class="label_cell"><label for="param_bio_name"> Employee's Name</label></td>
      <td class="data_cell"><input type="text" size='85' value="" id="param_bio_name" name="person_name" class='field'></td>
    </tr>
    <tr>
      <td class="label_cell"><label for="param_title">Employee's Title</label>
      <td class="data_cell"><input type="text" size='85' value="" id="param_bio_title" name="person_title" class='field'></td>
    </tr>
    <tr>
      <td class="label_cell"><label for="param_contact_website">Read more link</label>
      <td colspan="3" class="data_cell"><input type="text" size='85' value="" id="param_contact_website" name="contact_website" class='field'></td>
    </tr>
  </tbody>
</table>
