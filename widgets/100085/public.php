<?php
  function showLinks($folder, $grad, $academics, $careers, $abroad) {
?>
            <div class="car2-links">
                <ul>
                    <li class="car2-grad-button hide-on-mobile <?php echo $grad; ?>"><a class="gtm-car-nav">Become a student</a></li>
                    <li class="car2-academics-button hide-on-mobile <?php echo $academics; ?>"><a class="gtm-car-nav">Academic excellence</a></li>
                    <li class="car2-explore-button"><a class="gtm-car-scroll">Explore Messiah<br><img src="<?php echo $folder; ?>img/homepage-carousel/car2-arrow-down.png"></a></li>
                    <li class="car2-careers-button hide-on-mobile <?php echo $careers; ?>"><a class="gtm-car-nav">Careers & Internships</a></li>
                    <li class="car2-abroad-button hide-on-mobile <?php echo $abroad; ?>"><a class="gtm-car-nav" >Study Abroad</a></li>
                </ul>
            </div>
<?php
  }

  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = 11;
    $folder = '/site/custom_scripts/styles/';
    $imageFolder = 'https://www.messiah.edu/images/';
    
    $param_disablerandom = "";
    if ('%PARAM_DISABLERANDOM%' != '' && '%PARAM_DISABLERANDOM%' != '%PARAM_DISABLERANDOM' . '%') {
      $param_disablerandom = '%PARAM_DISABLERANDOM%';
    }

    $bsuHeading = "";
    if ('%BSU_HEADING%' != '' && '%BSU_HEADING%' != '%BSU_HEADING' . '%') {
      $bsuHeading = '%BSU_HEADING%';
    }
    $bsuSubHeading = "";
    if ('%BSU_SUBHEADING%' != '' && '%BSU_SUBHEADING%' != '%BSU_SUBHEADING' . '%') {
      $bsuSubHeading = '%BSU_SUBHEADING%';
    }
    $bsuImage = "";
    if ('%BSU_IMAGE%' != '' && '%BSU_IMAGE%' != '%BSU_IMAGE' . '%') {
      $bsuImage = '%BSU_IMAGE%';
      $bsuImage = $imageFolder . $bsuImage;
    }
    $bsuLink = "";
    if ('%BSU_LINK%' != '' && '%BSU_LINK%' != '%BSU_LINK' . '%') {
      $bsuLink = '%BSU_LINK%';
    }
    $bsuLinkText = "";
    if ('%BSU_LINK_TEXT%' != '' && '%BSU_LINK_TEXT%' != '%BSU_LINK_TEXT' . '%') {
      $bsuLinkText = '%BSU_LINK_TEXT%';
    }
    $bsuLink_2 = "";
    if ('%BSU_LINK_2%' != '' && '%BSU_LINK_2%' != '%BSU_LINK_2' . '%') {
      $bsuLink_2 = '%BSU_LINK_2%';
    }
    $bsuLinkText_2 = "";
    if ('%BSU_LINK_TEXT_2%' != '' && '%BSU_LINK_TEXT_2%' != '%BSU_LINK_TEXT_2' . '%') {
      $bsuLinkText_2 = '%BSU_LINK_TEXT_2%';
    }
    $bsuDateIco = "";
    if ('%BSU_DATE_ICO_IMAGE%' != '' && '%BSU_DATE_ICO_IMAGE%' != '%BSU_DATE_ICO_IMAGE' . '%') {
      $bsuDateIco = '%BSU_DATE_ICO_IMAGE%';
      $bsuDateIco = $imageFolder . $bsuDateIco;      
    }
    
    $bsuQuickLink = array();
    if ('%BSU_QUICK_LINK_1%' != '' && '%BSU_QUICK_LINK_1%' != '%BSU_QUICK_LINK_1' . '%') {
      $bsuQuickLink[] = '%BSU_QUICK_LINK_1%';
    }
    if ('%BSU_QUICK_LINK_2%' != '' && '%BSU_QUICK_LINK_2%' != '%BSU_QUICK_LINK_2' . '%') {
      $bsuQuickLink[] = '%BSU_QUICK_LINK_2%';
    }
    if ('%BSU_QUICK_LINK_3%' != '' && '%BSU_QUICK_LINK_3%' != '%BSU_QUICK_LINK_3' . '%') {
      $bsuQuickLink[] = '%BSU_QUICK_LINK_3%';
    }
    if ('%BSU_QUICK_LINK_4%' != '' && '%BSU_QUICK_LINK_4%' != '%BSU_QUICK_LINK_4' . '%') {
      $bsuQuickLink[] = '%BSU_QUICK_LINK_4%';
    }
    if ('%BSU_QUICK_LINK_5%' != '' && '%BSU_QUICK_LINK_5%' != '%BSU_QUICK_LINK_5' . '%') {
      $bsuQuickLink[] = '%BSU_QUICK_LINK_5%';
    }
    if ('%BSU_QUICK_LINK_6%' != '' && '%BSU_QUICK_LINK_6%' != '%BSU_QUICK_LINK_6' . '%') {
      $bsuQuickLink[] = '%BSU_QUICK_LINK_6%';
    }

    $bsuQuickLinkText = array();
    if ('%BSU_QUICK_LINK_TEXT_1%' != '' && '%BSU_QUICK_LINK_TEXT_1%' != '%BSU_QUICK_LINK_TEXT_1' . '%') {
      $bsuQuickLinkText[] = '%BSU_QUICK_LINK_TEXT_1%';
    }
    if ('%BSU_QUICK_LINK_TEXT_2%' != '' && '%BSU_QUICK_LINK_TEXT_2%' != '%BSU_QUICK_LINK_TEXT_2' . '%') {
      $bsuQuickLinkText[] = '%BSU_QUICK_LINK_TEXT_2%';
    }
    if ('%BSU_QUICK_LINK_TEXT_3%' != '' && '%BSU_QUICK_LINK_TEXT_3%' != '%BSU_QUICK_LINK_TEXT_3' . '%') {
      $bsuQuickLinkText[] = '%BSU_QUICK_LINK_TEXT_3%';
    }
    if ('%BSU_QUICK_LINK_TEXT_4%' != '' && '%BSU_QUICK_LINK_TEXT_4%' != '%BSU_QUICK_LINK_TEXT_4' . '%') {
      $bsuQuickLinkText[] = '%BSU_QUICK_LINK_TEXT_4%';
    }
    if ('%BSU_QUICK_LINK_TEXT_5%' != '' && '%BSU_QUICK_LINK_TEXT_5%' != '%BSU_QUICK_LINK_TEXT_5' . '%') {
      $bsuQuickLinkText[] = '%BSU_QUICK_LINK_TEXT_5%';
    }
    if ('%BSU_QUICK_LINK_TEXT_6%' != '' && '%BSU_QUICK_LINK_TEXT_6%' != '%BSU_QUICK_LINK_TEXT_6' . '%') {
      $bsuQuickLinkText[] = '%BSU_QUICK_LINK_TEXT_6%';
    }

    $bsuQuickLinkIcon = array();
    if ('%BSU_QUICK_LINK_ICON_1%' != '' && '%BSU_QUICK_LINK_ICON_1%' != '%BSU_QUICK_LINK_ICON_1' . '%') {
      $bsuQuickLinkIcon[] = '%BSU_QUICK_LINK_ICON_1%';
    }
    if ('%BSU_QUICK_LINK_ICON_2%' != '' && '%BSU_QUICK_LINK_ICON_2%' != '%BSU_QUICK_LINK_ICON_2' . '%') {
      $bsuQuickLinkIcon[] = '%BSU_QUICK_LINK_ICON_2%';
    }
    if ('%BSU_QUICK_LINK_ICON_3%' != '' && '%BSU_QUICK_LINK_ICON_3%' != '%BSU_QUICK_LINK_ICON_3' . '%') {
      $bsuQuickLinkIcon[] = '%BSU_QUICK_LINK_ICON_3%';
    }
    if ('%BSU_QUICK_LINK_ICON_4%' != '' && '%BSU_QUICK_LINK_ICON_4%' != '%BSU_QUICK_LINK_ICON_4' . '%') {
      $bsuQuickLinkIcon[] = '%BSU_QUICK_LINK_ICON_4%';
    }
    if ('%BSU_QUICK_LINK_ICON_5%' != '' && '%BSU_QUICK_LINK_ICON_5%' != '%BSU_QUICK_LINK_ICON_5' . '%') {
      $bsuQuickLinkIcon[] = '%BSU_QUICK_LINK_ICON_5%';
    }
    if ('%BSU_QUICK_LINK_ICON_6%' != '' && '%BSU_QUICK_LINK_ICON_6%' != '%BSU_QUICK_LINK_ICON_6' . '%') {
      $bsuQuickLinkIcon[] = '%BSU_QUICK_LINK_ICON_6%';
    }
    
    $bsgHeading = "";
    if ('%BSG_HEADING%' != '' && '%BSG_HEADING%' != '%BSG_HEADING' . '%') {
      $bsgHeading = '%BSG_HEADING%';
    }
    $bsgSubHeading = "";
    if ('%BSG_SUBHEADING%' != '' && '%BSG_SUBHEADING%' != '%BSG_SUBHEADING' . '%') {
      $bsgSubHeading = '%BSG_SUBHEADING%';
    }
    $bsgImage = "";
    if ('%BSG_IMAGE%' != '' && '%BSG_IMAGE%' != '%BSG_IMAGE' . '%') {
      $bsgImage = '%BSG_IMAGE%';
      $bsgImage = $imageFolder . $bsgImage;
    }
    $bsgLink = "";
    if ('%BSG_LINK%' != '' && '%BSG_LINK%' != '%BSG_LINK' . '%') {
      $bsgLink = '%BSG_LINK%';
    }
    $bsgLinkText = "";
    if ('%BSG_LINK_TEXT%' != '' && '%BSG_LINK_TEXT%' != '%BSG_LINK_TEXT' . '%') {
      $bsgLinkText = '%BSG_LINK_TEXT%';
    }

    $bsgQuickLink = array();
    if ('%BSG_QUICK_LINK_1%' != '' && '%BSG_QUICK_LINK_1%' != '%BSG_QUICK_LINK_1' . '%') {
      $bsgQuickLink[] = '%BSG_QUICK_LINK_1%';
    }
    if ('%BSG_QUICK_LINK_2%' != '' && '%BSG_QUICK_LINK_2%' != '%BSG_QUICK_LINK_2' . '%') {
      $bsgQuickLink[] = '%BSG_QUICK_LINK_2%';
    }
    if ('%BSG_QUICK_LINK_3%' != '' && '%BSG_QUICK_LINK_3%' != '%BSG_QUICK_LINK_3' . '%') {
      $bsgQuickLink[] = '%BSG_QUICK_LINK_3%';
    }
    if ('%BSG_QUICK_LINK_4%' != '' && '%BSG_QUICK_LINK_4%' != '%BSG_QUICK_LINK_4' . '%') {
      $bsgQuickLink[] = '%BSG_QUICK_LINK_4%';
    }
    if ('%BSG_QUICK_LINK_5%' != '' && '%BSG_QUICK_LINK_5%' != '%BSG_QUICK_LINK_5' . '%') {
      $bsgQuickLink[] = '%BSG_QUICK_LINK_5%';
    }

    $bsgQuickLinkText = array();
    if ('%BSG_QUICK_LINK_TEXT_1%' != '' && '%BSG_QUICK_LINK_TEXT_1%' != '%BSG_QUICK_LINK_TEXT_1' . '%') {
      $bsgQuickLinkText[] = '%BSG_QUICK_LINK_TEXT_1%';
    }
    if ('%BSG_QUICK_LINK_TEXT_2%' != '' && '%BSG_QUICK_LINK_TEXT_2%' != '%BSG_QUICK_LINK_TEXT_2' . '%') {
      $bsgQuickLinkText[] = '%BSG_QUICK_LINK_TEXT_2%';
    }
    if ('%BSG_QUICK_LINK_TEXT_3%' != '' && '%BSG_QUICK_LINK_TEXT_3%' != '%BSG_QUICK_LINK_TEXT_3' . '%') {
      $bsgQuickLinkText[] = '%BSG_QUICK_LINK_TEXT_3%';
    }
    if ('%BSG_QUICK_LINK_TEXT_4%' != '' && '%BSG_QUICK_LINK_TEXT_4%' != '%BSG_QUICK_LINK_TEXT_4' . '%') {
      $bsgQuickLinkText[] = '%BSG_QUICK_LINK_TEXT_4%';
    }
    if ('%BSG_QUICK_LINK_TEXT_5%' != '' && '%BSG_QUICK_LINK_TEXT_5%' != '%BSG_QUICK_LINK_TEXT_5' . '%') {
      $bsgQuickLinkText[] = '%BSG_QUICK_LINK_TEXT_5%';
    }

    $bsgQuickLinkIcon = array();
    if ('%BSG_QUICK_LINK_ICON_1%' != '' && '%BSG_QUICK_LINK_ICON_1%' != '%BSG_QUICK_LINK_ICON_1' . '%') {
      $bsgQuickLinkIcon[] = '%BSG_QUICK_LINK_ICON_1%';
    }
    if ('%BSG_QUICK_LINK_ICON_2%' != '' && '%BSG_QUICK_LINK_ICON_2%' != '%BSG_QUICK_LINK_ICON_2' . '%') {
      $bsgQuickLinkIcon[] = '%BSG_QUICK_LINK_ICON_2%';
    }
    if ('%BSG_QUICK_LINK_ICON_3%' != '' && '%BSG_QUICK_LINK_ICON_3%' != '%BSG_QUICK_LINK_ICON_3' . '%') {
      $bsgQuickLinkIcon[] = '%BSG_QUICK_LINK_ICON_3%';
    }
    if ('%BSG_QUICK_LINK_ICON_4%' != '' && '%BSG_QUICK_LINK_ICON_4%' != '%BSG_QUICK_LINK_ICON_4' . '%') {
      $bsgQuickLinkIcon[] = '%BSG_QUICK_LINK_ICON_4%';
    }
    if ('%BSG_QUICK_LINK_ICON_5%' != '' && '%BSG_QUICK_LINK_ICON_5%' != '%BSG_QUICK_LINK_ICON_5' . '%') {
      $bsgQuickLinkIcon[] = '%BSG_QUICK_LINK_ICON_5%';
    }
    
    $aeHeading = "";
    if ('%AE_HEADING%' != '' && '%AE_HEADING%' != '%AE_HEADING' . '%') {
      $aeHeading = '%AE_HEADING%';
    }
    $aeSubHeading = "";
    if ('%AE_SUBHEADING%' != '' && '%AE_SUBHEADING%' != '%AE_SUBHEADING' . '%') {
      $aeSubHeading = '%AE_SUBHEADING%';
    }
    $aeImage = "";
    if ('%AE_IMAGE%' != '' && '%AE_IMAGE%' != '%AE_IMAGE' . '%') {
      $aeImage = '%AE_IMAGE%';
      $aeImage = $imageFolder . $aeImage;
    }
    $aeAlign = "align-text-right";
    if ('%AE_ALIGN%' != '' && '%AE_ALIGN%' != '%AE_ALIGN' . '%') {
      $aeAlign = '%AE_ALIGN%';
    }
    $aeStoryHeading = "";
    if ('%AE_STORY_HEADING%' != '' && '%AE_STORY_HEADING%' != '%AE_STORY_HEADING' . '%') {
      $aeStoryHeading = '%AE_STORY_HEADING%';
    }
    $aeStoryTeaser = "";
    if ('%AE_STORY_TEASER%' != '' && '%AE_STORY_TEASER%' != '%AE_STORY_TEASER' . '%') {
      $aeStoryTeaser = '%AE_STORY_TEASER%';
    }
    $aeStoryLink = "";
    if ('%AE_STORY_LINK%' != '' && '%AE_STORY_LINK%' != '%AE_STORY_LINK' . '%') {
      $aeStoryLink = '%AE_STORY_LINK%';
    }
    $aeStoryLinkText = "";
    if ('%AE_STORY_LINK_TEXT%' != '' && '%AE_STORY_LINK_TEXT%' != '%AE_STORY_LINK_TEXT' . '%') {
      $aeStoryLinkText = '%AE_STORY_LINK_TEXT%';
    }

    $ciHeading = "";
    if ('%CI_HEADING%' != '' && '%CI_HEADING%' != '%CI_HEADING' . '%') {
      $ciHeading = '%CI_HEADING%';
    }
    $ciSubHeading = "";
    if ('%CI_SUBHEADING%' != '' && '%CI_SUBHEADING%' != '%CI_SUBHEADING' . '%') {
      $ciSubHeading = '%CI_SUBHEADING%';
    }
    $ciImage = "";
    if ('%CI_IMAGE%' != '' && '%CI_IMAGE%' != '%CI_IMAGE' . '%') {
      $ciImage = '%CI_IMAGE%';
      $ciImage = $imageFolder . $ciImage;
    }
    $ciAlign = "align-text-right";
    if ('%CI_ALIGN%' != '' && '%CI_ALIGN%' != '%CI_ALIGN' . '%') {
      $ciAlign = '%CI_ALIGN%';
    }
    $ciStoryHeading = "";
    if ('%CI_STORY_HEADING%' != '' && '%CI_STORY_HEADING%' != '%CI_STORY_HEADING' . '%') {
      $ciStoryHeading = '%CI_STORY_HEADING%';
    }
    $ciStoryTeaser = "";
    if ('%CI_STORY_TEASER%' != '' && '%CI_STORY_TEASER%' != '%CI_STORY_TEASER' . '%') {
      $ciStoryTeaser = '%CI_STORY_TEASER%';
    }
    $ciStoryLink = "";
    if ('%CI_STORY_LINK%' != '' && '%CI_STORY_LINK%' != '%CI_STORY_LINK' . '%') {
      $ciStoryLink = '%CI_STORY_LINK%';
    }
    $ciStoryLinkText = "";
    if ('%CI_STORY_LINK_TEXT%' != '' && '%CI_STORY_LINK_TEXT%' != '%CI_STORY_LINK_TEXT' . '%') {
      $ciStoryLinkText = '%CI_STORY_LINK_TEXT%';
    }

    $saHeading = "";
    if ('%SA_HEADING%' != '' && '%SA_HEADING%' != '%SA_HEADING' . '%') {
      $saHeading = '%SA_HEADING%';
    }
    $saSubHeading = "";
    if ('%SA_SUBHEADING%' != '' && '%SA_SUBHEADING%' != '%SA_SUBHEADING' . '%') {
      $saSubHeading = '%SA_SUBHEADING%';
    }
    $saImage = "";
    if ('%SA_IMAGE%' != '' && '%SA_IMAGE%' != '%SA_IMAGE' . '%') {
      $saImage = '%SA_IMAGE%';
      $saImage = $imageFolder . $saImage;
    }
    $saAlign = "align-text-center";
    if ('%SA_ALIGN%' != '' && '%SA_ALIGN%' != '%SA_ALIGN' . '%') {
      $saAlign = '%SA_ALIGN%';
    }
    $saStoryHeading = "";
    if ('%SA_STORY_HEADING%' != '' && '%SA_STORY_HEADING%' != '%SA_STORY_HEADING' . '%') {
      $saStoryHeading = '%SA_STORY_HEADING%';
    }
    $saStoryTeaser = "";
    if ('%SA_STORY_TEASER%' != '' && '%SA_STORY_TEASER%' != '%SA_STORY_TEASER' . '%') {
      $saStoryTeaser = '%SA_STORY_TEASER%';
    }
    $saStoryLink = "";
    if ('%SA_STORY_LINK%' != '' && '%SA_STORY_LINK%' != '%SA_STORY_LINK' . '%') {
      $saStoryLink = '%SA_STORY_LINK%';
    }
    $saStoryLinkText = "";
    if ('%SA_STORY_LINK_TEXT%' != '' && '%SA_STORY_LINK_TEXT%' != '%SA_STORY_LINK_TEXT' . '%') {
      $saStoryLinkText = '%SA_STORY_LINK_TEXT%';
    }
  } else {
    $bsuHeading = '<span>APPLY FOR FREE USING CODE "MerryChristmas"</span>';
    $bsuSubHeading = 'Take an important step toward becoming a Messiah College Falcon!';
    $bsuImage = 'img/homepage-carousel/undergrad-bg.png';
    $bsuLink = '';
    $bsuLinkText = 'Undergrad Application';

    $bsuLink_2 = "Visit Campus";
    $bsuLinkText_2 = "Visit Campus";
    $bsuDateIco = "img/homepage-carousel/4_20_18_OPENHOUSE.png";
    
    $bsuQuickLink = array();
    $bsuQuickLink[] = '';
    $bsuQuickLink[] = '';
    $bsuQuickLink[] = '';
    $bsuQuickLink[] = '';
    $bsuQuickLink[] = '';
    $bsuQuickLink[] = '';

    $bsuQuickLinkText = array();
    $bsuQuickLinkText[] = 'Academic Programs';
    $bsuQuickLinkText[] = 'Visit Campus';
    $bsuQuickLinkText[] = 'Apply';
    $bsuQuickLinkText[] = 'Tuition & Aid';
    $bsuQuickLinkText[] = 'Request Info';
    $bsuQuickLinkText[] = '6th Item';
    $bsuQuickLinkText[] = '';

    $bsuQuickLinkIcon = array();
    $bsuQuickLinkIcon[] = 'fa-book';
    $bsuQuickLinkIcon[] = 'fa-map-marker';
    $bsuQuickLinkIcon[] = 'fa-pencil-square-o';
    $bsuQuickLinkIcon[] = 'fa-usd';
    $bsuQuickLinkIcon[] = 'fa-laptop';
    $bsuQuickLinkIcon[] = 'fa-book';
        
    $bsgHeading = 'Apply for Free';
    $bsgSubHeading = 'Take an important step toward becoming a Messiah College Falcon!';
    $bsgImage = 'img/homepage-carousel/grad-bg.png';
    $bsgLink = '';
    $bsgLinkText = 'Grad Application';
    
    $bsgQuickLink = array();
    $bsgQuickLink[] = '';
    $bsgQuickLink[] = '';
    $bsgQuickLink[] = '';
    $bsgQuickLink[] = '';
    $bsgQuickLink[] = '';

    $bsgQuickLinkText = array();
    $bsgQuickLinkText[] = 'Academic Programs';
    $bsgQuickLinkText[] = 'Visit Campus';
    $bsgQuickLinkText[] = 'Apply';
    $bsgQuickLinkText[] = 'Tuition & Aid';
    $bsgQuickLinkText[] = 'Request Info';

    $bsgQuickLinkIcon = array();
    $bsgQuickLinkIcon[] = 'fa-book';
    $bsgQuickLinkIcon[] = 'fa-map-marker';
    $bsgQuickLinkIcon[] = 'fa-pencil-square-o';
    $bsgQuickLinkIcon[] = 'fa-usd';
    $bsgQuickLinkIcon[] = 'fa-laptop';
    
    $aeHeading = 'Academic Excellence';
    $aeSubHeading = 'A nationally ranked private Christian college';
    $aeImage = 'img/homepage-carousel/academics-bg.jpg';
    $aeAlign = "align-text-right";
    $aeStoryHeading = "Student's Senior Project Leads to a Grant";
    $aeStoryTeaser = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nibh orci, rhoncus non rutrum a, molestie quis nisi. Etiam sit amet ullamcorper libero. Vivamus sit amet diam a felis luctus efficitur sed eu metus. Nam nec tempor nunc.';
    $aeStoryLink = 'http://google.com';
    $aeStoryLinkText = 'read the full story';

    $ciHeading = 'Careers and Internships';
    $ciSubHeading = 'Explore your calling - from your first year through graduation';
    $ciImage = 'img/homepage-carousel/careers-bg.png';
    $ciAlign = "align-text-right";
    $ciStoryHeading = "Student's Senior Project Leads to a Grant";
    $ciStoryTeaser = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nibh orci, rhoncus non rutrum a, molestie quis nisi. Etiam sit amet ullamcorper libero. Vivamus sit amet diam a felis luctus efficitur sed eu metus. Nam nec tempor nunc.';
    $ciStoryLink = 'http://google.com';
    $ciStoryLinkText = 'read the full story';

    $saHeading = 'Study Abroad';
    $saSubHeading = 'Where in the world will you go?';
    $saImage = 'img/homepage-carousel/abroad-bg.png';
    $saAlign = "align-text-center";
    $saStoryHeading = "Student's Senior Project Leads to a Grant";
    $saStoryTeaser = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nibh orci, rhoncus non rutrum a, molestie quis nisi. Etiam sit amet ullamcorper libero. Vivamus sit amet diam a felis luctus efficitur sed eu metus. Nam nec tempor nunc.';
    $saStoryLink = 'http://google.com';
    $saStoryLinkText = 'read the full story';
  }

  if ($param_disablerandom != "Y") {
    $rnd = rand(0, 3);
  } else {
    $rnd = 0;
  }

  $undergradInactive = "";
  $gradInactive = "inactive";
  $activeClass = '.car2-undergrad';
  if (isset($_COOKIE['mc_student_type'])) {
    if ($_COOKIE['mc_student_type'] == '1') {
      $undergradInactive = "inactive";
      $gradInactive = "";
      $activeClass = '.car2-grad';
    }
  }
