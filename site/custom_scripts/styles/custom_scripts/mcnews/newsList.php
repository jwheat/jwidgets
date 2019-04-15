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

            // track active cateogry that is clicked on
            var active_category = 0;
            fetch_active = true;

            $(".story-filter").click(function() {
                total_stories = 0;

                // clear cache if its there
                $('.page .items').autobrowse('flush');
                
                // clear current cards
                var filter_name = $(this).attr('filter_name');
                $('#storycard-container').html('<p id="no-cards" class="no-match">We currently do not have any '+filter_name+' articles to display. Please check back later. </p>');

                var filtered_categories = $(this).attr('filter_value');

                // activa category = 0 on initial page load
                // active cateogry ! = 0 when user clicks X
                if (active_category != filtered_categories) {
                        // remove all X icons
                      $(".story-filter").removeClass('active');
                      $('#block_refine').hide();
                      fetch_active = true;

                      // Add X icon
                      $(this).addClass('active');
                } else {
                  filtered_categories = 0;
                  $('#block_refine').hide();
                  fetch_active = true;             
                }
                //active_category = filtered_categories;
                active_category = 0;

                if (filtered_categories != 0) {
                  // display new subcateory
                  $('#block_refine').show();
                  if (fetch_active) {
                    populate_subcategories(filtered_categories);                           
                  }
                }

                // load new cards with filter
                items_last_returned = 4;
                displayed = 0;
                offset = 0;
                page = 0;

                if (fetch_active) {
                  loaditems(filtered_categories, 0);
                }
            });
            

            offset = 0;
            page = 0;
            total_stories = 0;

            function loaditems(category_filter, subcategory_filter) {

                $(".page .items").autobrowse(
                    {
                        url: function (offset)
                        {
                            page = page + 1;
                            return "https://www.messiah.edu/site/custom_scripts/mcnews/mcnews_cards.php?parentcat="+category_filter+"&subcat="+subcategory_filter+"&page=" + page + "&offset=" + offset;
                        },
                        template: function (response)
                        {
                          // access the items with response.items[i].link
                            var markup='';

                            //console.log(response.items.length);
                            items_last_returned = response.items.length;
                            sub_category_list = [];
                            sub_category_id_list = [];

                            if (response.items.length >= 1) {
                              

                              //$('#nocards').html('');
                                // this makes the initial view wig out and only display 6 cards, that flash and update
                                // instead of appending to the screen :-/
                                //$('#storycard-container').html('');
                                
                                for (var i=0; i<response.items.length; i++)
                                {
                                  var page = response.items[i].page;

                                  var entry_id = response.items[i].entry_id;

                                  total_stories = response.items[i].total_stories;  // there's always one of these

                                  if (page <= 1) {
                                    $('#storycard-container').html('');
                                  }

                                  var category_name = response.items[i].category_name;
                                  //var category_id = response.items[i].category_id;
                                  var entry_title = response.items[i].entry_title;
                                  var display_entry_title = entry_title;

                                  var underscored_entry_title = entry_title.replace(/ /g, '_');

                                  var subheading = response.items[i].subheading;
                                  var story = response.items[i].story;
                                  var story_thumbnail = response.items[i].story_thumbnail;
                                  var article_link = response.items[i].link;
                                  var page = response.items[i].page;
                                  article_link = article_link.replace(/\ /g, '');

                                  markup+='<a href="'+article_link+'">';

                                  markup+='  <div class="storycard url="'+article_link+'" id="storycard_'+entry_id+'">';
                                  markup+='    <div class="text-section">';
                                  markup+='      <h2 class="block-with-text">'+display_entry_title+'</h2>';
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

                                page = page + 1;

                                return markup;
                            } 
                        },
                        itemsReturned: function (response) { return response.items.length; },
                        offset: 0,
                        page: 0,
                        max: 200,
                        loader: '<div class="loader"></div>',
                        useCache: false,
                        expiration: 1
                    }
                
                );

                if (total_stories >= offset * total_stories && category_filter != 0) {
                    //console.log('stop');
                    fetch_active = false;
                    $('.page .items').autobrowse('stop');
                }

                $('.storycard').on("click", function(){
                  top.location.href = $(this).attr('url');                  
                });


            }

        // initial page load - display all news
        if (fetch_active) {
          loaditems(<?php print $default_cat_id; ?>,0);


        <?php 
          if ($default_cat_id != 0) {
              print "
              $('#block_refine').show();
              populate_subcategories(" . $default_cat_id . ');              
              ';
          }
        ?>

        }

        function uniq(a) {
            return a.sort().filter(function(item, pos, ary) {
                return !pos || item != ary[pos - 1];
            })
        }

        function populate_subcategories (parent_category_filter) {
          $.getJSON( "/site/custom_scripts/mcnews/ajax_get_subcategories.php", { parent_category_filter: parent_category_filter} )
            .done(function( data ) {

              if (data != "") {
                subcat_html = "<span><input type='radio' class='refine' name='refine' value='0' checked='checked'> Show all</span>";
                for (var di=0; di<data.length; di++)
                {
                  var subcat_id = data[di].id;
                  var subcat_name = data[di].name;

                  subcat_html += " <span><input type='radio' class='refine' name='refine' subcat_name ='"+ subcat_name+"' value='"+subcat_id+"'> " + subcat_name+ "</span>";                
                }

                //$('#block_refine').show();
                $('.refine-search').html(subcat_html);

                $('.refine').click(function() {

                  $('.page .items').autobrowse('flush');                
                  var filtered_subcategories = $("input:radio[name='refine']:checked").val();
                  var filter_subcategory_name = $("input:radio[name='refine']:checked").attr('subcat_name');

                  // clear current cards
                  var filter_name = $(this).attr('filter_name');
                  $('#storycard-container').html('<p id="no-cards" class="no-match">We currently do not have any '+filter_subcategory_name+' articles to display. Please check back later. </p>');

                  // load new cards with filter

                  items_last_returned = 4;
                  displayed = 0;
                  offset = 0;
                  page = 0;

                  loaditems(parent_category_filter, filtered_subcategories);

                })
              } 
            });
        }


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

        $('.cancel-filter').click(function() {
            var cancel_id = $(this).attr('id');
            var cat_id = cancel_id.replace('cancel_','');

            active_category = cat_id;

            $('.story-filter').removeClass('active');
            $('#block_refine').hide();
            page = -1;
            loaditems(0,0);
        });

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
          top.location.href = $(this).attr('url');
        });

    });
    </script>
       