<?php
include_once("JaduConstants.php");
?>

<table class="form_table" id="lb_widget_content">
    <tbody>
        <tr>
          <td class="label_cell">Random Start</td>
          <td class="data_cell">
            <input type='checkbox' value='Y' name='param_disablerandom' id='param_disablerandom' /> Disable random start
          </td>
        </tr>        

        <tr>
          <td class="label_cell">Become a student (undergraduate) - Heading</td>
          <td class="data_cell">
            <input type="text" value="" id="bsu_heading" class="field" size="12">
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Become a student (undergraduate) - Sub-heading</td>
          <td class="data_cell">
            <textarea name='bsu_subheading' rows='1' cols='10' id='bsu_subheading'></textarea>
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Become a student (undergraduate) - Background image</td>
          <td class="data_cell">
          <input type="hidden" id="bsu_image" value="" onchange="$('bsu_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="bsu_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=bsu_imagei&imageFilenameID=bsu_image');" />
          </td>
        </tr>

        <tr>
          <td class="label_cell">Become a student (undergraduate) - Date Icon/Image</td>
          <td class="data_cell">
          <input type="hidden" id="bsu_date_ico_image" value="" onchange="$('bsu_date_ico_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="bsu_date_ico_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=bsu_date_ico_imagei&imageFilenameID=bsu_date_ico_image');" />
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Become a student (undergraduate) - Link</td>
          <td class="data_cell">
            <input type="text" value="" id="bsu_link" class="field" size="12">
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Become a student (undergraduate) - Link text</td>
          <td class="data_cell">
            <input type="text" value="" id="bsu_link_text" class="field" size="12">
          </td>
        </tr>

        <tr>
          <td class="label_cell">Become a student (undergraduate) - Link 2</td>
          <td class="data_cell">
            <input type="text" value="" id="bsu_link_2" class="field" size="12">
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Become a student (undergraduate) - Link 2 text</td>
          <td class="data_cell">
            <input type="text" value="" id="bsu_link_text_2" class="field" size="12">
          </td>
        </tr>

        <?php for ($i = 1; $i < 7; $i++) { ?>
        <tr>
          <td class="label_cell">Become a student (undergraduate) - Quick link <?php echo $i; ?></td>
          <td class="data_cell">
            <input type="text" value="" id="bsu_quick_link_<?php echo $i; ?>" class="field" size="12">
          </td>
        </tr>
        <tr>
          <td class="label_cell">Become a student (undergraduate) - Quick link text <?php echo $i; ?></td>
          <td class="data_cell">
            <input type="text" value="" id="bsu_quick_link_text_<?php echo $i; ?>" class="field" size="12">
          </td>
        </tr>
        <tr>
          <td class="label_cell">Become a student (undergraduate) - Quick link icon <?php echo $i; ?></td>
          <td class="data_cell">
            <input type="text" value="" id="bsu_quick_link_icon_<?php echo $i; ?>" class="field" size="12">
          </td>
        </tr>
        <?php } ?>
        
        <tr>
          <td class="label_cell">Become a student (graduate) - Heading</td>
          <td class="data_cell">
            <input type="text" value="" id="bsg_heading" class="field" size="12">
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Become a student (graduate) - Sub-heading</td>
          <td class="data_cell">
            <textarea name='bsg_subheading' rows='1' cols='10' id='bsg_subheading'></textarea>
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Become a student (graduate) - Background image</td>
          <td class="data_cell">
          <input type="hidden" id="bsg_image" value="" onchange="$('bsg_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="bsg_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=bsg_imagei&imageFilenameID=bsg_image');" />
          </td>
        </tr>
        <tr>
          <td class="label_cell">Become a student (graduate) - Link</td>
          <td class="data_cell">
            <input type="text" value="" id="bsg_link" class="field" size="12">
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Become a student (graduate) - Link text</td>
          <td class="data_cell">
            <input type="text" value="" id="bsg_link_text" class="field" size="12">
          </td>
        </tr>
        
        <?php for ($i = 1; $i < 6; $i++) { ?>
        <tr>
          <td class="label_cell">Become a student (graduate) - Quick link <?php echo $i; ?></td>
          <td class="data_cell">
            <input type="text" value="" id="bsg_quick_link_<?php echo $i; ?>" class="field" size="12">
          </td>
        </tr>
        <tr>
          <td class="label_cell">Become a student (graduate) - Quick link text <?php echo $i; ?></td>
          <td class="data_cell">
            <input type="text" value="" id="bsg_quick_link_text_<?php echo $i; ?>" class="field" size="12">
          </td>
        </tr>
        <tr>
          <td class="label_cell">Become a student (graduate) - Quick link icon <?php echo $i; ?></td>
          <td class="data_cell">
            <input type="text" value="" id="bsg_quick_link_icon_<?php echo $i; ?>" class="field" size="12">
          </td>
        </tr>
        <?php } ?>
        
        <tr>
          <td class="label_cell">Academic excellence - Heading</td>
          <td class="data_cell">
            <input type="text" value="" id="ae_heading" class="field" size="12">
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Academic excellence - Sub-heading</td>
          <td class="data_cell">
            <textarea name='ae_subheading' rows='1' cols='10' id='ae_subheading'></textarea>
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Academic excellence - Background image</td>
          <td class="data_cell">
          <input type="hidden" id="ae_image" value="" onchange="$('ae_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="ae_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=ae_imagei&imageFilenameID=ae_image');" />
          </td>
        </tr>
        <tr>
          <td class="label_cell">Academic excellence - Alignment</td>
          <td class="data_cell">
          <select id="ae_align" name="ae_align">
            <option value="align-text-center">Central</option>
            <option value="align-text-left">Left</option>
            <option value="align-text-right">Right</option>
          </select>
        </tr>
        <tr>
          <td class="label_cell">Academic excellence - Story heading</td>
          <td class="data_cell">
            <input type="text" value="" id="ae_story_heading" class="field" size="12">
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Academic excellence - Story teaser</td>
          <td class="data_cell">
            <textarea name='ae_story_teaser' rows='1' cols='10' id='ae_story_teaser'></textarea>
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Academic excellence - Story Link</td>
          <td class="data_cell">
            <input type="text" value="" id="ae_story_link" class="field" size="12">
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Academic excellence - Story Link text</td>
          <td class="data_cell">
            <input type="text" value="" id="ae_story_link_text" class="field" size="12">
          </td>
        </tr>

        <tr>
          <td class="label_cell">Career and internships - Heading</td>
          <td class="data_cell">
            <input type="text" value="" id="ci_heading" class="field" size="12">
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Career and internships - Sub-heading</td>
          <td class="data_cell">
            <textarea name='ci_subheading' rows='1' cols='10' id='ci_subheading'></textarea>
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Career and internships - Background image</td>
          <td class="data_cell">
          <input type="hidden" id="ci_image" value="" onchange="$('ci_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="ci_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=ci_imagei&imageFilenameID=ci_image');" />
          </td>
        </tr>
        <tr>
          <td class="label_cell">Career and internships - Alignment</td>
          <td class="data_cell">
          <select id="ci_align" name="ci_align">
            <option value="align-text-center">Central</option>
            <option value="align-text-left">Left</option>
            <option value="align-text-right">Right</option>
          </select>
        </tr>
        <tr>
          <td class="label_cell">Career and internships - Story heading</td>
          <td class="data_cell">
            <input type="text" value="" id="ci_story_heading" class="field" size="12">
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Career and internships - Story teaser</td>
          <td class="data_cell">
            <textarea name='ci_story_teaser' rows='1' cols='10' id='ci_story_teaser'></textarea>
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Career and internships - Story Link</td>
          <td class="data_cell">
            <input type="text" value="" id="ci_story_link" class="field" size="12">
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Career and internships - Story Link text</td>
          <td class="data_cell">
            <input type="text" value="" id="ci_story_link_text" class="field" size="12">
          </td>
        </tr>

        <tr>
          <td class="label_cell">Study Abroad - Heading</td>
          <td class="data_cell">
            <input type="text" value="" id="sa_heading" class="field" size="12">
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Study Abroad - Sub-heading</td>
          <td class="data_cell">
            <textarea name='sa_subheading' rows='1' cols='10' id='sa_subheading'></textarea>
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Study Abroad - Background image</td>
          <td class="data_cell">
          <input type="hidden" id="sa_image" value="" onchange="$('sa_imagei').src = 'http://' + DOMAIN + '/images/' + this.value;" />
            <img id="sa_imagei" class="img_preview" src="<?php print $SECURE_JADU_PATH; ?>/images/no_image.gif" style='max-width:400px;'/>
            <br />
            <input type="button" class="button" value="Image Library" onclick="return loadLightbox('image_manager/image_manager', 'lb2', 'mode=lb2&imagePreviewID=sa_imagei&imageFilenameID=sa_image');" />
          </td>
        </tr>
        <tr>
          <td class="label_cell">Study Abroad - Alignment</td>
          <td class="data_cell">
          <select id="sa_align" name="sa_align">
            <option value="align-text-center">Central</option>
            <option value="align-text-left">Left</option>
            <option value="align-text-right">Right</option>
          </select>
        </tr>
        <tr>
          <td class="label_cell">Study Abroad - Story heading</td>
          <td class="data_cell">
            <input type="text" value="" id="sa_story_heading" class="field" size="12">
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Study Abroad - Story teaser</td>
          <td class="data_cell">
            <textarea name='sa_story_teaser' rows='1' cols='10' id='sa_story_teaser'></textarea>
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Study Abroad - Story Link</td>
          <td class="data_cell">
            <input type="text" value="" id="sa_story_link" class="field" size="12">
          </td>
        </tr>        
        <tr>
          <td class="label_cell">Study Abroad - Story Link text</td>
          <td class="data_cell">
            <input type="text" value="" id="sa_story_link_text" class="field" size="12">
          </td>
        </tr>
    </tbody>
</table>
