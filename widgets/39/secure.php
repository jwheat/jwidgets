<table class="form_table" id="lb_widget_content">
  <tbody>

<tr>
	<td class='label_cell'>Slideshow Height</td>
	<td class='data_cell'>
		<input type='text' size='65' name='image_height' id='image_height' />
	</td>
</tr>
<tr>
	<td class='label_cell'>Slideshow Width</td>
	<td class='data_cell'>
		<input type='text' size='65' name='image_width' id='image_width' />
	</td>
</tr>

<tr>
	<td class='label_cell'>Slideshow Speed</td>
	<td class='data_cell'>
		<input type='text' size='4' name='image_speed' id='image_speed' /> Seconds between slides
	</td>
</tr>


<?php
	for ($i=1; $i <= 9; $i++) {
?>

<tr>
	<td class="label_cell">Image</td>
	<td class="data_cell">
		<input type="hidden" id="input_img<?php echo $i?>_src" value="" onchange="$('img_src<?php echo $i?>').src = 'http://' + DOMAIN + '/images/' + this.value;" />
		<input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2',
		'mode=lb2&imagePreviewID=img_src<?php echo $i?>&imageFilenameID=input_img<?php echo $i?>_src');" />
	</td>
</tr>
<tr class="generic_action">
        <td class="label_cell">Preview</td>
        <td class="data_cell"><img id="img_src<?php echo $i?>" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" width="100%" /></td>
</tr>
<tr>
	<td class='label_cell'>Alt Text</td>
	<td class='data_cell'>
		<input type='text' size='65' name='img_<?php echo $i?>_altext' id='img_<?php echo $i?>_altext' />
	</td>
</tr>

<tr>
	<td class='label_cell'>Image Link</td>
	<td class='data_cell'>
		<input type='text' size='65' name='img_<?php echo $i?>_link' id='img_<?php echo $i?>_link' />
	</td>
</tr>

<?php

	}
?>


</tr>
  </tbody>
</table>
