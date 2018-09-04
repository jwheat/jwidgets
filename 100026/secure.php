<table class="form_table" id="tbl_widget_content">
        <input type="hidden" value="<?php print $DOMAIN; ?>" id="DOMAIN" />
        <tbody>
                <tr>
                        <td class="label_cell"></td>
                        <td class="data_cell"><input type="button" onclick="addWidgetImage();" class="button" value="Add Slide"></td>
                </tr>           
                <tr>
                        <td colspan="2">
                                <table class="form_table">
                                        <tbody id="image_carousel_widget_images" style="display: none;">
                                        
                                        </tbody>
                                </table>
                        </td>
                </tr>
        </tbody>
        <tfoot style="display:none">
                <tr>
                        <td class="label_cell">Background Image*</td>
                        <td class="data_cell">
                                <input type="hidden" onchange="$('image_carousel_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" value="" id="image_carousel_image">
                                <input type="button" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=image_carousel_imagei&imageFilenameID=image_carousel_image');" value="Image Library" class="button">
                        </td>
                </tr>
                <tr>
                        <td class="label_cell">Background Preview</td>
                        <td class="data_cell"><img src="../images/no_image.gif" class="img_preview" id="image_carousel_imagei"></td>
                </tr>
                <tr>
                        <td class="label_cell">Overlay Image</td>
                        <td class="data_cell">
                                <input type="hidden" onchange="$('image_carousel_overlay_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" value="" id="image_carousel_overlay_image">
                                <input type="button" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=image_carousel_overlay_imagei&imageFilenameID=image_carousel_overlay_image');" value="Image Library" class="button">
                        </td>
                </tr>
                <tr>
                        <td class="label_cell">Overlay Preview</td>
                        <td class="data_cell"><img src="../images/no_image.gif" class="img_preview" id="image_carousel_overlay_imagei"></td>
                </tr>

                <tr>
                        <td class="label_cell">Slide Title*</td>
                        <td class="data_cell"><input type="text" value="" id="image_carousel_slide_title" class="field" size="12"></td>
                </tr>
                <tr>
                        <td class="label_cell">Title</td>
                        <td class="data_cell"><input type="text" value="" id="image_carousel_title" class="field" size="12"></td>
                </tr>
                <tr>
                        <td class="label_cell">Link</td>
                        <td class="data_cell"><input type="text" value="" id="image_carousel_link" class="field" size="12"></td>
                </tr>
                <tr>
                        <td class="label_cell">Description</td>
                        <td class="data_cell"><textarea cols="43" rows="3" value="" id="image_carousel_description" class="field"></textarea></td>
                </tr>
                <tr>
                        <td class="label_cell">Button Title</td>
                        <td class="data_cell"><input type="text" value="" id="image_carousel_button" class="field" size="12"></td>
                </tr>
                <tr>
                        <td class="label_cell">Alignment</td>
                        <td class="data_cell">
                        <select id="image_carousel_align" name="selectAlignment">
                            <option value="aligncentral">Central</option>
                            <option value="alignleft">Left</option>
                            <option value="alignright">Right</option>
                        </select>
                </tr>
                <tr>
                        <td class="label_cell">HTML Block</td>
                        <td class="data_cell"><textarea cols="43" rows="3" value="" id="image_carousel_html" class="field"></textarea></td>
                </tr>                
                <tr>
                        <td class="label_cell"><input type="button" onclick="deleteWidgetImage()" value="Delete Slide" id="widgetImageDelete" class="button" style="display: none;"></td>
                        <td class="data_cell"><input type="button" onclick="saveWidgetImage();" value="Save Slide" class="button"></td>
                </tr>
        </tfoot>        
</table>