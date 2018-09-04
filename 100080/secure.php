<?php
include_once("JaduConstants.php");

// initialise document editor
$editor = $jadu->getEditor();
?>
<table class="form_table" id="lb_widget_content">
    <tbody>
        <tr>
            <td class="label_cell">Into The City Overview</td>
            <td class="data_cell">
                <textarea name='slide1_overview' rows='1' cols='10' id='slide1_overview'></textarea>
            </td>
        </tr>
        <tr>
            <td class="label_cell">Into The City Image</td>
            <td class="data_cell">
            <input type="hidden" id="slide1_image" value="" onchange="$('slide1_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
                <img id="slide1_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
                <br />
                <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=slide1_imagei&imageFilenameID=slide1_image');" />
            </td>
        </tr>
        <tr>
            <td class="label_cell">Into The City Video</td>
            <td class="data_cell">
                <input type="text" value="" id="slide1_video" id="slide1_video">
            </td>
        </tr>

        <tr>
            <td class="label_cell">Rezumania Overview</td>
            <td class="data_cell">
                <textarea name='slide2_overview' rows='1' cols='10' id='slide2_overview'></textarea>
            </td>
        </tr>
        <tr>
            <td class="label_cell">Rezumania Image</td>
            <td class="data_cell">
            <input type="hidden" id="slide2_image" value="" onchange="$('slide2_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
                <img id="slide2_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
                <br />
                <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=slide2_imagei&imageFilenameID=slide2_image');" />
            </td>
        </tr>
        <tr>
            <td class="label_cell">Rezumania Video</td>
            <td class="data_cell">
                <input type="text" value="" id="slide2_video" id="slide2_video">
            </td>
        </tr>
        
        <tr>
            <td class="label_cell">Pizza With Professionals Overview</td>
            <td class="data_cell">
                <textarea name='slide3_overview' rows='1' cols='10' id='slide3_overview'></textarea>
            </td>
        </tr>
        <tr>
            <td class="label_cell">Pizza With Professionals Image</td>
            <td class="data_cell">
            <input type="hidden" id="slide3_image" value="" onchange="$('slide3_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
                <img id="slide3_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
                <br />
                <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=slide3_imagei&imageFilenameID=slide3_image');" />
            </td>
        </tr>
        <tr>
            <td class="label_cell">Pizza With Professionals Video</td>
            <td class="data_cell">
                <input type="text" value="" id="slide3_video" id="slide3_video">
            </td>
        </tr>
        
        <tr>
            <td class="label_cell">Exploring Graduate School Overview</td>
            <td class="data_cell">
                <textarea name='slide4_overview' rows='1' cols='10' id='slide4_overview'></textarea>
            </td>
        </tr>
        <tr>
            <td class="label_cell">Exploring Graduate School Image</td>
            <td class="data_cell">
            <input type="hidden" id="slide4_image" value="" onchange="$('slide4_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
                <img id="slide4_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
                <br />
                <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=slide4_imagei&imageFilenameID=slide4_image');" />
            </td>
        </tr>
        <tr>
            <td class="label_cell">Exploring Graduate School Video</td>
            <td class="data_cell">
                <input type="text" value="" id="slide4_video" id="slide4_video">
            </td>
        </tr>
        
        <tr>
            <td class="label_cell">Career & Graduate School Expo Overview</td>
            <td class="data_cell">
                <textarea name='slide5_overview' rows='1' cols='10' id='slide5_overview'></textarea>
            </td>
        </tr>
        <tr>
            <td class="label_cell">Career & Graduate School Expo Image</td>
            <td class="data_cell">
            <input type="hidden" id="slide5_image" value="" onchange="$('slide5_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
                <img id="slide5_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
                <br />
                <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=slide5_imagei&imageFilenameID=slide5_image');" />
            </td>
        </tr>
        <tr>
            <td class="label_cell">Career & Graduate School Expo Video</td>
            <td class="data_cell">
                <input type="text" value="" id="slide5_video" id="slide5_video">
            </td>
        </tr>
        
        <tr>
            <td class="label_cell">Mock Interview Days Overview</td>
            <td class="data_cell">
                <textarea name='slide6_overview' rows='1' cols='10' id='slide6_overview'></textarea>
            </td>
        </tr>
        <tr>
            <td class="label_cell">Mock Interview Days Image</td>
            <td class="data_cell">
            <input type="hidden" id="slide6_image" value="" onchange="$('slide6_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
                <img id="slide6_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
                <br />
                <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=slide6_imagei&imageFilenameID=slide6_image');" />
            </td>
        </tr>
        <tr>
            <td class="label_cell">Mock Interview Days Video</td>
            <td class="data_cell">
                <input type="text" value="" id="slide6_video" id="slide6_video">
            </td>
        </tr>
        
        <tr>
            <td class="label_cell">Etiquette Dinner & Mocktail Hour Overview</td>
            <td class="data_cell">
                <textarea name='slide7_overview' rows='1' cols='10' id='slide7_overview'></textarea>
            </td>
        </tr>
        <tr>
            <td class="label_cell">Etiquette Dinner & Mocktail Hour Image</td>
            <td class="data_cell">
            <input type="hidden" id="slide7_image" value="" onchange="$('slide7_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
                <img id="slide7_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
                <br />
                <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=slide7_imagei&imageFilenameID=slide7_image');" />
            </td>
        </tr>
        <tr>
            <td class="label_cell">Etiquette Dinner & Mocktail Hour Video</td>
            <td class="data_cell">
                <input type="text" value="" id="slide7_video" id="slide7_video">
            </td>
        </tr>
        
        <tr>
            <td class="label_cell">Adulting: A Mini Conference For Student Overview</td>
            <td class="data_cell">
                <textarea name='slide8_overview' rows='1' cols='10' id='slide8_overview'></textarea>
            </td>
        </tr>
        <tr>
            <td class="label_cell">Adulting: A Mini Conference For Student Image</td>
            <td class="data_cell">
            <input type="hidden" id="slide8_image" value="" onchange="$('slide8_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
                <img id="slide8_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
                <br />
                <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=slide8_imagei&imageFilenameID=slide8_image');" />
            </td>
        </tr>
        <tr>
            <td class="label_cell">Adulting: A Mini Conference For Student Video</td>
            <td class="data_cell">
                <input type="text" value="" id="slide8_video" id="slide8_video">
            </td>
        </tr>
        
        <tr>
            <td class="label_cell">Internships</td>
            <td class="data_cell">
                <?php print $editor->getEditorMarkup('internships', '', 'internships', false); ?>
            </td>
        </tr>
        <tr>
            <td class="label_cell">Service Learning</td>
            <td class="data_cell">
                <?php print $editor->getEditorMarkup('service_learning', '', 'service_learning', false); ?>
            </td>
        </tr>
        <tr>
            <td class="label_cell">Off Campus Programs</td>
            <td class="data_cell">
                <?php print $editor->getEditorMarkup('off_campus_programs', '', 'off_campus_programs', false); ?>
            </td>
        </tr>
        <tr>
            <td class="label_cell">Leadership</td>
            <td class="data_cell">
                <?php print $editor->getEditorMarkup('leadership2', '', 'leadership2', false); ?>
            </td>
        </tr>
        <tr>
            <td class="label_cell">Undergraduate Research</td>
            <td class="data_cell">
                <?php print $editor->getEditorMarkup('undergraduate_research', '', 'undergraduate_research', false); ?>
            </td>
        </tr>
    </tbody>
</table>
