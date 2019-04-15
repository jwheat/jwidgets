<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/bottom_supplements.php';
    ?>
    
  </div>
<?php
    if ($oneColumnLayout == false) {
        ?>
            <aside class="left-supplements">
                <div class="frame frame-01">
                    <a class="advert-link" href="<?php print $field_array[$entryID]['issue_url']; ?>"><span>View the full issue</span></a>
                </div>
            </aside>

            <aside>
                <div  class="left-nav">
                    <a href="/info/22240/the_bridge"><h4>The Bridge</h4></a>

                    <ul  class="sec-nav" data-nav-menu="left_hand_navigation">
                        <li >
                            <a href="/info/22241/about">About</a>
                        </li>
                        <li >
                            <a href="/info/22243/get_connected">Get connected</a>
                        </li>
                        <li >
                            <a href="/info/22244/meet_the_staff">Meet the staff</a>
                        </li>
                        <li >
                            <a href="/info/22242/past_issues">Past issues</a>
                        </li>
                   </ul>
                </div>
            </aside>
<?php   if (
$field_array[$entryID]['does_this_story_have_a_video'] == 'Yes' ||
$field_array[$entryID]['does_this_story_have_an_image_gallery'] == 'Yes' ||
$field_array[$entryID]['does_this_story_have_a_website_to_link_to'] == 'Yes' ||
$field_array[$entryID]['does_this_story_have_audio_or_a_podcast'] == 'Yes'
) {
            ?>
            <aside class="left-supplements">
                <div class="frame">
                    <div class="quick-links bg-info">
                    <h5 class="sub-title">Online Extras</h5>
                    <ul class="info-list">

<?php                   if ($field_array[$entryID]['image_gallery_url'] != '') {
                if (strpos($field_array[$entryID]['image_gallery_url'], 'http') === false) {
                    $url = 'http://' . $field_array[$entryID]['image_gallery_url'];
                } else {
                    $url = $field_array[$entryID]['image_gallery_url'];
                }
                print " <li>
                                        <a href='" . $url . "'>Photo gallery</a>
                                    </li>";
            } ?>   

<?php                   if ($field_array[$entryID]['video_url'] != '') {
                if (strpos($field_array[$entryID]['video_url'], 'http') === false) {
                    $url = 'http://' . $field_array[$entryID]['video_url'];
                } else {
                    $url = $field_array[$entryID]['video_url'];
                }
                print " <li>
                                        <a class='fancybox-media' href='" . $url . "'>Video</a>
                                    </li>";
            }

            if ($field_array[$entryID]['website_url'] != '') {
                if (empty($field_array[$entryID]['link_text_for_url'])) {
                    $link_text_for_url = 'Website';
                } else {
                    $link_text_for_url = $field_array[$entryID]['link_text_for_url'];
                }

                if (strpos($field_array[$entryID]['website_url'], 'http') === false) {
                    $url = 'http://' . $field_array[$entryID]['website_url'];
                } else {
                    $url = $field_array[$entryID]['website_url'];
                }
                print " <li>
                                        <a class='fancybox-media' href='" . $url . "'>" . $link_text_for_url . '</a>
                                    </li>';
            }

            if ($field_array[$entryID]['audio_or_podcast_url'] != '') {
                if (empty($field_array[$entryID]['link_text_for_podcast'])) {
                    $link_text_for_url = 'Listen';
                } else {
                    $link_text_for_url = $field_array[$entryID]['link_text_for_podcast'];
                }

                if (strpos($field_array[$entryID]['audio_or_podcast_url'], 'http') === false) {
                    $url = 'http://' . $field_array[$entryID]['audio_or_podcast_url'];
                } else {
                    $url = $field_array[$entryID]['audio_or_podcast_url'];
                }
                print " <li>
                                        <a class='fancybox-media' href='" . $url . "'>" . $link_text_for_url . '</a>
                                    </li>';
            } ?>                        
                    </ul>
                    </div>
                </div>
            </aside>

<?php
        }
    }
?>

     
<?php
     if (!isset($indexPage) || !$indexPage) {
         ?>
        </div>
        </div>
        </div>
        </div>
<?php
     } ?>

<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/structure/footer.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/closing_javascript.php';

    if (defined('ANALYTICS_INCLUDE') && ANALYTICS_INCLUDE != '') {
        //print ANALYTICS_INCLUDE;
    }
?>
		</div>
        
    </body>
</html>