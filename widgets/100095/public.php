<?php
    require_once "custom/academics/class.MessiahDirectoryCategoryHelper.php";
    require_once "directoryBuilder/JaduDirectoryCategoryTree.php";

    #$directorycategory = new DirectoryCategory;
    $directoryhelper = new MessiahDirectoryCategoryHelper;
    $directory_id = 10;

    $param_edition_category = "";
      $story_card_html = "";

    if ($param_edition_category == '%' . 'PARAM_EDITION_CATEGORY%' || $param_edition_category == '') {
        $param_edition_category = '%PARAM_EDITION_CATEGORY%';
        $param_edition_category = $param_edition_category;
    }

    // Edition Name
    $bridge_edition_name_array = $directoryhelper->get_directory_category_name ($directory_id, $param_edition_category);

    foreach ($bridge_edition_name_array as $row) {
        $bridge_edition_name = $row['title'];
    }

    // get parent categories under this edition
    $rows = $directoryhelper->get_toplevel_directory_categories ($directory_id, $param_edition_category);

    $html = $subnav_html = "";

    foreach ($rows as $crow) {
        $category_id = $crow['id'];
        $category_title = $crow['title'];

        $cat_class = str_replace("Our ", "", $category_title);

        $menu_class = "subnav-" . strtolower(str_replace(" ", "-",$category_title));

        #$html .= "<span id='".$category_id."' class='filter_link'>" . $category_title . "</span> | " ;

        $html .= "<li class='stories-".$cat_class." story-filter' data-submenu='".$menu_class."' data-subid='".$category_id."'><a>".$category_title."</a></li>";

        // Start new subnav for this category
        $subnav_html .= "<ul class='story-subnav' id='".$menu_class."' style='display:none;'>";
        // spin through and build the items for this category
        $subnav_rows = $directoryhelper->get_toplevel_directory_categories ($directory_id, $category_id);
        foreach ($subnav_rows as $srow) {
            $subnav_id = $srow['id'];
            $subnav_title = $srow['title'];
            $subnav_html .= "<li class='subnav-item story-filter' data-subid='".$subnav_id."'><a>".$subnav_title."</a></li>";
        }
        $subnav_html .= "</ul>";
    }

    // Filtering the cards with this cateogry as the parent
    if (isset($_GET['f'])) {
        $filter_catid = $_GET['f'];
        $filter_catname = $directoryhelper->get_directory_category_name ($directory_id, $filter_catid);
        // change this to the current filter for the API call
        $param_edition_category = $filter_catid;
        
        #$parents = $categoryTree->getDirectoryCategoryAncestors($filter_catid);

        print_r($parents);

    } else {
        $filter_catname = "UNKNOWN RN";
    }


?>    

    <link type="text/css" rel="stylesheet" href="/site/custom_scripts/styles/bridge.css"/ >
    <style type="text/css">
        div.loader {
            font-style: italic;
            text-align: center;
            margin: 20px;
            height: 24px;
            /*background: url(/site/images/loading.gif) no-repeat center center;*/
        }
        .story-filter {
            cursor:pointer;
        }
        .active-sub a {
            color:#75adcf !important;
        }

        h2:hover {
          position: relative;
        }

        h2[title]:hover:after {
          content: attr(title);
          /*padding: 4px 8px;*/
          color: #273d5e;
          position: absolute;
          
          left: 0px;
          top: 0px;
          
          /*white-space: nowrap;*/
          z-index: 200;
          background-color: #f0f0f0;
          /*
          -moz-border-radius: 5px;
          -webkit-border-radius: 5px;
          border-radius: 5px;
          -moz-box-shadow: 0px 0px 4px #222;
          -webkit-box-shadow: 0px 0px 4px #222;
          box-shadow: 0px 0px 4px #222;
          background-color: #f0f0f0;
          border: 1px solid #cbcbcb;
          border-radius: 2px;
          */
        }        
    </style>


<!--  SECTN -->

