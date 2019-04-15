$(document).ready(function(){
    var activeTable;
    var directoryData;
    var loaded = false;
    var filter = '';
    var filterCategory = '';
    var children = new Array();
    var autocompleteCount = 0;
    var autocompleteSelected = -1;
    var maxItems = 10;
    var activeSearch;
    var tooltipTimer;
    var isSearch = false;
    var relatedPrograms = new Array();
    var relatedProgramIndex;

    var categories = new Array();
    categories.push({id: "9", title: "Art and Design"});
    categories.push({id: "10", title: "Music"});
    categories.push({id: "11", title: "Theatre and Dance"});
    categories.push({id: "12", title: "Education"});
    categories.push({id: "13", title: "Human Development and Family Science"});
    categories.push({id: "14", title: "Psychology"});
    categories.push({id: "15", title: "Social Work"});
    categories.push({id: "16", title: "Sociology"});
    categories.push({id: "17", title: "Business"});
    categories.push({id: "18", title: "Biological Sciences"});
    categories.push({id: "19", title: "Chemistry and Biochemistry"});
    categories.push({id: "20", title: "Engineering"});
    categories.push({id: "21", title: "Health, Nutrition and Exercise Science"});
    categories.push({id: "22", title: "Mathematics, Physics and Statistics"});
    categories.push({id: "23", title: "Nursing"});
    categories.push({id: "24", title: "Nutrition and Dietetics"});
    categories.push({id: "25", title: "Pre-Health Professions Advising"});
    categories.push({id: "128", title: "Computer and Information Science"});
    categories.push({id: "26", title: "Biblical and Religious Studies"});
    categories.push({id: "27", title: "Communication"});
    categories.push({id: "28", title: "English"});
    categories.push({id: "29", title: "History"});
    categories.push({id: "30", title: "Modern Languages"});
    categories.push({id: "31", title: "Philosophy"});
    categories.push({id: "32", title: "Politics and International Relations"});
    categories.push({id: "33", title: "Pre-Professional Programs"});
    
    var pageId = $('#mc-page-id').val();
    if (pageId == 'programs') {
        if ($(".left-nav").length) {
          $('#interests').insertAfter('.left-nav');
        } else {
          if ($(".sec-nav").length) {
            $('#interests').insertAfter('.sec-nav');
          } else {
            $('#interests').insertAfter('aside');
          }
        }
        
        var grad = getUrlParameter('grad');
        if (grad == '') {
            $("#undergraduate").addClass('active');
            $(".undergraduate-filters").show();
            $(".prg-icons").hide();
            if (!isMobile()) {
                $("#interests").show();
            }
            showCollapsed();
        } else {
            $("#graduate").addClass('active');
            $(".graduate-filters").show();
            $(".prg-icons").show();
            $("#interests").hide();
            showExpanded();
        }
        
        var search = getUrlParameter('search');
        
        // change + to spaces for multiple words
        // change + to spaces for multiple words
        search = search.replace('+', ' ');

        window.onhashchange = function(){
          if (isSearch) {
            isSearch = false;
          } else {
            closeSearch();
          }
        }
      
        //var url = "//www.messiah.edu/mcapi/?directoryID=1&live_only=Y&apiKey=a38737a6a302f5f0390169114b6640a6&categoryID=-1";
        var url = "//www.messiah.edu/a/messiah-programs/messiah-programs.json";    
    } else {
        var categoryId = $('#mc-category-id').val();
        var grad = ''
        $(".undergraduate-filters").show();
        $("#expanded").show();
        var url = '//www.messiah.edu/mcapi/?directoryID=1&live_only=Y&apiKey=a38737a6a302f5f0390169114b6640a6&categoryID=' + categoryId;
    }

    $('#components').appendTo(document.body);
    
    document.addEventListener('touchstart', handleTouchStart, false);        
    document.addEventListener('touchmove', handleTouchMove, false);
    
    var xDown = null;                                                        
    var yDown = null;                                                        

    function handleTouchStart(evt) {                                         
        xDown = evt.touches[0].clientX;                                      
        yDown = evt.touches[0].clientY;                                      
    };//handleTouchStart                                               

    function handleTouchMove(evt) {
        if ( ! xDown || ! yDown ) {
            return;
        }

        var xUp = evt.touches[0].clientX;                                    
        var yUp = evt.touches[0].clientY;

        var xDiff = xDown - xUp;
        var yDiff = yDown - yUp;

        if (Math.abs( xDiff ) > 50) {
            if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {//most significant
                if ( xDiff > 0 ) {
                    //left swipe
                    if ($('#subpeek-related').is(':visible')) {
                        subpeekNavNext();
                    } else {
                        if ($('#related-nav').is(':visible')) {
                            peekNext();
                        }
                    }
                } else {
                    //right swipe
                    if ($('#subpeek-related').is(':visible')) {
                        subpeekNavPrev();
                    } else {
                        if ($('#related-nav').is(':visible')) {
                            peekPrev();
                        }
                    }
                }                       
            } else {
                if ( yDiff > 0 ) {
                    //up swipe
                } else { 
                    //down swipe
                }                                                                 
            }
            //reset values
            xDown = null;
            yDown = null; 
        }        
    };//handleTouchMove    
    
    $.ajax({
        url: url,
        dataType: 'jsonp',
        jsonpCallback: 'directory_data',
        jsonp: 'callback',
        success: function (data) {
            $("#loading").remove();
            directoryData = data;
            
            for (var i = 0; i < directoryData.length; i++) {
                var show = showProgram(grad, directoryData[i], '', '');
                if (show) {                    
                    directoryData[i].index = i;
                    var keywords = directoryData[i].keywords;
                    directoryData[i].keywordArray = keywords.split(", ");
                    directoryData[i].suggestionArray = keywords.split(", ");
                    directoryData[i].suggestionArray.push(directoryData[i].program_name.toLowerCase());
                    
                    var relatedProgramsStr = directoryData[i].related_programs;
                    directoryData[i].relatedProgramsArray = relatedProgramsStr.split(",");
                    for (var j = 0; j < directoryData[i].relatedProgramsArray.length; j++) {
                        directoryData[i].relatedProgramsArray[j] = directoryData[i].relatedProgramsArray[j].trim();
                    }
                    
                    var careerOptionsStr = directoryData[i].career_options;
                    careerOptionsStr = careerOptionsStr.trim();
                    directoryData[i].career_options = careerOptionsStr;
                    directoryData[i].careerOptionsArray = new Array();
                    if (careerOptionsStr != '') {
                      directoryData[i].careerOptionsArray = careerOptionsStr.split("|");
                      for (var j = 0; j < directoryData[i].careerOptionsArray.length; j++) {
                          directoryData[i].careerOptionsArray[j] = directoryData[i].careerOptionsArray[j].trim();
                      }
                    }
                    
                    var cat = directoryData[i].category_id;
                    directoryData[i].categoryArray = cat.split(",");

                    directoryData[i].categoryNames = new Array();
                    directoryData[i].categoryTitle = '';
                    for (var j = 0; j < categories.length; j++) {
                        var pos = $.inArray(categories[j].id, directoryData[i].categoryArray);
                        if (pos != -1) {
                            directoryData[i].categoryNames.push(categories[j].title);
                        }
                    }
                    
                    degreeTypes = new Array();
                    var degreeTypeStr = directoryData[i].degree_type; 
                    if (degreeTypeStr != 'none') {
                        var degreeType = degreeTypeStr.split(", ");
                        for (var j = 0; j < degreeType.length; j++) {
                            var obj = new Object();
                            obj.name = degreeType[j];
                            degreeTypes.push(obj);
                        }
                    }
                    directoryData[i].degree_types = degreeTypes;
                
                    var parentStr = directoryData[i].parent_program;
                    if (parentStr != '') {
                        var parents = parentStr.split(", ");
                        for (var j = 0; j < parents.length; j++) {
                            var key = parents[j];
                            var exist = key in children;
                            if (!exist) {
                                children[key] = new Array();
                            }
                            children[key].push(directoryData[i]);
                        }
                    }
                }
            }

            loadTables();
            loaded = true;
            
            if (pageId == 'programs') {
                $('.search-panel').show();
                //$("#show-search").focus();
                if (search != '') {
                  activeSearch = $('.show-search');
                  searchPrograms(search);
                }
            }
        },
        error: function(jqXHR, textStatus, errorThrown) { 
            //alert(jqXHR.resultText);
        }
    });
    
    $(window).on('scroll', function () {
        if (loaded) {
            if (pageId == 'programs') {
                if (!isMobile()) {
                    var v = $('#full-view').is(":visible");
                    if (v) {
                        var pos = $(window).scrollTop();
                        if (pos > 700) {
                            $('#sticky-bar').fadeIn();
                        } else {
                            $('#sticky-bar').fadeOut();
                        }
                        if (pos > 500) {
                            $('#sticky-search').fadeIn();
                        } else {
                            $('#sticky-search').fadeOut();
                        }
                    }
                }
            }
        }
    });
    
    $('.scroll-anchor').click(function() {
        if (loaded) {
            var anchor_id = $(this).attr('id');
            anchor_id = activeTable + anchor_id;
            scrollToAnchor(anchor_id);
        }
    });

    $('.collapse-view').click(function() {
        if (loaded) {
            showCollapsed();
            refreshAnchors();
        }
    }); 
    
    $('.expand-view').click(function() {
        if (loaded) {
            showExpanded();
            refreshAnchors();
        }
    }); 

    $('.close-search').click(function() {
      window.history.back();
    }); 
    
    $('.area-of-interest').change(function() {
        var category = $(this).val();
        filterByCategory(category);
    }); 
    
    $('#program_search').on("input", function() {
        if (loaded) {
            var search = $("#program_search").val().toLowerCase();
            $("#auto-complete").text('');
            $(".btn-cancel").hide();
            clearAutoSuggest();
            var autocompleteArray = new Array();
            if (search != '') {
                $(".btn-cancel").show();
                for (var i = 0; i < directoryData.length; i++) {
                    var show = showProgram(grad, directoryData[i], '', '');
                    if (show) {
                        for (var j = 0; j < directoryData[i].suggestionArray.length; j++) {
                            var keyword = directoryData[i].suggestionArray[j].toLowerCase();
                            var tmp = keyword.substring(0, search.length);
                            if (tmp == search) {
                                if ($.inArray(keyword, autocompleteArray) == -1) {
                                  autocompleteArray.push(keyword);
                                }
                            }
                        }
                    }
                }
                
                autocompleteArray.sort();
                if (autocompleteArray.length > 0) {
                    //$("#auto-complete").text(autocompleteArray[0]);
                    if (search.length > 1) {
                        var counter = Math.min(maxItems, autocompleteArray.length); 
                        autocompleteCount = counter;
                        autocompleteSelected = -1;
                        for (var i = 0; i < counter; i++) {
                            var keyword = autocompleteArray[i].toLowerCase();
                            var tmp = keyword.substring(0, search.length);
                            var autocompleteData = new Object();
                            autocompleteData.id = i;
                            autocompleteData.keyword = keyword;
                            autocompleteData.selection = tmp;
                            autocompleteData.rest = keyword.substring(search.length);
                            $("#autocomplete-template").tmpl(autocompleteData).appendTo(".auto-suggest-items");
                        }
                        $(".auto-suggest-panel").show();
                    }
                }
            }
        }
    });

    $('#go').click(function() {
        if (loaded) {
            goSearch();
        }
    }); 

    $('#cancel-search').click(function() {
        if (loaded) {
            cancelSearch();
        }
    }); 
    
    $('#program_search').on('keypress', function (e) {
        if (e.which === 13) {
            goSearch();
        }
    });
   
    $("#program_search").keydown(function (e) {
        if (e.which === 27) {
            cancelSearch();
        }
        if (e.which == 9) {
        /*
            if (loaded) {
                var autoComplete = $("#auto-complete").text();
                if (autoComplete != '') {
                    $("#program_search").val(autoComplete);
                    clearAutoSuggest();
                }
            }
            e.preventDefault();
        */
        }
        if (autocompleteCount > 0) {
            var prevSelected = autocompleteSelected;
            if (e.which == 38) {
                if (autocompleteSelected == 0) {
                    autocompleteSelected = -1;
                } else {
                    if (autocompleteSelected == -1) {
                        autocompleteSelected = autocompleteCount - 1;
                    } else {
                        autocompleteSelected--;
                    }
                }
                e.preventDefault();
                selectAutocomplete(prevSelected);
            }
            if (e.which == 40) {
                if (autocompleteSelected == (autocompleteCount - 1)) {
                    autocompleteSelected = -1;
                } else {
                    if (autocompleteSelected < (autocompleteCount - 1)) {
                        autocompleteSelected++;
                    } else {
                        autocompleteSelected = 0;
                    }
                }
                e.preventDefault();
                selectAutocomplete(prevSelected);
            }
        }
    });

    $(document).on('click', ".auto-suggest", function() {
        var keyword = $(this).attr("data-keyword");
        searchPrograms(keyword);
    });
    
    $('.filter-programs').click(function() {
        if (loaded) {
            $('.filter-programs').removeClass('active');
            $(this).addClass('active');
            filter = $(this).attr('data-filter');
            setViewButtons();
            $('.reset-filter').show();
            $("#collapsed").empty();
            $("#expanded").empty();
            showCollapsed();
            loadTables();
        }
    });
    
    $('.reset-filter').click(function() {
        if (loaded) {
            $('.filter-programs').removeClass('active');
            filter = '';
            setViewButtons();
            $('.reset-filter').hide();
            $("#collapsed").empty();
            $("#expanded").empty();
            showCollapsed();
            loadTables();
        }
    });

    $('.category-filter').click(function() {
        var category = $(this).val();
        filterByCategory(category);
    });

    $('.category-filter-text').click(function() {
      $(this).prev().click();
    });
    
    $('.show-search').on('keydown', function (e) {
        activeSearch = $(this);
        var str = $(this).val();
        $(this).val('');
        $("#large-search-panel").show();
        $("#program_search").val(str);
        $("#program_search").focus();
    });
    
    $('.back').click(function() {
        cancelSearch();
    });
    
    $(document).on('mouseover', ".show-tooltip", function(e) {
        if (!isMobile()) {
            if ($(this).hasClass('major')) {
                $('.tooltip-title').text('Major');
                $('.tooltip-text').text('Prescribed courses and requirements which lead to an undergraduate degree in that area of study.');
            }
            if ($(this).hasClass('minor')) {
                $('.tooltip-title').text('Minor');
                $('.tooltip-text').text('A minimum of 18 prescribed credits in a particular area of study, designed to develop deeper understanding in that discipline.');
            }
            if ($(this).hasClass('concentration')) {
                $('.tooltip-title').text('Concentration');
                $('.tooltip-text').text('Prescribed courses in a subdiscipline of a major or closely related discipline consisting of at least 12 and up to 36 credits.');
            }
            if ($(this).hasClass('prepro')) {
                $('.tooltip-title').text('Pre Health Professions Advising ');
                $('.tooltip-text').text('Integrate with your major and have their own advisor to help you gain entrance to medical or law school.');
            }
            if ($(this).hasClass('dual-degree')) {
                $('.tooltip-title').text('Dual degree');
                $('.tooltip-text').text('Accelerate your advanced degree by completing your B.S. or B.A. from Messiah College streamlined with additional years of study at a partner institution.');
            }
            if ($(this).hasClass('teaching')) {
                $('.tooltip-title').text('Teaching certificate');
                $('.tooltip-text').text('Enables you to receive PA Level 1 teacher certification in numerous content areas.');
            }
            if ($(this).hasClass('accelerated')) {
                $('.tooltip-title').text('Accelerated');
                $('.tooltip-text').text('Enables you to earn a degree, or more than one degree, in an abbreviated amount of time.');
            }
            if ($(this).hasClass('assurance')) {
                $('.tooltip-title').text('Early Assurance');
                $('.tooltip-text').text('A way for a student to guarantee a spot in graduate school early on in his or her undergraduate career.');
            }
            
            if ($(this).hasClass('grad-c')) {
                $('.tooltip-title').text('Track/concentration');
                $('.tooltip-text').text('A degree track or concentration is a prescribed set of courses in a sub-discipline, or closely related discipline, of a program. Minimum 9 credits, maximum 45 credits.');
            }
            if ($(this).hasClass('grad-t')) {
                $('.tooltip-title').text('Track/concentration');
                $('.tooltip-text').text('A degree track or concentration is a prescribed set of courses in a sub-discipline, or closely related discipline, of a program. Minimum 9 credits, maximum 45 credits.');
            }
            if ($(this).hasClass('grad-p')) {
                $('.tooltip-title').text('PA teaching certificate');
                $('.tooltip-text').text('A certification granted by the Pennsylvania Department of Education upon program completion');
            }
            if ($(this).hasClass('grad-g')) {
                $('.tooltip-title').text('Graduate certificate');
                $('.tooltip-text').text("This certificate is for students who have a bachelor's degree but would like to earn graduate level credits within a specialty area or discipline. Minimum 12 credits.");
            }
            if ($(this).hasClass('grad-n')) {
                $('.tooltip-title').text('Non-degree options');
                $('.tooltip-text').text('Graduate level coursework taken for personal enrichment or professional development, not as part of a degree or certificate program.');
            }
            if ($(this).hasClass('grad-a')) {
                $('.tooltip-title').text('Certificate of Advanced Graduate Studies (CAGS)');
                $('.tooltip-text').text("A CAGS is for students who have a master's degree and would like to earn additional credits for a specialty area or certification and/or licensure requirements. Minimum 12 credits.");
            }
            if ($(this).hasClass('prg-hybrid')) {
                $('.tooltip-title').text('Hybrid');
                $('.tooltip-text').text("A hybrid program combines traditional face-to-face and online class sessions.");
            }
            if ($(this).hasClass('prg-campus')) {
                $('.tooltip-title').text('Traditional');
                $('.tooltip-text').text("Traditional students meet at a physical location during scheduled meeting times for the duration of the course.");
            }
            if ($(this).hasClass('prg-online')) {
                $('.tooltip-title').text('Online');
                $('.tooltip-text').text("All coursework is fully online; there are no requirements for face-to-face sessions.");
            }

            $(this).prepend($('#tooltip'));
            clearInterval(tooltipTimer);
            tooltipTimer = setInterval(tooltipTimerEvent, 250);
        }
    });

    $(document).on('mouseout', ".show-tooltip", function() {
        clearInterval(tooltipTimer);
        $('.tooltip').hide();
        $('#main').prepend($('#tooltip'));
    });
  
    $(document).on('click', ".program-line", function(event) {
        if (isMobile()) {
            var index = $(this).find(".program-url").attr('data-index');
            showPeekPreview(index);
        }
    });
  
    $(document).on('click', ".program-url", function(event) {
        var index = $(this).attr('data-index');
        showPeekPreview(index);
    });

    $(document).on('click', "#peek-nav-prev", function(event) {
        peekPrev();
    });
    
    $(document).on('click', "#peek-nav-next", function(event) {
        peekNext();
    });

    $(document).on('click', "#peek-close", function(event) {
        hidePeek();
    });
    
    $(document).on('click', ".open-subpeek", function(event) {
        var index = $(this).attr('data-index');
        showSubpeek(index);
    });
    
    $(document).on('click', "#subpeek-close", function(event) {
        $('#subpeek-overlay').hide();
    });
    
    $(document).on('click', "#subpeek-nav-prev", function(event) {
        subpeekNavPrev();
    });
    
    $(document).on('click', "#subpeek-nav-next", function(event) {
        subpeekNavNext();
    });
    
    $(document).on('click', "#peek-overlay", function(event) {
        if ($("#subpeek-overlay").is(":visible")) {
            $('#subpeek-overlay').hide();
        } else {
            hidePeek();
        }
    });
    
    $(document).on('click', ".peek", function(event) {
        event.stopPropagation();
    });

    $(document).on('click', "#subpeek-overlay", function(event) {
        event.stopPropagation();
    });
    
    function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1));
        var sURLVariables = sPageURL.split('&'); 
        var sParameterName;
        var i;
        var res;

        res = '';
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] === sParam) {
                res = sParameterName[1] === undefined ? true : sParameterName[1];
                break;
            }
        }
        return res;
    }//getUrlParameter

    function scrollToAnchor(aid) {
        var aTag = $("a[name='"+ aid +"']");
        if (aTag.length > 0) {
          $('html,body').animate({scrollTop: aTag.offset().top - 50},'slow');
        }
    }//scrollToAnchor         

    function showProgram(grad, data, filter, filterCategory) {
        var res = false;
        if (data.live == '1') {
            if ((grad == '') && (data.grad_program == '')) {
                res = true;
            } else {
                if ((grad != '') && (data.grad_program != '')) {
                    res = true;
                }
            }
        }
        if (res) {
            var res1 = true;
            var res2 = true;
            if (filter != '') {
                switch(filter) {
                    case 'major':
                        res1 = data.major != '';
                        break;
                    case 'minor':
                        res1 = data.minor != '';
                        break;
                    case 'concentration':
                        res1 = data.concentration != '';
                        break;
                    case 'prepro':
                        res1 = data.preprofessional_programs != '';
                        break;
                    case 'dual':
                        res1 = data.allied_program != '';
                        break;
                    case 'teaching':
                        res1 = data.teaching_certification != '';
                        break;
                    case 'accelerated':
                        res1 = data.accelerated != '';
                        break;
                    case 'assurance':
                        res1 = data.early_assurance != '';
                        break;
                    case 'grad-c':
                        res1 = data.grad_concentration != '';
                        break;
                    case 'grad-t':
                        res1 = data.grad_track != '';
                        break;
                    case 'grad-p':
                        res1 = data.grad_pa_teaching_certification != '';
                        break;
                    case 'grad-g':
                        res1 = data.grad_grad_certificate != '';
                        break;
                    case 'grad-n':
                        res1 = data.grad_nondegree != '';
                        break;
                    case 'grad-a':
                        res1 = data.grad_certificate_in_advanced_graduate_studies != '';
                        break;
                    case 'grad-online':
                        res1 = data.grad_program_format == 'Online';
                        break;
                    case 'grad-hybrid':
                        res1 = data.grad_program_format == 'Hybrid';
                        break;
                    case 'grad-campus':
                        res1 = data.grad_program_format == 'Campus';
                        break;
                } 
            }
            if (filterCategory != '') {
                res2 = $.inArray(filterCategory, data.categoryArray) != -1;
            }
            res = res1 && res2;
        }
        
        return res;
    }//showProgram
   
    function loadTables() {
        if (pageId == 'programs') {
            var sortChat = '';
            for (var i = 0; i < directoryData.length; i++) {
                var show = showProgram(grad, directoryData[i], filter, filterCategory);
                if (show) {                    
                    var firstChar = directoryData[i].entry_title.charAt(0).toUpperCase();
                    var sort = '';
                    if (firstChar != sortChat) {
                        sortChat = firstChar;
                        sort = 'collapsed' + sortChat;
                    }
                    directoryData[i].sort = sort;
                    directoryData[i].expanded = false;
                    $("#programs-template").tmpl(directoryData[i]).appendTo("#collapsed");
                }
            }
        }

        var sortChat = '';
        for (var i = 0; i < directoryData.length; i++) {
            if (directoryData[i].parent_program == '') {
                var show = showProgram(grad, directoryData[i], '', '');
                if (show) {                    
                    var firstChar = directoryData[i].entry_title.charAt(0).toUpperCase();
                    var sort = '';
                    if (firstChar != sortChat) {
                        sortChat = firstChar;
                        sort = 'expanded' + sortChat;
                    }
                    directoryData[i].sort = sort;
                    directoryData[i].expanded = false;
                    $("#programs-template").tmpl(directoryData[i]).appendTo("#expanded");
                    
                    var key = directoryData[i].entry_id;
                    var exist = key in children;
                    if (exist) {
                        for (var j = 0; j < children[key].length; j++) {
                            var show = showProgram(grad, children[key][j], '', '');
                            if (show) {                    
                                children[key][j].sort = '';
                                children[key][j].expanded = true;
                                $("#programs-template").tmpl(children[key][j]).appendTo("#expanded");
                            }
                        }
                    }
                }
            }
        }
        
        if (pageId == 'programs') {
            refreshAnchors();
        }
    }//loadTables

    function refreshAnchors() {
        $("span").removeClass("scroll-anchor-active");
    
        for (var i = 0; i < directoryData.length; i++) {
            var show = showProgram(grad, directoryData[i], filter, filterCategory);
            if (show) {                    
                var firstChar = directoryData[i].entry_title.charAt(0).toUpperCase();
                if (activeTable == 'collapsed') {
                    $("#" + firstChar).addClass("scroll-anchor-active");
                }
            }
        }

        for (var i = 0; i < directoryData.length; i++) {
            if (directoryData[i].parent_program == '') {
                var show = showProgram(grad, directoryData[i], '', '');
                if (show) {                    
                    var firstChar = directoryData[i].entry_title.charAt(0).toUpperCase();
                    if (activeTable == 'expanded') {
                        $("#" + firstChar).addClass("scroll-anchor-active");
                    }
                }
            }
        }
    }//refreshAnchors

    function showCollapsed() {
        activeTable = 'collapsed';
        $(".collapse-view").addClass('active');
        $(".expand-view").removeClass('active');
        $("#collapsed").show();
        $("#expanded").hide();
    }//showCollepsed
   
    function showExpanded() {
        activeTable = 'expanded';
        $(".collapse-view").removeClass('active');
        $(".expand-view").addClass('active');
        $("#collapsed").hide();
        $("#expanded").show();
    }//showExpanded
  
    function goSearch() {
        if (autocompleteSelected == -1) {
            var search = $("#program_search").val().toLowerCase();
        } else {
            var search = $("#autocomplete-item-" + autocompleteSelected).attr("data-keyword").toLowerCase();
        }
        searchPrograms(search)
    }//goSearch

    function searchPrograms(search) {
        search = search.trim();
        cancelSearch();
        if (search != '') {
            if (typeof(ga) !== "undefined") {
                //console.log('send ga');
                ga('send', 'event', 'program-search', 'search', search, 1);
                //action, label, timing
                //'Percentage', 'Baseline'
                //'Percentage', key (25% .. 100%), timing (some time value)
                //'Elements', elem, timing
                
                //ga('send', 'event', 'xform', 'click', xFormID, 1);
                //ga('send', 'event', 'Scroll Depth', action, label, 1, {'nonInteraction': 1});                                      
                //ga('send', 'timing', 'Scroll Depth', action, timing, label);
            } else {
                //console.log('no ga'); 
            }
            
            window.location.hash = "search";
            isSearch = true;
            $("#interests").hide();
            $("#full-view").hide();
            $('#sticky-bar').hide();
            $('#sticky-search').hide();
            $("#search-view").show();
            $("#search-results-tab").text('You searched for "' + search + '"');
            $("#search-programs-table").empty();
            $("#search-related-table").empty();
            $(".search-results").hide();
            $(".search-result-programs").hide();
            $(".search-result-related").hide();
            $("#search-panel").detach().appendTo('#search-result-input');

            var found = false;
            for (var i = 0; i < directoryData.length; i++) {
                var show = showProgram(grad, directoryData[i], '', '');
                if (show) {
                    var keyword = directoryData[i].program_name.toLowerCase();
                    var index = keyword.indexOf(search);
                    if (index !== -1) {
                        directoryData[i].sort = '';
                        directoryData[i].expanded = false;
                        $("#programs-template").tmpl(directoryData[i]).appendTo("#search-programs-table");
                        $(".no-search-results").hide();
                        $(".search-results").show();
                        $(".search-result-programs").show();
                        $("#programs-term").text(search[0].toUpperCase() + search.slice(1));
                        found = true;
                    } else {
                        for (var j = 0; j < directoryData[i].keywordArray.length; j++) {
                            var keyword = directoryData[i].keywordArray[j].toLowerCase();
                            keyword = keyword.trim();
                            if (search.toLowerCase() == keyword) {
                                directoryData[i].sort = '';
                                directoryData[i].expanded = false;
                                $("#programs-template").tmpl(directoryData[i]).appendTo("#search-related-table");
                                $(".no-search-results").hide();
                                $(".search-results").show();
                                $(".search-result-related").show();
                                $("#related-term").text(search);
                                found = true;
                                break;
                            }
                        }
                    }
                }
            }
            if (!found) {
                $(".no-search-results").show();
                $("#show-search").focus();
            } else {
                $('body').scrollTo('#search-view');
                $("#show-sticky-search").focus();
            }
        }
    }//searchPrograms

    function setViewButtons() {
        if ((filterCategory == '') && (filter == '')) {
            $('.view-buttons').show();
        } else {
            $('.view-buttons').hide();
        }
    
    }//setViewButtons

    function cancelSearch() {
        $("#large-search-panel").hide();
        $(".btn-cancel").hide();
        $("#program_search").val('');
        $("#auto-complete").text('');
        clearAutoSuggest();
        activeSearch.focus();
    }//cancelSearch
    
    function clearAutoSuggest() {
        $(".auto-suggest-items").empty();
        $(".auto-suggest-panel").hide();
        autocompleteCount = 0;
        autocompleteSelected = -1;
    }//clearAutoSuggest

    function selectAutocomplete(prevSelected) {
        $("#auto-complete").text('');
        if (prevSelected != -1) {
            $("#autocomplete-item-" + prevSelected).removeClass("auto-suggest-active");
        }
        if (autocompleteSelected != -1) {
            $("#autocomplete-item-" + autocompleteSelected).addClass("auto-suggest-active");
            $("#auto-complete").text($("#autocomplete-item-" + autocompleteSelected).attr("data-keyword"));
        }
    }//selectAutocomplete
    
    function tooltipTimerEvent() {
      clearInterval(tooltipTimerEvent);
      $('.tooltip').show();
    }//tooltipTimerEvent

    function isMobile() {
      var res = window.screen.width <= 766;
      return res;
    }//isMobile

    function closeSearch() {
        if (loaded) {
            $("#search-view").hide();
            $("#full-view").show();
            if (grad == '') {
                $("#interests").show();
            }
            $("#search-panel").detach().appendTo('#search-input');
            $("#show-search").focus();
            //history.pushState("", document.title, window.location.pathname);
        }
    }//closeSearch
    
    function showSubpeek(index) {
        var program = directoryData[index];
        
        $("#subpeek-overlay").html('');
        $("#subpeek-template").tmpl(program).appendTo("#subpeek-overlay");
        if (relatedPrograms.length > 0) {
            $("#subpeek-related").show();
        }
        if (relatedPrograms.length > 1) {
            $("#subpeek-nav-prev").show();
            $("#subpeek-nav-next").show();
        } else {
            $("#subpeek-nav-prev").hide();
            $("#subpeek-nav-next").hide();
        }
        $("#subpeek-overlay").show();
    }//showSubpeek

    function hidePeek() {
        $("#peek-close").hide();
        $('body').removeClass('stop-scrolling');
        //$('#peek-overlay').hide();
    }//hidePeek

    function peekPrev() {
        var program = $("#peek-related-programs");
        //for (var i = 0; i < 3; i++) {
            var last = program.find(">:last-child");
            program.prepend(last);
        //}
    }//peekPrev
    
    function peekNext() {
        var program = $("#peek-related-programs");
        //for (var i = 0; i < 3; i++) {
            var first = program.find(">:first-child");
            program.append(first);
        //}      
    }//peekNext

    function subpeekNavPrev() {
        if (relatedProgramIndex == 0) {
            relatedProgramIndex = relatedPrograms.length - 1;
        } else {
            relatedProgramIndex--;
        }
        showSubpeek(relatedPrograms[relatedProgramIndex]);
    }//subpeekNavPrev
    
    function subpeekNavNext() {
        if (relatedProgramIndex == relatedPrograms.length - 1) {
            relatedProgramIndex = 0;
        } else {
            relatedProgramIndex++;
        }
        showSubpeek(relatedPrograms[relatedProgramIndex]);
    }//subpeekNavNext

    function filterByCategory(category) {
        if (loaded) {
            filterCategory = category;
            setViewButtons();
            $("#collapsed").empty();
            $("#expanded").empty();
            showCollapsed();
            loadTables();
        }
    }//filterByCategory

    function showPeekPreview(index) {
        var program = directoryData[index];
        
        $("#peek-overlay").html('');
        $("#peek-template").tmpl(program).appendTo("#peek-overlay");
        $("#peek-close").show();

        relatedPrograms = [];
        relatedProgramIndex = 0;
        var counter = 0;
        $("#peek-related-programs").html('');
        
        if (pageId == 'programs') {
            for (var i = 0; i < program.relatedProgramsArray.length; i++) {
                var relatedProgram = program.relatedProgramsArray[i];
                //console.log(relatedProgram);
                for (var j = 0; j < directoryData.length; j++) {
                    if (directoryData[j].entry_id == relatedProgram) {
                        var show = showProgram(grad, directoryData[j], '', '');
                        if (show) {
                            relatedPrograms.push(directoryData[j].index);
                            counter++;
                            $("#peek-related-programs-template").tmpl(directoryData[j]).appendTo("#peek-related-programs");
                            //console.log(directoryData[j].program_name);
                        }
                    }
                }
            }
        }
        if (counter > 0) {
            $("#peek-related").show();
        }
        if (counter > 3) {
            $("#related-nav").show();
        }
        //$('#peek-overlay').show();
        $('body').addClass('stop-scrolling');
    }//showPeekPreview
    
});
