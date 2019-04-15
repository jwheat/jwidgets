<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/lib.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/structure/breadcrumb.php';
    require_once 'websections/JaduAnnouncements.php';
    require_once 'JaduConstants.php';
    require_once 'JaduStyles.php';

    if (basename($_SERVER['SCRIPT_NAME']) == 'index.php' || Jadu_Service_User::getInstance()->isSessionLoggedIn()) {
        require_once 'websections/JaduTrackedURLs.php';
        require_once 'websections/JaduTrackedURLResults.php';
    }

    $liveUpdate = getLiveAnnouncement();
    $trackedURLs = [];
    $hideColumn = (bool) hideColumn();
    $script = basename($_SERVER['SCRIPT_NAME']);
    $accessibilitySettings = '';

    if (Jadu_Service_User::getInstance()->isSessionLoggedIn()) {
        if (isset($_REQUEST['trackedURLRead'])) {
            $trackedURLResult = getTrackedURLResult(Jadu_Service_User::getInstance()->getSessionUserID(), $_REQUEST['trackedURLID']);
            confirmTrackedURLRead($trackedURLResult->id);
        } elseif (isset($_REQUEST['trackedURLID']) && is_numeric($_REQUEST['trackedURLID'])) {
            $trackedURL = getTrackedURL($_REQUEST['trackedURLID']);
            $trackedURLResult = getTrackedURLResult(Jadu_Service_User::getInstance()->getSessionUserID(), $trackedURL->id);
            if ($trackedURLResult->id == -1) {
                $trackedURLResult->userID = Jadu_Service_User::getInstance()->getSessionUserID();
                $trackedURLResult->trackedURLID = $trackedURL->id;
                newTrackedURLResult($trackedURLResult);
            } elseif ($trackedURLResult->confirmedRead > 0) {
                unset($trackedURL);
            }
        }
        if (basename($_SERVER['SCRIPT_NAME']) == 'index.php') {
            if (!Jadu_Service_User::getInstance()->isSessionLoggedIn()) {
                $trackedURLs = getAllTrackedURLs(true);
            } else {
                $trackedURLs = getAllUnreadTrackedURLsForUser(Jadu_Service_User::getInstance()->getSessionUserID());
            }
        }
    }
    if (($script != 'documents_infob.php' && $hideColumn == true) || ($script == 'documents_infob.php' && $pageStructure->id == '2')) {
        $oneColumnLayout = true;
    } else {
        $oneColumnLayout = false;
    }
    if (isset($_COOKIE['userColourscheme']) && !empty($_COOKIE['userColourscheme'])) {
        switch ($_COOKIE['userColourscheme']) {
            case 'highcontrast':
                $accessibilitySettings .= ' user-scheme__high-contrast';
                break;
            case 'cream':
                $accessibilitySettings .= ' user-scheme__cream';
                break;
            case 'blue':
                $accessibilitySettings .= ' user-scheme__blue';
                break;
        }
    }
    if (isset($_COOKIE['userFontsize']) && !empty($_COOKIE['userFontsize'])) {
        switch ($_COOKIE['userFontsize']) {
            case 'small':
                $accessibilitySettings .= ' user-size__small';
                break;
            case 'medium':
                $accessibilitySettings .= ' user-size__medium';
                break;
            case 'large':
                $accessibilitySettings .= ' user-size__large';
                break;
        }
    }
    if (isset($_COOKIE['userFontchoice']) && !empty($_COOKIE['userFontchoice'])) {
        switch ($_COOKIE['userFontchoice']) {
            case 'comicsans':
                $accessibilitySettings .= ' user-font__comic-sans';
                break;
            case 'courier':
                $accessibilitySettings .= ' user-font__courier';
                break;
            case 'arial':
                $accessibilitySettings .= ' user-font__arial';
                break;
           case 'times':
                $accessibilitySettings .= ' user-font__times';
                break;
        }
    }
    if (isset($_COOKIE['userLetterspacing']) && !empty($_COOKIE['userLetterspacing'])) {
        switch ($_COOKIE['userLetterspacing']) {
            case 'wide':
                $accessibilitySettings .= ' user-spacing__wide';
                break;
            case 'wider':
                $accessibilitySettings .= ' user-spacing__wider';
                break;
            case 'widest':
                $accessibilitySettings .= ' user-spacing__widest';
                break;
        }
    }

    $scriptName = $_SERVER['PHP_SELF'];
    if ($scriptName != '/site/xfp/scripts/forms.php' && $scriptName != '/site/xfp/scripts/services_info.php' && $scriptName != '/site/xfp/scripts/user_form_archive.php' && $scriptName != '/site/xfp/scripts/user_form_info.php' && $scriptName != '/site/xfp/scripts/user_home.php' && $scriptName != '/site/xfp/scripts/whats_new_index.php' && $scriptName != '/site/xfp/scripts/xforms_form.php' && $scriptName != '/site/xfp/scripts/xforms_index.php' && $scriptName != '/site/xfp/scripts/xforms_list.php') {
        ?>
    </head>
    <body<?php if ($oneColumnLayout == true || !empty($accessibilitySettings)) {
            ?> class="<?php if ($oneColumnLayout == true) {
                ?>one-column<?php if (!empty($accessibilitySettings)) {
                    ?> <?php
                }
            }
            if (!empty($accessibilitySettings)) {
                print trim($accessibilitySettings);
            }
            if ($_SERVER['REQUEST_URI'] == '/'):?> main-home-page<?php endif; ?> home-page"<?php
        } ?>>

    <script>
      dataLayer = [];
    </script>

    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KGNCRL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KGNCRL');</script>
    <!-- End Google Tag Manager -->

