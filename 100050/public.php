<?php
        include_once('websections/JaduHomepageWidgetSettings.php');
        include_once('ext/json.php');

        $allWidgetLinks = array();

        if (isset($_POST['preview'])) {
                $newSettings = array();

                $j = 0;

                if (!empty($settings)) {
                        foreach ($settings as $name => $value) {
                                $newSettings[$j] = new stdClass();
                                $newSettings[$j]->name = $name;
                                $newSettings[$j]->value = $value;

                                $newSettings[$j]->value = str_replace('_apos_', "'", $newSettings[$j]->value);
                                $newSettings[$j]->value = str_replace('_amp_', "&", $newSettings[$j]->value);
                                $newSettings[$j]->value = str_replace('_eq_', '=', $newSettings[$j]->value);
                                $newSettings[$j]->value = str_replace('_hash_', '#', $newSettings[$j]->value);
                                $newSettings[$j]->value = str_replace('_ques_', '?', $newSettings[$j]->value);
                                $newSettings[$j]->value = str_replace('_perc_', '%', $newSettings[$j]->value);

                                $j++;
                        }
                }

                $settings = $newSettings;
        }
        else {
                if (isset($widget) && !is_array($widget)) {
                        if (isset($_POST['homepageContent'])) {
                                $settings = array();
                                foreach ($widgetSettings[$widget->id] as $setting) {
                                        $newSetting = new WidgetSetting();
                                        $newSetting->name = $setting->name;
                                        $newSetting->value = $setting->value;

                                        $newSetting->value = str_replace('_apos_', "'", $newSetting->value);
                                        $newSetting->value = str_replace('_amp_', "&", $newSetting->value);
                                        $newSetting->value = str_replace('_eq_', '=', $newSetting->value);
                                        $newSetting->value = str_replace('_hash_', '#', $newSetting->value);
                                        $newSetting->value = str_replace('_ques_', '?', $newSetting->value);
                                        $newSetting->value = str_replace('_perc_', '%', $newSetting->value);

                                        $settings[] = $newSetting;
                                }
                        }
                        else if (isset($_POST['action']) && $_POST['action'] == 'getPreviews') {
                                $settings = getAllSettingsForHomepageWidget($aWidget->id);
                        }
                        else if (isset($preview) && $preview == true){
                                $settings = getAllSettingsForHomepageWidget($widget->id, false);
                        }
                        else {
                                $settings = getAllSettingsForHomepageWidget($widget->id, true);
                        }
                }
                else {
                        if (isset($_POST['homepageContent'])) {
                                $settings = array();
                                foreach ($widgetSettings[$stack->id] as $setting) {
                                        $newSetting = new WidgetSetting();
                                        $newSetting->name = $setting->name;
                                        $newSetting->value = $setting->value;
                                        $settings[] = $newSetting;
                                }
                        }
                        else if (isset($_POST['getPreviews'])) {
                                $settings = getAllSettingsForHomepageWidget($aWidget->id);
                        }
                        else if (isset($preview) && $preview == true){
                                $settings = getAllSettingsForHomepageWidget($stack->id, false);
                        }
                        else {
                                $settings = getAllSettingsForHomepageWidget($stack->id, true);
                        }
                }
        }

        $tempLinks = array();
        $tempTitles = array();
        $tempButtons = array();
        $tempAligns = array();
        $nav_widget_title = '';
        $tempHTML = array();

        if (!empty($settings)) {
            #print_r($settings);

                foreach ($settings as $value) {
                        if (preg_match('/image([0-9]+)title/i', $value->name, $matches)) {
                                $tempTitles[$matches[1]] = stripslashes($value->value);
                        }
                        if (preg_match('/image([0-9]+)slide_title/i', $value->name, $matches)) {
                                $tempSlideTitles[$matches[1]] = stripslashes($value->value);
                        }
                        if (preg_match('/image([0-9]+)link/i', $value->name, $matches)) {
                                $tempLinks[$matches[1]] = $value->value;
                        }
                        if (preg_match('/image([0-9]+)description/i', $value->name, $matches)) {
                                $tempDescription[$matches[1]] = $value->value;
                        }
                        if (preg_match('/image([0-9]+)button/i', $value->name, $matches)) {
                                $tempButtons[$matches[1]] = $value->value;
                        }
                        if (preg_match('/image([0-9]+)align/i', $value->name, $matches)) {
                                $tempAligns[$matches[1]] = $value->value;
                        }
                        if (preg_match('/image([0-9]+)imageSrc/i', $value->name, $matches)) {
                                $tempImageSrc[$matches[1]] = $value->value;
                        }
                        if (preg_match('/image([0-9]+)image2Src/i', $value->name, $matches)) {
                                $tempImage2Src[$matches[1]] = $value->value;
                        }
                        if (preg_match('/image([0-9]+)imageOverlaySrc/i', $value->name, $matches)) {
                                $tempImageOverlaySrc[$matches[1]] = $value->value;
                        }
                        if (preg_match('/image([0-9]+)html/i', $value->name, $matches)) {
                                $tempHTML[$matches[1]] = $value->value;
                        }
                        if (preg_match('/image([0-9]+)button_hide/i', $value->name, $matches)) {
                                $tempButtonHide[$matches[1]] = $value->value;
                        }

                        if ($value->name == 'nav_widget_title') {
                                $nav_widget_title = $value->value;
                        }
                }
        }

        // Sort into correct positions using index
        ksort($tempLinks);
        foreach ($tempLinks as $index => $link) {
                $allWidgetLinks[] = array($tempTitles[$index], $tempLinks[$index], $tempDescription[$index], $tempImageSrc[$index], $tempButtons[$index], $tempAligns[$index],$tempSlideTitles[$index], $tempImage2Src[$index],$tempButtonHide[$index]);
        }



        #print_r ($allWidgetLinks);
?>

    <script type="text/javascript" src="/a/js/jpslide.js"></script>
    <link type="text/css" rel="stylesheet" href="/site/custom_scripts/styles/slider-widget.css" />
    
<div class='alt_gallery'>
    <ul class="slides">
<?php
    foreach ($allWidgetLinks as $wKey => $wValue) {

        if ($wValue[8] == "Yes") {
            $button_status = 'hide';
        } else {
            $button_status = "";
        }
        
?>
        <li>
            <a href="<?php print $wValue[1]; ?>?utm_source=<?php print $wValue[6]; ?>&utm_medium=web&utm_campaign=bridge-slider">
              <img src='/images/<?php print $wValue[3]; ?>' data-mobile-src='/images/<?php print $wValue[7]; ?>'/>
              <div class='overlay slide-<?php print $wValue[5]; ?>'>
                <div>
                    <h2><?php print $wValue[0]; ?></h2>
                    <p><?php print $wValue[2]; ?></p>
                    <span class='link <?php print $button_status;?>'>Read the story</span>
                                        
                </div>
              </div>
            </a>
        </li>

<?php
    }
?>
        </ul>
    </div>