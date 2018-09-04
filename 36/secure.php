<div id='properties'>
	<table>
		<tr>
			<td class="label_cell">Scale of thumbnail</td>
			<td class="data_cell"><select id='image_scale' size='1'>
					<option value='.20'>80% - Micro</option>
					<option value='.25'>75%</option>
					<option value='.30'>70% - Small</option>
					<option value='.40'>60%</option>
					<option value='.50' SELECTED>50% - Half</option>
					<option value='.60'>40%</option>
					<option value='.66'>33% - Medium</option>
					<option value='.70'>30%</option>
					<option value='.75'>25% - Large </option>
					<option value='.80'>20% </option>
					<option value='1'>100% - Full Size</option>
					</select>
			</td>
		</tr>
		<tr>
		<td class="label_cell">Image</td>
		<td class="data_cell">
			<input type="hidden" id="img_src" value="" onchange="$('img_srci').src = 'http://' + DOMAIN + '/images/' + this.value;" />
			<img id="img_srci" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" />
			<br />
			<input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=img_srci&imageFilenameID=img_src');" />
		</td>
		</tr>
		<tr>
			<td class='label_cell'>Image Caption</td>
			<td class='data_cell'>
				<input type='text' size='65' name='img_altext' id='img_altext' />
			</td>
		</tr>

		<tr>
			<td class='label_cell'>Link To</td>
			<td class='data_cell'>
				<input type='text' size='65' name='img_link' id='img_link' />
			</td>
		</tr>
	</table>
</div>