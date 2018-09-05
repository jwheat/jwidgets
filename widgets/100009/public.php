<?php
    # +++++++++++++++++++++++++++++++++++++++
    # Messiah College Homepage News Thumbnails
    # Author  : Jonathan Wheat, Messiah College
    # Email   : jwheat@messiah.edu
    # +++++++++++++++++++++++++++++++++++++++

    include_once("websections/JaduNews.php");
    $allNews = getAllNews (true, true, null, null, 5, 0, false);

    require_once "custom/news/MessiahWordPressRssLib.php";

        print "
            <div class='news-area'>
                <div class='container'>
                    <h3 class='title'>IN THE NEWS</h3>
                    <div class='holder'>
        ";
        
        $d=0;

        foreach ($allNews as $news) {
            $news_title = $news->title; 
            $news_caption = $news->summary;
            $news_image = $news->imageURL;

            if (empty($news_image)) {
               $news_image = "news_placeholder.jpg";
            }
            
            $news_link = getSiteRootURL() . buildNewsArticleURL($news->id, true, $news->title);

            $news_image_tag = "<img title='".$news_title."' src='/images/".$news_image."' alt='".$news_title."' />";

            $hidden = "";

            if ($d == 2 || $d == 3 || $d == 4) {
                $hidden = " hidden ";
            }

            if ($d == 4) {
                $hidden .= " hidden-tablet ";
            }

            print "
                <a href='".$news_link."' class='box gtm-news".$hidden."'>
                    <span class='img ie-fix'>
                        ".$news_image_tag."
                        <span class='ico'></span>
                    </span>
                    <span class='subtitle'>".$news_title."</span>
                    <div class='mc_news_description'>".$news_caption."</div>
                </a>
            ";  

            $d++;          
        }

        print "
                    </div>
                </div>
            </div>
        ";

?>