?>
    <link rel="stylesheet" href="<?php echo $folder; ?>fonts/font-awesome/css/font-awesome.min.css">
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">
    <input type="hidden" id="mc-active" value="<?php echo $activeClass; ?>">
    
    <?php if ($dev) { ?>
    <link href="slider.css?v=<?php echo $version; ?>" rel="stylesheet">
    <?php } ?>

    <div class="carousel-2-wrapper">
        <div class="car2-sidebar car2-sidebar-undergrad fadein" <?php echo ($undergradInactive == '' ? '' : 'style="display: none"'); ?>>
            <ul>
                <li><span>Next Steps</span> for Undergrad Students</li>
                <li><a class="gtm-ug-next" href="<?php echo $bsuQuickLink[0]; ?>"><span class="hide-on-mobile"><?php echo $bsuQuickLinkText[0]; ?></span><i class="fa <?php echo $bsuQuickLinkIcon[0]; ?>" aria-hidden="true"></i></a></li>
                <li><a class="gtm-ug-next" href="<?php echo $bsuQuickLink[1]; ?>"><span class="hide-on-mobile"><?php echo $bsuQuickLinkText[1]; ?></span><i class="fa <?php echo $bsuQuickLinkIcon[1]; ?>" aria-hidden="true"></i></a></li>
                <li><a class="gtm-ug-next" href="<?php echo $bsuQuickLink[2]; ?>"><span class="hide-on-mobile"><?php echo $bsuQuickLinkText[2]; ?></span><i class="fa <?php echo $bsuQuickLinkIcon[2]; ?>" aria-hidden="true"></i></a></li>
                <li><a class="gtm-ug-next" href="<?php echo $bsuQuickLink[3]; ?>"><span class="hide-on-mobile"><?php echo $bsuQuickLinkText[3]; ?></span><i class="fa <?php echo $bsuQuickLinkIcon[3]; ?>" aria-hidden="true"></i></a></li>
                <li><a class="gtm-ug-next" href="<?php echo $bsuQuickLink[4]; ?>"><span class="hide-on-mobile"><?php echo $bsuQuickLinkText[4]; ?></span><i class="fa <?php echo $bsuQuickLinkIcon[4]; ?>" aria-hidden="true"></i></a></li>
                <?php if ($bsuQuickLinkText[5] != '') { ?>
                <li><a class="gtm-ug-next" href="<?php echo $bsuQuickLink[5]; ?>"><span class="hide-on-mobile"><?php echo $bsuQuickLinkText[5]; ?></span><i class="fa <?php echo $bsuQuickLinkIcon[5]; ?>" aria-hidden="true"></i></a></li>
                <?php } ?>
                <li><a class="show-grad"><span class="hide-on-mobile"><span class="car2-switch-to">Switch to</span>Graduate Programs</span><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        
        <div class="car2-sidebar car2-sidebar-grad fadein" <?php echo ($gradInactive == '' ? '' : 'style="display: none"'); ?>>
            <ul>
                <li><span>Next Steps</span> for Graduate Students</li>
                <li><a class="gtm-grad-next" href="<?php echo $bsgQuickLink[0]; ?>"><?php echo $bsgQuickLinkText[0]; ?><i class="fa <?php echo $bsgQuickLinkIcon[0]; ?>" aria-hidden="true"></i></a></li>
                <li><a class="gtm-grad-next" href="<?php echo $bsgQuickLink[1]; ?>"><?php echo $bsgQuickLinkText[1]; ?><i class="fa <?php echo $bsgQuickLinkIcon[1]; ?>" aria-hidden="true"></i></a></li>
                <li><a class="gtm-grad-next" href="<?php echo $bsgQuickLink[2]; ?>"><?php echo $bsgQuickLinkText[2]; ?><i class="fa <?php echo $bsgQuickLinkIcon[2]; ?>" aria-hidden="true"></i></a></li>
                <li><a class="gtm-grad-next" href="<?php echo $bsgQuickLink[3]; ?>"><?php echo $bsgQuickLinkText[3]; ?><i class="fa <?php echo $bsgQuickLinkIcon[3]; ?>" aria-hidden="true"></i></a></li>
                <li><a class="gtm-grad-next" href="<?php echo $bsgQuickLink[4]; ?>"><?php echo $bsgQuickLinkText[4]; ?><i class="fa <?php echo $bsgQuickLinkIcon[4]; ?>" aria-hidden="true"></i></a></li>
                <li><a class="show-undergrad"><span><span class="car2-switch-to">Switch to</span>Undergrad Programs</span><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        
        <div class="carousel-2 car2-undergrad align-text-left <?php echo ($rnd == 0 ? $undergradInactive : 'inactive') ?>" style="background-image: url(<?php echo $bsuImage; ?>);">
            <div class="car2-content">
                <div class="car2-content-info">
                    <?php if ($bsuDateIco != "") { ?>
                      <img src="<?php echo $bsuDateIco;?>" class="date-ico">
                    <?php } ?>
                    <h2><?php echo $bsuHeading; ?></h2>
                    <p><?php echo $bsuSubHeading; ?></p>
                    <a class="car2-button" href="<?php echo $bsuLink; ?>"><?php echo $bsuLinkText; ?></a>
                    <?php if ($bsuLinkText_2 != "") { ?>
                    <a class="car2-button" href="<?php echo $bsuLink_2; ?>"><?php echo $bsuLinkText_2; ?></a>
                    <?php } ?>
                </div>
            </div>
            <?php showLinks($folder, 'active', '', '', ''); ?>
        </div>
        
        <div class="carousel-2 car2-grad align-text-left <?php echo ($rnd == 0 ? $gradInactive : 'inactive') ?>" style="background-image: url(<?php echo $bsgImage; ?>);">
            <div class="car2-content">
                <div class="car2-content-info">
                    <h2><?php echo $bsgHeading; ?></h2>
                    <p><?php echo $bsgSubHeading; ?></p>
                    <a class="car2-button" href="<?php echo $bsgLink; ?>"><?php echo $bsgLinkText; ?></a>
                </div>
            </div>
            <?php showLinks($folder, 'active', '', '', ''); ?>
        </div>

        <div class="carousel-2 car2-academics align-text-left <?php echo ($rnd == 1 ? '' : 'inactive') ?>" style="background-image: url(<?php echo $aeImage; ?>);">
            <div class="car2-content">
                <div class="car2-content-info">
                    <h2><?php echo $aeHeading; ?></h2>
                    <p><?php echo $aeSubHeading; ?></p>
                    <a class="car2-button" href="https://www.messiah.edu/majors-minors-programs">Undergrad Programs</a> 
                    <a class="car2-button" href="http://www.messiah.edu/info/20436/degrees">Graduate Programs</a>
                </div>
                <div id="academics-slideout" class="car2-slideout closed" data-reopen="" style="display:none">
                    <div class="car2-slideout-header">
                        <p><i class="fa fa-info-circle" aria-hidden="true"></i><i class="fa fa-times" aria-hidden="true"></i> <?php echo $aeStoryHeading; ?></p>
                    </div>
                    <div class="car2-slideout-content">
                        <p><?php echo $aeStoryTeaser; ?></p>
                        <p><a <?php if (($aeStoryLink == '') || ($aeStoryLinkText == '')) { ?> style="visibility: hidden" <?php } ?> href="<?php echo $aeStoryLink; ?>"><?php echo $aeStoryLinkText; ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
                        <p class="car2-read-v">READ THE STORY</p>
                    </div>
                </div>
            </div>
            <?php showLinks($folder, '', 'active', '', ''); ?>
        </div>

        <div class="carousel-2 car2-careers align-text-left <?php echo ($rnd == 2 ? '' : 'inactive') ?>" style="background-image: url(<?php echo $ciImage; ?>);">
            <div class="car2-content">
                <div class="car2-content-info">
                    <h2><?php echo $ciHeading; ?></h2>
                    <p><?php echo $ciSubHeading; ?></p>
                    <a class="car2-button" href="https://www.messiah.edu/career-outcomes">Undergrad Outcomes</a> 
                    <a class="car2-button" href="https://www.messiah.edu/grad-careers">Graduate Outcomes</a>
                </div>
                <div id="careers-slideout" class="car2-slideout closed" data-reopen="" style="display:none">
                    <div class="car2-slideout-header">
                        <p><i class="fa fa-info-circle" aria-hidden="true"></i><i class="fa fa-times" aria-hidden="true"></i> <?php echo $ciStoryHeading; ?></p>
                    </div>
                    <div class="car2-slideout-content">
                        <p><?php echo $ciStoryTeaser; ?></p>
                        <p><a <?php if (($ciStoryLink == '') || ($ciStoryLinkText == '')) { ?> style="visibility: hidden" <?php } ?> href="<?php echo $ciStoryLink; ?>"><?php echo $ciStoryLinkText; ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <p class="car2-read-v">READ THE STORY</p>
                    </div>
                </div>
            </div>
            <?php showLinks($folder, '', '', 'active', ''); ?>
        </div>
        
        <div class="carousel-2 car2-abroad align-text-left <?php echo ($rnd == 3 ? '' : 'inactive') ?>" style="background-image: url(<?php echo $saImage; ?>);">
            <div class="car2-content">
                <div class="car2-content-info">
                    <h2><?php echo $saHeading; ?></h2>
                    <p><?php echo $saSubHeading; ?></p>
                    <a class="car2-button" href="https://www.messiah.edu/study-abroad">Explore undergrad opportunities</a>
                </div>
                <div id="abroad-slideout" class="car2-slideout closed" data-reopen="" style="display:none">
                    <div class="car2-slideout-header">
                        <p><i class="fa fa-info-circle" aria-hidden="true"></i><i class="fa fa-times" aria-hidden="true"></i> <?php echo $saStoryHeading; ?></p>
                    </div>
                    <div class="car2-slideout-content">
                        <p><?php echo $saStoryTeaser; ?></p>
                        <p><a <?php if (($saStoryLink == '') || ($saStoryLinkText == '')) { ?> style="visibility: hidden" <?php } ?> href="<?php echo $saStoryLink; ?>"><?php echo $saStoryLinkText; ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <p class="car2-read-v">READ THE STORY</p>
                    </div>
                </div>
            </div>
            <?php showLinks($folder, '', '', '', 'active'); ?>
        </div>    
    </div>    
    
    <script type="text/javascript" src="<?php echo $folder; ?>mc-homepage-carousel.js?v=3<?php echo $version; ?>"></script>
