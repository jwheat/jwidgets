<?php
    /**************************************************
    * Messiah College Dynamic Quick Links Widget
    * Screen : Front End
    *
    */

    include_once('websections/JaduHomepageWidgetSettings.php');
    include_once('ext/json.php');


    $img_src = "";
    $param_image_alttext = "";
    $param_heading = "";
    $content = "";
    $number_of_links = "";

    $param_url = array();
    $param_link_text = array();

    # get all values entered in secure.php

    if ('%IMG_SRC%' != '' && '%IMG_SRC%' != '%IMG_SRC'.'%') {
            $img_src = '%IMG_SRC%';
    }

    if ('%PARAM_IMAGE_ALTTEXT%' != '' && '%PARAM_IMAGE_ALTTEXT%' != '%PARAM_IMAGE_ALTTEXT'.'%') {
            $param_image_alttext = '%PARAM_IMAGE_ALTTEXT%';
    }

    if ('%PARAM_HEADING%' != '' && '%PARAM_HEADING%' != '%PARAM_HEADING'.'%') {
            $param_heading = '%PARAM_HEADING%';
    }

    if ('%CONTENT%' != '' && '%CONTENT%' != '%CONTENT'.'%') {
            $content = '%CONTENT%';
    }



    if (!function_exists('mc_nav_cmp')) {
        function mc_nav_cmp ($a, $b)
        {
            $a = str_replace('param_', '', $a->name);
            $a = str_replace('_link_text', '', $a);
            $a = str_replace('_url', '', $a);

            $b = str_replace('param_', '', $b->name);
            $b = str_replace('_link_text', '', $b);
            $b = str_replace('_url', '', $b);

            if ( $a == $b ) {
                return 0;
            }
            return ($a < $b ? -1 : 1);
        }
    }

    $allWidgetLinks = array();

    if (isset($_POST['preview'])) {
        $newSettings = array();

        $j = 0;

        if (!empty($settings)) {
            foreach ($settings as $name => $value) {
                $newSettings[$j] = new stdClass();
                $newSettings[$j]->name = $name;
                $newSettings[$j]->value = $value;

                $newSettings[$j]->value= str_replace('_apos_', "'", $newSettings[$j]->value);
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

                    $newSetting->value= str_replace('_apos_', "'", $newSetting->value);
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
            else {
                $settings = getAllSettingsForHomepageWidget($stack->id, true);
            }
        }
    }

    $tempLinks = array();
    $tempTitles = array();
    $nav_widget_title = '';
    $local_number_of_links = 0;

    if (!empty($settings)) {
        usort($settings, 'mc_nav_cmp');
        foreach ($settings as $value) {

                if (preg_match('/param_+[0-9]+_link_text/i', $value->name)) {
                    if ($value->value != "") {
                        $tempTitles[] = $value->value;
                        $local_number_of_links++;
                    }
                }
                if (preg_match('/param_+[0-9]+_url/i', $value->name)) {
                    if ($value->value != "") {
                        $tempLinks[] = $value->value;
                    }
                }

                #if (preg_match('/number_of_links/i', $value->name)) {
                #    $number_of_links = $value->value;
                #}

                if ($value->name == 'nav_widget_title') {
                    $nav_widget_title = $value->value;
                }
        }
    }

    for ($i = 0; $i < $local_number_of_links; $i++) {
        $allWidgetLinks[] = array($tempTitles[$i], $tempLinks[$i]);
    }

#    for ($i = 0; $i < sizeof($tempLinks); $i++) {
#        $allWidgetLinks[] = array($tempTitles[$i], $tempLinks[$i]);
#    }
?>
<!-- div class="multi-purpose-container" -->
<div class="widget-quick-links bg-info">
<?php
    if ($img_src != "") { ?>
        <img border="0" src="/images/<?php print $img_src;?>" alt="<?php print $param_image_alttext;?>" width="95%">
    <?php } ?>

    <?php if ($param_heading != "") { ?>
        <h2><?php print $param_heading;?></h2>
    <?php } ?>


    <?php if ($content != "") { ?>
        <div class="text"><?php print $content;?></div>
    <?php }


    if ($nav_widget_title != '') {
?>
    <h2><?php print encodeHtml($nav_widget_title); ?></h2>
<?php
    }

    if (!empty($allWidgetLinks)) {
?>
    <ul class="list">
<?php
        foreach ($allWidgetLinks as $widgetLink) {
?>
        <li><a title="<?php print encodeHtml($widgetLink[0]); ?>" href="<?php
        if (strpos($widgetLink[1], 'http://') !== 0 && strpos($widgetLink[1], 'https://') !== 0) {
            print 'http://';
        }
        print encodeHtml($widgetLink[1]);
?>"><?php print encodeHtml($widgetLink[0]); ?></a></li>
<?php
        }
?>
    </ul>
<?php
    }
?>

</div>
