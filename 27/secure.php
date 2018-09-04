<?php
include_once("JaduConstants.php");

// initialise document editor
$editor = $jadu->getEditor();
?>
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
</tr>
    <tr>
      <td class="label_cell"><label for="param_palignment">Picture Alignment</label></td>
      <td class="data_cell"><select name='param_palignment' id='param_palignment' size='1'>
            <option value='left'>left</option>
            <option value='right'>right</option>
            <option value='center'>center</option>
           </select>
      </td>
    </tr>
    <tr>
      <td class="label_cell"><label for="param_calignment">Content Alignment</label></td>
      <td class="data_cell"><select name='param_calignment' id='param_calignment' size='1'>
            <option value='left' SELECTED = "SELECTED">left</option>
            <option value='right'>right</option>
            <option value='center'>center</option>
           </select>
      </td>
    </tr>
    <tr>
      <td class="label_cell"><label for="param_bio_name"> Person's Name</label></td>
      <td class="data_cell"><input type="text" size='85' value="" id="param_bio_name" name="person_name" class='field'></td>
    </tr>
    <tr>
      <td class="label_cell"><label for="param_title">Person's Title</label>
      <td class="data_cell"><input type="text" size='85' value="" id="param_bio_title" name="person_title" class='field'></td>
    </tr>
    <tr>
      <td class="label_cell"><label for="param_contact_email">Contact Email</label>
      <td colspan="3" class="data_cell"><input type="text" size='85' value="" id="param_contact_email" name="contact_email" class='field'></td>
    </tr>
    <tr>
      <td class="label_cell"><label for="param_contact_phone">Contact Phone</label>
      <td colspan="3" class="data_cell"><input type="text" size='85' value="" id="param_contact_phone" name="contact_phone" class='field'></td>
    </tr>
    <tr>
      <td class="label_cell"><label for="param_contact_fax">Contact Fax</label>
      <td colspan="3" class="data_cell"><input type="text" size='85' value="" id="param_contact_fax" name="contact_fax" class='field'></td>
    </tr>
    <tr>
      <td class="label_cell"><label for="param_contact_website">Website Link</label>
      <td colspan="3" class="data_cell"><input type="text" size='85' value="" id="param_contact_website" name="contact_website" class='field'></td>
    </tr>
    <tr>
      <td class="label_cell"><label for="param_contact_website">Link Text</label>
      <td colspan="3" class="data_cell"><input type="text" size='85' value="" id="param_link_text" name="link_text" class='field'></td>
    </tr>

    <tr>
      <td class="label_cell"><label for="content">Content</label>
      <td class="data_cell">
<?php print $editor->getEditorMarkup('content', '', 'content', false); ?>
</td>

    </tr>
  </tbody>
</table>