<div id='story-nav'>
    <div id='mobile-filter'>Filter: Viewing all stories</div>
    <ul class='story-nav'>
        <li class='stories-viewall story-filter' data-subid='<?php print $param_edition_category;?>' ><a>View all</a></li>
        <?php print $html; ?>
    </ul>
    <?php print $subnav_html;?>
</div>

<div class="page">
    <div id='storycard-container' class="items">
    </div>
</div>


    <!-- script type="text/javascript" src="/a/js/jquery-1.4.2.min.js"></script -->
    <script type="text/javascript" src="/a/js/jquery.esn.autobrowse.js"></script>
    <script type="text/javascript" src="/a/js/jquery.json-2.2.min.js"></script>
    <script type="text/javascript" src="/a/js/jstorage.js"></script>
    <script type="text/javascript">
        $(function () {
            $.fn.exists = function(){return this.length>0;}

            $(".story-filter").click(function() {
                // clear cache if its there
                $('.page .items').autobrowse('flush');

                $(".story-filter").removeClass('selected')
                category_filter = $(this).attr('data-subid');
                // clear current cards
                $('#storycard-container').html('');
                // load new cards with filter

                if ( $(this).hasClass('subnav-item') ) {
                    $('.story-subnav li').removeClass('active-sub');
                    $(this).addClass('active-sub');
                }


                items_last_returned = 4;
                displayed = 0;
                offset = 0;

                loaditems(category_filter);
            });


            $("#clear_cache").click( function (e) {
                e.preventDefault();
                $('.page .items').autobrowse('flush');
            });
            
            items_last_returned = 0;

            items_last_returned = 4;
            displayed = 0;
            offset = 0;
                
            function loaditems(cat_in) {
            //loaditems = function(cat_in) {
                load_category_filter_id = cat_in;
                
                displayed = 0;
                previous_displayed = 0;
                $(".page .items").autobrowse(
                    {
                        url: function (offset)
                        {

                            previous_displayed = displayed;
                            displayed = displayed + items_last_returned;
                            //console.log ('previously displayed : '+ previous_displayed);
                            //console.log ('displayed : ' + displayed);
                            //console.log ('offset : ' + offset);

                            //if ( previous_displayed < offset ) {
                            //    goget = 0;
                            //} else {
                                goget = 4;
                            //}

                            return "/site/custom_scripts/api/directoriesByCategoryJson.php?directoryID=<?php print $directory_id?>&categoryID="+load_category_filter_id+"&json=true&live_only=N&return="+goget+"&displayed="+displayed+"&offset=" + offset;
                        },
                        template: function (response)
                        {
                            // access the items with response.items[i].link
                            var markup='';

                            //console.log(response.items.length);
                            items_last_returned = response.items.length;

                            if (response.items.length >= 1) {
                                for (var i=0; i<response.items.length; i++)
                                {
                                    var entry_id = response.items[i].entry_id;
                                    var category_name = response.items[i].category_name;

                                    var entry_title = response.items[i].entry_title;

                                    //if (entry_title.length > 30) {
                                    //    var display_entry_title = entry_title.substring(0,30)+"...";
                                    //} else {
                                        var display_entry_title = entry_title;
                                    //}

                                    var underscored_entry_title = entry_title.replace(/ /g, '_');

                                    var subheading = response.items[i].subheading;
                                    var story = response.items[i].story;
                                    var does_this_story_have_a_video = response.items[i].does_this_story_have_a_video;
                                    var video_url = response.items[i].video_url;
                                    var does_this_story_have_an_image_gallery = response.items[i].does_this_story_have_an_image_gallery;
                                    var image_gallery_url = response.items[i].image_gallery_url;
                                    var story_url_if_needed = response.items[i].story_url_if_needed;
                                    var story_thumbnail = response.items[i].story_thumbnail;
                                    var live = response.items[i].live;
                                    
                                    var does_this_story_have_a_website_to_link_to = response.items[i].does_this_story_have_a_website_to_link_to;
                                    var website_url = response.items[i].website_url;

                                    var link_text_for_url = response.items[i].link_text_for_url;

                                    var does_this_story_have_audio_or_a_podcast = response.items[i].does_this_story_have_audio_or_a_podcast;
                                    var audio_or_podcast_url = response.items[i].audio_or_podcast_url;
                                    var link_text_for_podcast = response.items[i].link_text_for_podcast;

                                    if (story_url_if_needed != "") {
                                        markup+='<a href="'+story_url_if_needed+'" >';
                                    } else {
                                        markup+='<a href="/infob/<?php print $directory_id?>/the_bridge/'+entry_id+'/' + underscored_entry_title +'" >';

                                    }

                                    markup+='  <div class="storycard ';

                                    if (does_this_story_have_a_video == 'Yes') {
                                        markup +=' has-video';
                                    }
                                    
                                    if (does_this_story_have_an_image_gallery == 'Yes') {
                                        markup +=' has-photo';
                                    }

                                    if (does_this_story_have_a_website_to_link_to == 'Yes') {
                                        markup +=' has-website';
                                    }

                                   if (does_this_story_have_audio_or_a_podcast == 'Yes') {
                                        markup +=' has-audio';
                                    }

                                    markup+='" id="storycard_'+entry_id+'">';
                                    markup+='    <div class="text-section">';
                                    markup+='      <h2 title="'+entry_title+'">'+display_entry_title+'</h2>';
                                    markup+='        <p class="storycard-caption">'+subheading+'</p>';
                                    markup+='        <span class="storycard-cat">Category: '+category_name+'</span>';
                                    markup+='    </div>';

                                    if (story_thumbnail != "") {
                                    markup+='    <div class="storycard-img-container" id="story_'+entry_id+'">';
                                    markup+='      <img src="/images/'+story_thumbnail+'"/>';
                                    markup+='      <div class="storycard-read">Read the story</div>';
                                    markup+='    </div>';
                                    }

                                    markup+='  </div>';
                                    markup+='</a>';
                                }
                                return markup;
                            }
                        },
                        itemsReturned: function (response) { return response.items.length; },
                        complete: function (response) {},
                        finished: function (response) {return false;},

                        stopfunction: function (response) {
                            console.log('STOP: ' + response.items.length );
                            if(response.items.length < 4) { 
                                alert ("stop");
                            return false;
                            } else {
                            return true;
                            }
                        },
                        offset: 0,
                        max: 50,
                        loader: '<div class="loader"></div>',
                        useCache: false,
                        expiration: 1
                    }
                )

            }

        loaditems(<?php print $param_edition_category; ?>);
        
         // Click handler to handle the storycard menu/filter
        function selectStoryNavItem(e) {
          
          var wasActive = $(e).hasClass('active-nav');
          $('#story-nav ul.story-nav li').removeClass('active-nav');
          $('.story-subnav').hide();
          
          var isMobile = $('#mobile-filter').is(':visible');
          var sub = $(e).data('submenu');
          if (sub) {
            if (isMobile) {
              $(e).after($('#' + sub));
            } else {
              $('#story-nav ul.story-nav').after($('#story-nav ul.story-subnav'));
            }
            
            if (!(isMobile && wasActive)) {
              $('#' + sub).show();
              $(e).addClass('active-nav');
            }
          }
          
        }

      // This handler toggles the mobile filter style
        function toggleMobileFilter() {
          var e = $('#mobile-filter');
          //if (e.hasClass('active-nav')) {
            $('#story-nav ul.story-nav').toggleClass('visible');
            e.toggleClass('active-nav');
          //}
          
        }
        
      // Register click handler for menu/filter navigation
        $('#story-nav ul.story-nav li').click(function(e) {
          selectStoryNavItem(this); e.stopPropagation();  
        });
        
        // Register click handler for mobile filter
        $('#mobile-filter').click(function(e) {
          toggleMobileFilter();
          e.stopPropagation();
        });
        
        // Register click handlers for storycards
        $('.storycard').click(function(e) {
          top.location.href = $(this).data('url');
        });
    });

    </script>
