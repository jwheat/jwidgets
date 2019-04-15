<?php
    if (isset($homepage) && file_exists(MAIN_HOME_DIR . 'var/widgets/js/widget.js') && filesize(MAIN_HOME_DIR . 'var/widgets/js/widget.js') != 0) {
?>
        <script src="<?php print getURLToWidgetJavascriptFile(); ?>"></script>
<?php
    }
    if ($script == 'az_home.php' || $script == 'az_index.php' || $script == 'services_info.php' || $script == 'xforms_index.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/livesearch.js"></script>
<?php
    }
    if ($script == 'az_home.php' || $script == 'az_index.php' || $script == 'services_info.php' || (isset($includeMaps) && $includeMaps)) {

        require_once 'maps_javascript.php';

        if ($includeGoogleMaps) {
            if ($script == 'directory_record.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/maps_google/directory_record.js"></script>
<?php
            }
            elseif ($script == 'directory_search.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/maps_google/directory_search.js"></script>
<?php
            }
            elseif ($script == 'directory_record_edit.php' || $script == 'directory_submit.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/maps_google/directory_submit.js"></script>
<?php
            }
            elseif ($script == 'az_home.php' || $script == 'az_index.php' || $script == 'services_info.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/maps_google/services.js"></script>
<?php
            }
        }
        else {
            if ($script == 'directory_record.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/maps_osm/directory_record.js"></script>
<?php
            }
            elseif ($script == 'directory_search.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/maps_osm/directory_search.js"></script>
<?php
            }
            elseif ($script == 'directory_record_edit.php' || $script == 'directory_submit.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/maps_osm/directory_submit.js"></script>
<?php
            }
            elseif ($script == 'az_home.php' || $script == 'az_index.php' || $script == 'services_info.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/maps_osm/services.js"></script>
<?php
            }
        }
    }
    if ($script == 'event_new.php' || $script == 'feedback.php' || $script == 'pageComments.php') {
?>
        <script>
        <!--
            function preSubmit() {
                document.getElementById('auth').value = '<?php print md5(DOMAIN . date('Y')); ?>';
            }
        -->
        </script>
<?php
    }
    if ($script == 'event_new.php') {
?>
        <script>
        <!--
            function toggleUntilInput(value) {
                if (value == "1day") {
                    document.getElementById('untilInput').style.display = 'none';
                }
                else {
                    document.getElementById('untilInput').style.display = 'block';
                    document.getElementById('endDate').focus();
                }
            }
        -->
        </script>
<?php
    }
    if ($script == 'xforms_index.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/xfp/javascript/xforms_live_search.js"></script>
<?php
    }
    if ($script == 'change_details.php' || $script == 'register.php') {
?>
        <script>
            // <!--
            function checkAllCheckBoxes(checkbox, question_num) {
                var form = checkbox.form;
                var numChecks = 20;
                for (var i = 0; i < numChecks; i++) {
                    form['checks_' + question_num + '_' + i].checked = checkbox.checked;
                    if (!form['checks_'  +question_num + '_' + (i + 1)]) {
                        i = numChecks;
                    }
                }
            }
            function uncheckEverythingBox(question_num) {
                var everything = document.getElementById('selectAll_' + question_num);
                everything.checked = false;
            }
            // -->
        </script>
<?php
    }
    popJavascript();
    if ($script == 'documents_info.php' && isset($previewAllowed) && $previewAllowed) {
?>
        <script>
            PreviewEdit.init(<?php print '$(\'editable\'), "documents", "' . $page->id . '", "' . Jadu_Service_Container::getInstance()->getInput()->get('preview') . '", "' . Jadu_Service_Container::getInstance()->getInput()->get('expire') . '"'; ?>);
        </script>
<?php
    }
?>
        <script type="text/javascript" src="/site/javascript/moment.min.js"></script>
        <script type="text/javascript" src="/site/javascript/fullcalendar/fullcalendar.min.js"></script>
        <script type="text/javascript" src="/site/javascript/fullcalendar/ListView.js"></script>
        <script type="text/javascript" src="/site/javascript/fullcalendar/SearchView.js"></script>
        <script type="text/javascript" src="/site/custom_scripts/events/student_activities_eventsCalendar.js"></script>
      <!-- DEBUG START -->

