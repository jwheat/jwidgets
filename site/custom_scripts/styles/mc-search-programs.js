$(document).ready(function(){
    var directoryData;
    var loaded = false;
    var autocompleteCount = 0;
    var autocompleteSelected = -1;
    var maxItems = 10;
    var activeSearch;

    var url = "//www.messiah.edu/a/messiah-programs/messiah-programs-search.json";

    $('#components').appendTo(document.body);
    
    $.ajax({
        url: url,
        dataType: 'jsonp',
        jsonpCallback: 'directory_data',
        jsonp: 'callback',
        success: function (data) {
            directoryData = data;
            for (var i = 0; i < directoryData.length; i++) {
                var show = showProgram(directoryData[i]);
                if (show) {                    
                    directoryData[i].index = i;
                    var keywords = directoryData[i].keywords;
                    directoryData[i].suggestionArray = keywords.split(", ");
                    directoryData[i].suggestionArray.push(directoryData[i].program_name.toLowerCase());
                }
            }
            loaded = true;
        },
        error: function(jqXHR, textStatus, errorThrown) { 
            //alert(jqXHR.resultText);
        }
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
                    var show = showProgram(directoryData[i]);
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
    
    function showProgram(data) {
        var grad = '';
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
        return res;
    }//showProgram
   
    function goSearch() {
        if (autocompleteSelected == -1) {
            var search = $("#program_search").val().toLowerCase();
        } else {
            var search = $("#autocomplete-item-" + autocompleteSelected).attr("data-keyword").toLowerCase();
        }
        searchPrograms(search)
    }//goSearch

    function searchPrograms(search) {
        cancelSearch();
        if (search != '') {
            location.href = 'https://www.messiah.edu/majors-minors-programs?search=' + search;
        }
    }//searchPrograms

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
    
   
});