<?php
    }
?>

    <div class="mm-page">
<?php  if ($liveUpdate->id != '' && $liveUpdate->id != -1 && !isset($_COOKIE['HideJaduAnnouncements' . $liveUpdate->id])) {
    ?>
    <div class="allert-box">
        <div class="container">
            <h3><?php print encodeHtml($liveUpdate->title); ?></h3>
            <div class="holder">
            <p><?php print $liveUpdate->content; ?></p> 
<?php
        if ($liveUpdate->url != '') {
            ?>
             <div class="btn-holder">
                <a class="btn" href="<?php print encodeHtml($liveUpdate->url); ?>"><?php print encodeHtml($liveUpdate->linkText); ?></a>
             </div>
		<a class="close ie-fix" href="javascript:void(0);" onclick="JaduAnnouncements.setCookie('true', <?php print $liveUpdate->id?>);">X</a>
<?php
        } ?>
            </div>
        </div>
    </div>
    
     <script>
        var JaduAnnouncements = JaduAnnouncements || {};
        JaduAnnouncements.setCookie = function (cookieValue, id) {
            'use strict';
            var name = 'HideJaduAnnouncements' + id,  // Name of cookie
                days = 1,                  // Number of days the cookie expires in
                value = cookieValue,
                exdate = new Date(),
                expires = '';

            if (days) {
                exdate.setTime(exdate.getTime()+(days*24*60*60*1000));
                expires = '; expires='+exdate.toUTCString();
            }

            document.cookie = name+'='+value+expires+'; path=/';
            window.location.href = '<?php $_SERVER['REQUEST_URI']; ?>';
        };
        </script>
<?php
}
    if (isset($trackedURL) && $trackedURL->id != -1) {
        ?>
        <div class="callout callout__info announcement">
            <h2>Have you read this page?</h2>
            <h3><?php print encodeHtml($trackedURL->title); ?></h3>
            <p><?php print $trackedURL->description; ?></p>
            <form action="<?php print getSiteRootURL(); ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="trackedURLID" value="<?php print (int) $trackedURL->id; ?>">
                <input type="submit" class="button button__primary" name="trackedURLRead" value="I have read this page">
            </form>
        </div>
<?php
    } elseif (!empty($trackedURLs)) {
        ?>
        <div class="callout callout__info announcement">
            <h2>Have you read these pages?</h2>
            <ul class="item-list">
<?php
        foreach ($trackedURLs as $trackedURL) {
            $trackedURLID = 'trackedURLID=' . $trackedURL->id;
            if (mb_strpos($trackedURL->url, '?') === false) {
                $trackedURLID = '?' . $trackedURLID;
            } else {
                $trackedURLID = '&' . $trackedURLID;
            } ?>
                <li>
                    <a href="<?php print encodeHtml($trackedURL->url . $trackedURLID); ?>"><?php print encodeHtml($trackedURL->urlText); ?></a>
                </li>
<?php
        } ?>
            </ul>
        </div>
<?php
    }