<?php
    if (isset($homepage) && file_exists(MAIN_HOME_DIR . 'var/widgets/js/widget.js') && filesize(MAIN_HOME_DIR . 'var/widgets/js/widget.js') != 0) {
?>
        <script src="<?php print getURLToWidgetJavascriptFile(); ?>"></script>
<?php
    }
    if ($script == 'az_home.php' || $script == 'az_index.php' || $script == 'services_info.php' || $script == 'xforms_index.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/livesearch.js"></script>
<?php
    }
    if ($script == 'az_home.php' || $script == 'az_index.php' || $script == 'services_info.php' || (isset($includeMaps) && $includeMaps)) {

        require_once 'maps_javascript.php';

        if ($includeGoogleMaps) {
            if ($script == 'directory_record.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/maps_google/directory_record.js"></script>
<?php
            }
            elseif ($script == 'directory_search.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/maps_google/directory_search.js"></script>
<?php
            }
            elseif ($script == 'directory_record_edit.php' || $script == 'directory_submit.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/maps_google/directory_submit.js"></script>
<?php
            }
            elseif ($script == 'az_home.php' || $script == 'az_index.php' || $script == 'services_info.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/maps_google/services.js"></script>
<?php
            }
        }
        else {
            if ($script == 'directory_record.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/maps_osm/directory_record.js"></script>
<?php
            }
            elseif ($script == 'directory_search.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/maps_osm/directory_search.js"></script>
<?php
            }
            elseif ($script == 'directory_record_edit.php' || $script == 'directory_submit.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/maps_osm/directory_submit.js"></script>
<?php
            }
            elseif ($script == 'az_home.php' || $script == 'az_index.php' || $script == 'services_info.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/maps_osm/services.js"></script>
<?php
            }
        }
    }
    if ($script == 'event_new.php' || $script == 'feedback.php' || $script == 'pageComments.php') {
?>
        <script>
        <!--
            function preSubmit() {
                document.getElementById('auth').value = '<?php print md5(DOMAIN . date('Y')); ?>';
            }
        -->
        </script>
<?php
    }
    if ($script == 'event_new.php') {
?>
        <script>
        <!--
            function toggleUntilInput(value) {
                if (value == "1day") {
                    document.getElementById('untilInput').style.display = 'none';
                }
                else {
                    document.getElementById('untilInput').style.display = 'block';
                    document.getElementById('endDate').focus();
                }
            }
        -->
        </script>
              <!-- DEBUG MIDDLE -->
<?php
    }
    if ($script == 'xforms_index.php') {
?>
        <script src="<?php print getStaticContentRootURL(); ?>/site/xfp/javascript/xforms_live_search.js"></script>
<?php
    }
    if ($script == 'change_details.php' || $script == 'register.php') {
?>
        <script>
            // <!--
            function checkAllCheckBoxes(checkbox, question_num) {
                var form = checkbox.form;
                var numChecks = 20;
                for (var i = 0; i < numChecks; i++) {
                    form['checks_' + question_num + '_' + i].checked = checkbox.checked;
                    if (!form['checks_'  +question_num + '_' + (i + 1)]) {
                        i = numChecks;
                    }
                }
            }
            function uncheckEverythingBox(question_num) {
                var everything = document.getElementById('selectAll_' + question_num);
                everything.checked = false;
            }
            // -->
        </script>
<?php
    }
    popJavascript();
    if ($script == 'documents_info.php' && isset($previewAllowed) && $previewAllowed) {
?>
        <script>
            // - JW 06/06/16 : CMS 31 breaking changes
            // http://www.jadu.net/blog/cms-updates/post/193/continuum-31
            // https://jadusupport.q.jadu.net/q/case/SUP002000/timeline
            PreviewEdit.init(<?php '$(\'editable\', "documents", "' . $page->id . '", "' . Jadu_Service_Container::getInstance()->getInput()->get('preview') . '","' . Jadu_Service_Container::getInstance()->getInput()->get('expire'). '"'; ?>);

        </script>
<?php
    }
?>
      <!-- DEBUG END -->
        <script type="text/javascript" src="/site/javascript/jquery-ui-1.10.3.tabs.min.js"></script>
        <script type="text/javascript" src="/site/javascript/jquery.scrollTo-1.4.3.1-min.js"></script>

        <!-- MOD : JWHEAT : DC Additions -->
        <script type="text/javascript" src="/site/javascript/jquery.countdown.min.js"></script>
        <script type="text/javascript" src="/site/javascript/jquery.stickytableheaders.min.js"></script>
        <script type="text/javascript" src="/site/javascript/jquery-ui-1.10.4.tooltip.min.js"></script>
        <script type="text/javascript" src="/site/javascript/jquery.counter.js"></script>
        <script type="text/javascript" src="/site/javascript/appear.js"></script>
        <!-- ########################### -->
        <script type="text/javascript" src="/site/javascript/clear-inputs.js"></script>
      
        <script type="text/javascript" src="/site/javascript/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="/site/javascript/waypoints.min.js"></script>
        <script type="text/javascript" src="/site/javascript/custom-form.js"></script>
        <script type="text/javascript" src="/site/javascript/jquery.mmenu.min.js"></script>
        <script type="text/javascript" src="/site/javascript/waypoints-sticky.min.js"></script>
        <script type="text/javascript" src="/site/javascript/jquery.ui.accordion.min.js"></script>
        <script type="text/javascript" src="/site/javascript/scripts.js"></script>
        <script type="text/javascript" src="/site/javascript/enquire.js"></script>
        <script type="text/javascript" src="/site/javascript/responsive.js?v2"></script>

        <script src="<?php print getStaticContentRootURL(); ?>/site/custom_scripts/jadu.nav.Menus.js"></script>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/site.js"></script>

        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/almond.min.js"></script>
        <script src="<?php print getStaticContentRootURL(); ?>/site/javascript/util.min.js"></script>
