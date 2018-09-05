<?php
    $dev = false;
    if ($dev) {
      $cssFolder = '';
      $slidesFolder = 'slides/';
      $allWidgetLinks = array();
      $allWidgetLinks[] = array('', '', '', "image2.png", '', '',"Top 50", '', '');
      $allWidgetLinks[] = array('', '', '', "image3.png", '', '',"#1", '', '');
      $allWidgetLinks[] = array('', '', '', "image4.png", '', '',"#5", '', '');
      $allWidgetLinks[] = array('', '', '', "image6.png", '', '',"#8", '', '');
      $allWidgetLinks[] = array('', '', '', "image5.png", '', '',"#55", '', '');
      $allWidgetLinks[] = array('', '', '', "image1.png", '', '',"#4", '', '');
    } else {
        $cssFolder = 'http://www.messiah.edu/site/custom_scripts/styles/';
        $slidesFolder = 'http://www.messiah.edu/images/';
        
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
                        if (preg_match('/image([0-9]+)imageOverlaySrc/i', $value->name, $matches)) {
                                $tempImageOverlaySrc[$matches[1]] = $value->value;
                        }
                        if (preg_match('/image([0-9]+)html/i', $value->name, $matches)) {
                                $tempHTML[$matches[1]] = $value->value;
                                
                        }

                        if ($value->name == 'nav_widget_title') {
                                $nav_widget_title = $value->value;
                        }
                }
        }

        // Sort into correct positions using index
        ksort($tempLinks);
        foreach ($tempLinks as $index => $link) {
                $allWidgetLinks[] = array($tempTitles[$index], $tempLinks[$index], $tempDescription[$index], $tempImageSrc[$index], $tempButtons[$index], $tempAligns[$index],$tempSlideTitles[$index], $tempImageOverlaySrc[$index], $tempHTML[$index]);
        }
    }
?>

<link type="text/css" rel="stylesheet" href="<?php echo $cssFolder; ?>about.css?v=5"/>

<style>
  .flex-direction-nav {
      margin: 0!important;
  }
  
  .flex-nav-next {
      margin: 0!important;
  }
</style>

<div id="messiah-glance">
  <div class="rankings img-box">
    <h2 class="strike"><span>Rankings and Recognitions</span></h2>
    <div class="float-wrap">

      <div class="gallery gallery-01 ie-fix" style="-webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none;">
        <ul class="slides" style="padding: 0;">
<?php
        $slideCount = 0;
        $imgCount = 0;
        $count = count($allWidgetLinks);
        $lastSlide = intval(ceil($count / 3));
        $lastMargin = '1%;';
        if ($count % 3 == 2) {
          $lastMargin = '1% 9%;';
        }
        if ($count % 3 == 1) {
          $lastMargin = '1% 33%;';
        }
        foreach ($allWidgetLinks as $wKey => $wValue) {
          $slideTitle = $wValue[6];
          $slideUrl = $wValue[3];
          $imgCount++;
          
          if ($imgCount % 3 == 1) {
            $slideCount++;
?>
          <li class="slide-0<?php print $slideCount;?>" style="padding: 0; min-height: 100px">
            <div class="float left-nav nav-btn">
            </div>
            <div class="float float-wrap slide-content white-txt" style="padding: 0;">
<?php     } 

          $margin = '1%;';
          if ($lastSlide == $slideCount) {
            $margin = $lastMargin;
          }
              //class="float third pad-box hide-on-mobile"
?>          
              <div class="float third pad-box" style="background-image: url(<?php print $slidesFolder . $slideUrl; ?>); background-repeat: no-repeat; background-position: center; margin: <?php print $margin; ?>">
              </div>
<?php     if ($imgCount % 3 == 0) { ?>
            </div>
            <div class="float right-nav nav-btn">
            </div>
          </li>
<?php     }
        }
?>
        </ul>
      </div><!-- / gallery -->
  
      <div class="gallery gallery-01 ie-fix" style="-webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none;">
        <ul class="slides" style="padding: 0;">
<?php
        $slideCount = 0;
        $imgCount = 0;
        $count = count($allWidgetLinks);
        $lastSlide = intval(ceil($count / 2));
        $lastMargin = '1% 9%;';
        if ($count % 2 == 1) {
          $lastMargin = '1% 33%;';
        }
        foreach ($allWidgetLinks as $wKey => $wValue) {
          //class="float third pad-box hide-on-mobile"
          $slideTitle = $wValue[6];
          $slideUrl = $wValue[3];
          $imgCount++;
          
          if ($imgCount % 2 == 1) {
            $slideCount++;
?>
          <li class="slide-0<?php print $slideCount;?>" style="padding: 0; min-height: 100px">
            <div class="float left-nav nav-btn">
            </div>
            <div class="float float-wrap slide-content white-txt" style="padding: 0;">
<?php     } 

          $margin = '1% 9%;';
          if ($lastSlide == $slideCount) {
            $margin = $lastMargin;
          }
?>          
              <div class="float third pad-box" style="background-image: url(<?php print $slidesFolder . $slideUrl; ?>); background-repeat: no-repeat; background-position: center; margin: <?php print $margin; ?>">
              </div>
<?php     if ($imgCount % 2 == 0) { ?>
            </div>
            <div class="float right-nav nav-btn">
            </div>
          </li>
<?php     }
        }
?>
        </ul>
      </div><!-- / gallery -->  
  
      <div class="gallery gallery-01 ie-fix" style="-webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none;">
        <ul class="slides" style="padding: 0;">
<?php
        $slideCount = 0;
        foreach ($allWidgetLinks as $wKey => $wValue) {
          //class="float third pad-box hide-on-mobile"
          $slideTitle = $wValue[6];
          $slideUrl = $wValue[3];
          $slideCount++;
?>
          <li class="slide-0<?php print $slideCount;?>" style="padding: 0; min-height: 100px">
            <div class="float left-nav nav-btn">
            </div>
            <div class="float float-wrap slide-content white-txt" style="padding: 0;">
              <div class="float third pad-box" style="background-image: url(<?php print $slidesFolder . $slideUrl; ?>); background-repeat: no-repeat; background-position: center; margin: 1% 33%;">
              </div>
            </div>
            <div class="float right-nav nav-btn">
            </div>
          </li>
<?php
        }
?>
        </ul>
      </div><!-- / gallery -->  

      <div class="float-wrap white-txt pad-box">
        <div class="float third center undergrad">
          <span class="txt-s4">Undergraduate</span>
        </div>
        <div class="float third center">
          <a class="button light-btn" href="http://www.messiah.edu/info/20020/recognitions">Read more</a>
        </div>
        <div class="float third center grad">
          <span class="txt-s4">Graduate</span>
        </div>
      </div>
    </div>
  </div>  
</div><!-- messiah-glance  -->