?>

<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/structure/header.php';
?>

<?php
    if (!isset($indexPage) || !$indexPage) {
        if (($script == 'home_info.php' || $script == 'documents.php') && defined('CUSTOM_BANNER_IMAGE_SEASONS') && isset($homepage) && in_array(mb_strtolower($STYLESHEET), explode(',', mb_strtolower(CUSTOM_BANNER_IMAGE_SEASONS)))) {
            if (defined('CUSTOM_BANNER_IMAGE_PATH') && defined('CUSTOM_BANNER_IMAGE_DEFAULT_FOLDER')) {
                if (isset($_GET['homepageID']) && is_numeric($_GET['homepageID'])) {
                    $homepageID = $_GET['homepageID'];
                } elseif (isset($_GET['categoryID']) && is_numeric($_GET['categoryID'])) {
                    $defaultCategoryHomepage = getHomepageCategoryDefaultForCategory($_GET['categoryID']);
                    if ($defaultCategoryHomepage != null) {
                        $homepage = getHomepage($defaultCategoryHomepage->homepageID, true);
                        if ($homepage->id > 0) {
                            $homepageID = $homepage->id;
                        }
                    }
                }

                if ($homepageID > 0) {
                    $bannerImagePath = '/' . CUSTOM_BANNER_IMAGE_PATH . '/' . $homepageID;
                    $bannerImageFilenames = getFilenamesInDir($_SERVER['DOCUMENT_ROOT'] . $bannerImagePath);

                    if (sizeof($bannerImageFilenames) == 0) {
                        $bannerImagePath = '/' . CUSTOM_BANNER_IMAGE_PATH . '/' . CUSTOM_BANNER_IMAGE_DEFAULT_FOLDER;
                        $bannerImageFilenames = getFilenamesInDir($_SERVER['DOCUMENT_ROOT'] . $bannerImagePath);
                    }

                    if (sizeof($bannerImageFilenames) > 0) {
                        $bannerImageFilename = $bannerImageFilenames[rand(0, sizeof($bannerImageFilenames) - 1)];
                        $bannerImageFullPath = $bannerImagePath . '/' . $bannerImageFilename; ?>

<div class="visual-block">
	<img src="<?php print $bannerImageFullPath; ?>" alt="" />
    <header class="page-title">
       <h1 class="color-1"><?php print encodeHtml($MAST_HEADING); ?></h1>
    </header>
</div>

<?php
                    }
                }
            }
        } else {
            ?>

<header class="heading">
    <div class="holder">
       <h1 class="color-4"><?php print encodeHtml($MAST_HEADING); ?></h1>
    </div>
</header> 

<?php
        } ?>
        <div id="main">
<?php
        if (($script == 'home_info.php' || $script == 'documents.php') && defined('CUSTOM_BANNER_IMAGE_SEASONS') && isset($homepage) && in_array(mb_strtolower($STYLESHEET), explode(',', mb_strtolower(CUSTOM_BANNER_IMAGE_SEASONS)))) {
            ?>
		    <header class="page-title">
		       <h1 class="color-1"><?php print encodeHtml($MAST_HEADING); ?></h1>
		    </header>
<?php
        } ?>
        <div class="main-holder">
<!-- googleoff: all -->
        <div class="breadcrumbs bread__wrap">
            <ul>
<?php
        if (!empty($MAST_BREADCRUMB)) {
            ?>
                <?php print $MAST_BREADCRUMB; ?>
<?php
        } else {
            ?>
                <li>Home</li>
<?php
        } ?>
            </ul>
        </div>
<!-- googleon: all -->
        <div class="<?php if ($oneColumnLayout == true) {
            ?>one-column<?php
        } ?> <?php if ($oneColumnLayout == false) {
            ?>two-columns<?php
        } ?> ">
			<div id="content">
<?php
    }
?>