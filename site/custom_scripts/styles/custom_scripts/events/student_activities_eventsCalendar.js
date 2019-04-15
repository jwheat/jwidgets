var eventsCalendar = (function () {

    //  Config that can be overridden by passing options object to init
    var config = {
      calendarEndpoint: '/site/custom_scripts/events/list_sa_events.php',
      eventSearchTerms: ['title', 'summary', 'combinedMetadata'],
      alertNoEventsMessage: '<h3>There are no events in <DATE_INTERVAL>. Use the arrows above to view upcoming dates that may contain events</h3>',
      alertNoEventsMessageWithSearch: '<h3>There are no events that contain "<SEARCHED_TERM>" in <DATE_INTERVAL>.<br/> Use the arrows above to view upcoming dates that may contain events or search another term</h3>',
      alertNoEventsMessageWithCategories: '<h3>There are no <CAT_LIST> events in <DATE_INTERVAL>.<br/>Use the arrows above to view upcoming dates that may contain events.</h3>',
      alertNoEventsMessageWithCategoriesWithSearch: '<h3>There are no <CAT_LIST> events in <DATE_INTERVAL> that contain "<SEARCHED_TERM>".<br/>Use the arrows above to view upcoming dates that may contain events or search another term.</h3>',
      alertFetchError: '<h3>We couldn\'t fetch the events list. Please try again later</h3>',
      searchFormIdentifier: '#calendarSearch',
      selectedCategoriesText: '#selectedCategoriesText',
      selectedCategoriesHeader: "Filtering from : ",
      categoriesGetParameter: 'categoryIDs',
      calendarIdentifier: '#calendar',
      searchInputIdentifier: '#calendarSearchQuery',
      clearSearchIconIdentifier: '#clearSearchIcon',
      eventsErrorMessageContainer : 'calendarFetchEventsError',
      eventLimitTextMobile: 'events',
      eventLimitTextDesktop: "more",
      includeSubcategories: true,
      changeEventLimitWidth: 1000,
      refetchSearch: false,
      eventLimitText: "events",
      formIdentifier : '.filterForm',
      onlyUpcomingEvents : 'true',
      selectedCategories: [],
      selectedCategoriesObjects: [],
      enableSearch: true,
      shortVersion: true,
      customButtons: {
        filterEvents: {
          text: 'Filter Events',
          click: function () {
            addFancybox();
          }
        }
      },
      eventLimit: {
        month: 1
      },
      customViews: ['list','results']
    }
  
    var state = {
      searchedTerm: '',
      selectedCategories: [],
      selectedCategoriesLabels: [],
      windowWidth: 0,
      fullCalendar: null
    }
  
    var updateQueryStringParamsNoHash = function (uri, key, value) {
      var re = new RegExp("([?&])" + key + "=[^&]*", "i"),
        separator = "?";
  
      return re.test(uri)
        ? uri.replace(re, '$1' + key + "=" + value)
        : uri + separator + key + "=" + value
        ;
    }
  
    var replaceURL = function (selectedCategories) {
      var currentURL = window.location.href,
        newURL = updateQueryStringParamsNoHash(currentURL, config.categoriesGetParameter, selectedCategories);
  
      if (window.history && window.history.replaceState) {
        history.replaceState({}, '', newURL);
      }
    }
  
    var handleCategoriesRefresh = function (formIdentifier, ev) {
      refreshSelectedCategories(formIdentifier, config.selectedCategoriesText);
      refreshOriginalForm();
      replaceURL(config.selectedCategories);
      refetchCalendar();
      parent.$.fancybox.close();
    }
  
    var addSelectedCategoriesText = function (selectedCategoriesTextIdentifier, selectedCategoriesLabels) {
  
      var $selectedCategoriesTextIdentifier = $(selectedCategoriesTextIdentifier);
      var heading = (selectedCategoriesLabels.length > 0) ? '<p class="filter-header">' + config.selectedCategoriesHeader + '</p>' : '';
  
      $selectedCategoriesTextIdentifier.html(heading);
  
      for (var i = 0; i < selectedCategoriesLabels.length; i++) {
        $selectedCategoriesTextIdentifier.append('<p>' + selectedCategoriesLabels[i] + '</p>');
      }
    }
  
    var refreshSelectedCategories = function (formIdentifier, selectedCategoriesTextIdentifier) {
  
      //  Reset the selected categories in case there are no checked categories
      var $form = $(formIdentifier);
  
      //  Check if there are any categories that the user can select
      //  If the events are used in a widget then there are no categories to be selected
      if ($form.find('input').length) {
        var selectedCategoriesLabels = [];
        config.selectedCategories = [];
        config.selectedCategoriesObjects = [];
  
        $(formIdentifier).find('input:checked').each(function () {
          var $this = $(this);
          var pushVal = $this.val();
          var configLabel = $this.closest('label').text();
  
          if (selectedCategoriesLabels.indexOf(configLabel) == -1) {
            selectedCategoriesLabels.push(configLabel);
            config.selectedCategoriesObjects.push({
              label:configLabel,
              id: pushVal
            });
  
          }
  
          if (config.selectedCategories.indexOf(pushVal) == -1) {
            config.selectedCategories.push(pushVal);
          }
        });
        state.selectedCategoriesLabels = selectedCategoriesLabels;
      }
    }
  
    var refreshOriginalForm = function () {
      $('.origCategoriesForm input[type="checkbox"]').each(function () {
        var $input = $(this),
          category = $input.val();
        if (config.selectedCategories.indexOf(category) > -1) {
          $input.attr('checked', true);
        } else {
          $input.attr('checked', false);
        }
      });
    }
  
    var addFancybox = function () {
      $.fancybox({
        content: $(".origCategoriesForm").html(),
        width: 350,
        autoSize: true,
        afterShow: function () {
          //  On submit event to refresh the selectedCategories
          //  and prevent form submission
          $('.filterForm').on('submit', function (ev) {
            ev.preventDefault();
            handleCategoriesRefresh(this, ev);
          });
  
          var accordionToggle = $('.accordionForm__icon');
          var accordionSubBlocks = $('.accordionForm__subcat-list');
  
          // accordionSubBlocks.toggleClass('accordionForm__subcat-list--hidden');
  
          $('.filterForm input[type="checkbox"]').on('click', function (event) {
            var thisParent = $(this).parent(),
              thisSubBlock = thisParent.siblings('.accordionForm__subcat-list'),
              thisAccordionToggle = thisParent.siblings('.accordionForm__icon');
  
            thisAccordionToggle.toggleClass('accordionForm__icon--open');
            thisAccordionToggle.toggleClass('accordionForm__icon--close');
  
            thisSubBlock.toggleClass('accordionForm__subcat-list--hidden');
  
          });
  
          accordionToggle.on('click', function (event) {
            var thisSubBlock = $(this).siblings('.accordionForm__subcat-list');
  
            $(this).toggleClass('accordionForm__icon--open');
            $(this).toggleClass('accordionForm__icon--close');
  
            thisSubBlock.toggleClass('accordionForm__subcat-list--hidden');
  
          });
        }
      });
    }
  
    var addEventsError = function(message){
      $('#' + config.eventsErrorMessageContainer).remove();
      $('.fc-view-container').hide().after('<div id="' + config.eventsErrorMessageContainer + '" class="eventsErrorMessageContainer">' + message + '</div>');
    }
  
    var restoreCalendarContainer = function () {
      $('.fc-view-container').show();
      $('#' + config.eventsErrorMessageContainer).remove();
    }
  
    var initCalendar = function (calendarIdentifier, calendarEndpoint) {
      $(calendarIdentifier).fullCalendar({
        events: {
          url: calendarEndpoint,
          data: function () {
            return {
              categories: config.selectedCategories,
              includeSubcategories : config.includeSubcategories,
              onlyUpcomingEvents : config.onlyUpcomingEvents
            }
          },
          error: function () {
            addEventsError(config.alertFetchError);
          },
          success: function (data) {
            if (data.length == 0) {
              state.hasEvents = false;
            } else {
              restoreCalendarContainer();
            }
          },
        },
        height: 'auto',
        allDayDefault: true,
        defaultView: 'month',
        eventLimitText: config.eventLimitText,
        firstDay: 0,
        eventLimit: true,
        columnFormat: {
          month: 'ddd',    // Monday, Wednesday, etc
          week: 'ddd D', // Monday 9/7,
          day: 'dddd D'
        },
        views: {
          month: {
            eventLimit: config.eventLimit.month //adjust depending on window width
          }
        },
        customButtons: config.customButtons,
        eventRender: function eventRender(event, element, view) {
          if (state.searchedTerm != '' && config.enableSearch) {
            var matchedEvent = searchTermInEvent(event, state.searchedTerm);
            if(matchedEvent == true){
              state.hasEvents = true;
            }
  
            return searchTermInEvent(event, state.searchedTerm);
          }
          state.hasEvents = true;
        },
        eventAfterAllRender: function (view) {
          //  Only  add events error if it's a normal view and not a custom one
          if (config.customViews.indexOf(view.name) == -1) {
            if (state.hasEvents != true) {
              addEventsError(buildNoEventsErrorMessage());
            } else {
              restoreCalendarContainer();
            }
          }
        },
        viewRender: function (view, elem) {
          updateListErrorMessage();
          if (state)
            state.hasEvents = false;
        },
        header: {
          left: 'filterEvents, prev, next',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,list,results'
        },
      });
    }
  
    //  Needed because custom views can't compute the error message like a normal view
    var updateListErrorMessage = function (){
      var currentView = $(config.calendarIdentifier).fullCalendar('getView')
      if (config.customViews.indexOf(currentView.name) != -1) {
        currentView.errorMessage = buildNoEventsErrorMessage();
      }
    }
  
    var getSelectedCategoriesLabels = function () {
      return config.selectedCategoriesObjects.map(function(selectedCategory){
        return selectedCategory.label
      });
    }
  
    var buildNoEventsErrorMessage = function () {
      var selectedCategoriesLabels = getSelectedCategoriesLabels();
      var currentViewTitle = $(config.calendarIdentifier).fullCalendar('getView').title;
      // Check if there are any categories selected
      if(selectedCategoriesLabels.length){
        var catList = selectedCategoriesLabels.join(', ');
        //  Check if the user also searched a term
        if(state.searchedTerm != ''){
          var error = config.alertNoEventsMessageWithCategoriesWithSearch.replace('<SEARCHED_TERM>',state.searchedTerm)
        }else{
          var error = config.alertNoEventsMessageWithCategories;
        }
  
        error = error.replace('<CAT_LIST>',catList)
          .replace('<DATE_INTERVAL>',currentViewTitle);
        return error;
      }
  
      if(state.searchedTerm){
        return config.alertNoEventsMessageWithSearch.replace('<SEARCHED_TERM>',state.searchedTerm)
          .replace('<DATE_INTERVAL>',currentViewTitle);
      }
  
      return config.alertNoEventsMessage.replace('<DATE_INTERVAL>',currentViewTitle);
    }
  
    var searchTermInEvent = function (event, term) {
      term = term.toLowerCase();
  
      for (var i = 0; i < config.eventSearchTerms.length; i++) {
        if (typeof event[config.eventSearchTerms[i]] == "string") {
          if (event[config.eventSearchTerms[i]].toLowerCase().indexOf(term) != -1) {
            return true;
          }
        }
      }
  
      return false;
    }
  
    var appendClearSearchIcon = function () {
      var clearSearchIcon = document.querySelector(config.clearSearchIconIdentifier);
  
      if (!clearSearchIcon) {
        clearSearchIcon = document.createElement('i');
        clearSearchIcon.id = config.clearSearchIconIdentifier.split('#')[1];
        clearSearchIcon.className = 'icon icon-clear-search';
  
        clearSearchIcon.addEventListener('click', clearSearchQuery);
  
        $(config.searchFormIdentifier).append(clearSearchIcon);
      }
    }
  
    var clearSearchQuery = function () {
      var input = $(config.searchInputIdentifier);
  
      input.val('').focus();
      $('#selectedCategoriesText').html('');
      state.searchedTerm = input.val();
      $(config.clearSearchIconIdentifier).remove();
      reRenderCalendar();
      toggleResultsTab();
      changeView('month');
    }
  
    var scrollToCalendar = function () {
      var content = $('.main-holder');
      var scrollElement = $('body, html');
      var scrollSpeed = 350;
      var targetOffsetPos = content.offset().top - 30;
  
      if (content.offset().top !== targetOffsetPos && $(window).scrollTop() < targetOffsetPos) {
        scrollElement.animate({
          scrollTop: targetOffsetPos
        }, scrollSpeed);
      }
    }
  
    var refetchCalendar = function () {
      restoreCalendarContainer();
      updateNotificationMessage();
      updateListErrorMessage();
      state.fullCalendar = $(config.calendarIdentifier).fullCalendar('refetchEvents');
    }
  
    var reRenderCalendar = function () {
      restoreCalendarContainer();
      updateNotificationMessage();
      updateListErrorMessage();
  
      state.fullCalendar = $(config.calendarIdentifier).fullCalendar('rerenderEvents')
    }
  
    var searchNotifyMessage = function (searchTerm, selectedCategoriesTextIdentifier, selectedCategoriesObjects) {
      var $selectedCategoriesTextIdentifier = $(selectedCategoriesTextIdentifier);
      var selectedCategoriesLabels = [];
      var heading = '<p class="filter-header">Showing results for:</p>';
  
      var selectedCategoriesButtons = $.map(selectedCategoriesObjects,function(category){
        return buildCategoryButton(category);
      });
  
      if (selectedCategoriesButtons.length) {
        selectedCategoriesLabels = ' within ' + selectedCategoriesButtons.join('');
      }
  
      if (searchTerm.length) {
        if (selectedCategoriesLabels.length) {
          $selectedCategoriesTextIdentifier.html(heading + '<p class="button--small button--small-disabled"><strong>' + searchTerm + '</strong>' + selectedCategoriesLabels + '</p>');
        } else {
          $selectedCategoriesTextIdentifier.html(heading + '<p class="button--small button--small-disabled">' + searchTerm + '</p>');
        }
      }
    }
  
    var categoriesNotifyMessage = function (selectedCategoriesTextIdentifier, selectedCategoriesObjects) {
      var $selectedCategoriesTextIdentifier = $(selectedCategoriesTextIdentifier);
      var heading = (selectedCategoriesObjects.length > 0) ? '<p class="filter-header">' + config.selectedCategoriesHeader + '</p>' : '';
  
      $selectedCategoriesTextIdentifier.html(heading);
  
      for (var i = 0; i < selectedCategoriesObjects.length; i++) {
        $selectedCategoriesTextIdentifier.append(buildCategoryButton(selectedCategoriesObjects[i]));
      }
    }
  
    var updateNotificationMessage = function () {
      state.searchedTerm = $(config.searchInputIdentifier).val();
  
      //  Clear any old message
      $(config.selectedCategoriesText).html('');
  
      //  If we have a searched term,
      //  the searchNotifyMessage takes care of updating the notification section
      //  it includes the message that says in which categories the search term is applied
      if (state.searchedTerm) {
        searchNotifyMessage(state.searchedTerm, config.selectedCategoriesText, config.selectedCategoriesObjects);
      } else {
        // Only display on which categories the search applies
        categoriesNotifyMessage(config.selectedCategoriesText, config.selectedCategoriesObjects);
      }
    }
    var buildCategoryButton = function(category){
      return '<p class="button--small">' + category.label + ' <a href="#" class="removeCategoryLink" data-category-id="'+category.id +'">x</a></p>'
    }
  
    var initFiltering = function(){
      $("#selectedCategoriesText").on('click','a.removeCategoryLink',function(ev){
        ev.preventDefault();
        var categoryID = $(this).data('category-id');
  
        $('input[name="category-'+categoryID+ '"]').attr('checked',false);
        var selectedCategories = $.grep(config.selectedCategories, function(value) {
          return value != categoryID;
        });
        handleCategoriesRefreshFromArray(selectedCategories)
  
      });
    }
  
    var handleCategoriesRefreshFromArray = function(selectedCategories){
      refreshSelectedCategoriesFromArray(selectedCategories);
      refreshOriginalForm();
      replaceURL(selectedCategories);
      refetchCalendar();
    }
  
    var refreshSelectedCategoriesFromArray = function (selectedCategories) {
      var $form = $('.filterForm');
  
      if ($form.find('input').length) {
        var selectedCategoriesLabels = [];
        config.selectedCategories = [];
        config.selectedCategoriesObjects = [];
        $.each(selectedCategories,function(index,value){
          var $input = $form.find('input[name="category-'+value+'"]').first(),
            configLabel = $input.closest('label').text(),
            inputVal = $input.val();
  
          selectedCategoriesLabels.push(configLabel);
          config.selectedCategoriesObjects.push({
            label: configLabel,
            id: inputVal
          });
  
          config.selectedCategories.push(inputVal);
        });
      }
    }
  
  
    var resetHasEventsFlag = function(){
      state.hasEvents = false;
    }
  
    var changeView = function (viewName) {
      var $calendar = $(config.calendarIdentifier);
  
      if ($calendar.fullCalendar('getView').name != viewName) {
        $calendar.fullCalendar('changeView', viewName);
      }
    }
  
    var initSearch = function (formIdentifier) {
  
      $(formIdentifier).on('submit', function (ev) {
        var input = $(this).find(config.searchInputIdentifier);
        
        if (input.val() == '') {
          clearSearchQuery();
        } else {
          ev.preventDefault();
          resetHasEventsFlag();
          reRenderCalendar();
          if(!isResultsTabVisible()){
            toggleResultsTab();
          }
          changeView('results');
          if (input.val()) {
            scrollToCalendar();
          }
        }
        
      });
    }
  
    var isResultsTabVisible = function(){
      return $('button.fc-results-button').is(':visible');
    }
  
    var toggleResultsTab = function(){
      $('button.fc-results-button').toggle();
      $('button.fc-list-button').toggleClass('fc-corner-right');
    }
  
    var overrideConfig = function (options) {
      // copy properties of `options` to `config`. Will overwrite existing ones.
      for (var prop in options) {
        if (options.hasOwnProperty(prop)) {
          config[prop] = options[prop];
        }
      }
    }
  
    var setConfigForWidth = function () {
      var windowWidth = $(window).width();
  
      if ($(window).width() < config.changeEventLimitWidth) {
        config.eventLimitText = config.eventLimitTextMobile;
        config.eventLimit = {
          month: 1
        }
      } else {
        config.eventLimitText = config.eventLimitTextDesktop;
        config.eventLimit = {
          month: 3
        }
      }
  
      state.windowWidth = windowWidth;
    }
  
    var initResizeCheck = function () {
      $(window).resize(function () {
        var currentWidth = $(this).width();
        if ((state.windowWidth < config.changeEventLimitWidth && currentWidth >= config.changeEventLimitWidth) ||
          (state.windowWidth >= config.changeEventLimitWidth && currentWidth < config.changeEventLimitWidth)) {
  
          $(config.calendarIdentifier).fullCalendar('destroy');
          setConfigForWidth();
          initCalendar(config.calendarIdentifier, config.calendarEndpoint);
        }
      });
    }
  
    var init = function (options) {
      overrideConfig(options);
      setConfigForWidth();
      initCalendar(config.calendarIdentifier, config.calendarEndpoint);
      initSearch(config.searchFormIdentifier);
      initResizeCheck();
      refreshSelectedCategories(config.formIdentifier, config.selectedCategoriesText);
      updateNotificationMessage();
      toggleResultsTab();
      initFiltering();
  
      $(config.searchInputIdentifier).on('input', appendClearSearchIcon);
    }
  
    return {
      init: init
    }
  })();
  