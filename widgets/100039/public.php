<?php
    require_once "custom/academics/class.MessiahDirectoryCategoryHelper.php";
    $directoryhelper = new MessiahDirectoryCategoryHelper;

    $param_department = "";
    $param_hidefilter = "";

    if ($param_department == '%' . 'PARAM_DEPARTMENT%' || $param_department == '') {
        $param_department = '%PARAM_DEPARTMENT%';
        $param_previous = $param_department;
    }

    if ('%PARAM_HIDEFILTER%' != '' && '%PARAM_HIDEFILTER%' != '%PARAM_HIDEFILTER'.'%') {
        $param_hidefilter = '%PARAM_HIDEFILTER%';
    }

    $filtered_id = "";
    $current_filter = "All Faculty";

    if (isset($_GET['sfaculty'])) {
        $params = $_GET['sfaculty'];        
        $param_array = explode(":", $params);
        if ($param_array[0] != "") {
            $param_department = $param_array[0];
            $param_previous = $param_array[1];
            $filtered_id = $param_array[0];

            #$major_html = "<option value=''>View All</option>";
        } 
    }

    $api_key = "a38737a6a302f5f0390169114b6640a6";
    $directory_id = 9;


    $majors = $directoryhelper->get_directory_subcategories ($directory_id,$param_previous);
    
    $a_program = array();

    if ($majors != "") {
        foreach ($majors as $m) {
            $major_id = $m['id'];
            $major_name = $m['title'];

            $tmp_arr = array();
            array_push($tmp_arr, $major_id);
            array_push($tmp_arr, $major_name);
            array_push($a_program, $tmp_arr);

            if ($param_department == $major_id) {
                #$major_selected = "selected='selected'";
                $current_filter = $major_name;
            } else {
                #$major_selected = "";
                #$current_filter = "All";
            }

            #$major_html .= "<option value='" . $major_id .":". $param_previous. "' ".$major_selected.">" . $major_name . "</option>\n";
        }
    } else {

    }


    $directory_api_url = "https://www.messiah.edu/a/api/directoriesByCategory.php?directoryID=".$directory_id."&live_only=Y&apiKey=a38737a6a302f5f0390169114b6640a6&categoryID=" . $param_department;

    $options = array(
      'http'=>array(
        'method'=>"GET",
        'header'=>"Accept-language: en\r\n" .
                  "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
                  "User-Agent: JaduWidget/1.0"
      )
    );

    $context = stream_context_create($options);
    $json = file_get_contents($directory_api_url, false, $context);

    $array = json_decode($json,TRUE);

    $chair_array = array();
    $adjunct_array = array();
    $staff_array = array();
    $faculty_array = array();
    $emeritus_array = array();

    $chair_id = 0;
    $staff_id = 0;
    $adjunct_id = 0;
    $faculty_id = 0;
    $emeritus_id = 0;

    foreach ($array as $faculty) {

        if (!empty($faculty['entry_id'])) {
            $record_id = $faculty['entry_id'];
            $faculty_name = $faculty['entry_title'];
            $faculty_first_name = $faculty['first_name'];
            $faculty_last_name = $faculty['last_name'];
            $faculty_image = $faculty['profile_image'];
            $faculty_title = $faculty['job_title'];
            $faculty_email = $faculty['email'];
            $faculty_phone = $faculty['phone'];
            $faculty_website = $faculty['website'];
            $faculty_cv = $faculty['curriculum_vitae'];
            $faculty_interests = $faculty['interest_and_areas_of_expertise'];
            $faculty_education_overview = $faculty['education_overview_and_listing'];
            $faculty_education = $faculty['education_listing_use_bullets'];
            $faculty_classes = $faculty['classes_i_teach_use_bullets'];
            $user_heading_1 = $faculty['heading_user_defined_1'];
            $user_body_1 = $faculty['body_user_defined_1'];
            $user_heading_2 = $faculty['heading_user_defined_2'];
            $user_body_2 = $faculty['body_user_defined_2'];

            $is_chair = $faculty['department_chair'];
            $is_adjunct = $faculty['adjunct_faculty_member'];
            $is_staff = $faculty['department_staff_member'];
            $is_emeritus = $faculty['professor_emeritus'];
            $is_live = $faculty['live'];


            if (!empty($faculty_interests) || !empty($faculty_education_overview) || !empty($faculty_education) || !empty($faculty_classes) || !empty($user_heading_1) || !empty($user_body_1) || !empty($user_heading_2) || !empty($user_body_2) ) {
                $display_profile_button = true;
            } else {
                $display_profile_button = false;
            }



            if ($is_chair == "Yes") {
                $chair_array[$chair_id]['id'] = $record_id;
                $chair_array[$chair_id]['name'] = $faculty_name;
                $chair_array[$chair_id]['first_name'] = $faculty_first_name;
                $chair_array[$chair_id]['last_name'] = $faculty_last_name;
                $chair_array[$chair_id]['image'] = $faculty_image;
                $chair_array[$chair_id]['title'] = $faculty_title;
                $chair_array[$chair_id]['email'] = $faculty_email;
                $chair_array[$chair_id]['phone'] = $faculty_phone;
                $chair_array[$chair_id]['website'] = $faculty_website;
                $chair_array[$chair_id]['cv'] = $faculty_cv;
                $chair_array[$chair_id]['interests'] = $faculty_interests;
                $chair_array[$chair_id]['education_overview'] = $faculty_education_overview;
                $chair_array[$chair_id]['education'] = $faculty_education;
                $chair_array[$chair_id]['classes'] = $faculty_classes;
                $chair_array[$chair_id]['user_heading_1'] = $user_heading_1;
                $chair_array[$chair_id]['user_body_1'] = $user_body_1;
                $chair_array[$chair_id]['user_heading_2'] = $user_heading_2;
                $chair_array[$chair_id]['user_body_2'] = $user_body_2;
                $chair_array[$chair_id]['user_heading_3'] = $user_heading_3;
                $chair_array[$chair_id]['user_body_3'] = $user_body_3;
                $chair_array[$chair_id]['display_profile_button'] = $display_profile_button;
                $chair_id++;

            } else if ($is_staff == "Yes") {
                $staff_array[$staff_id]['id'] = $record_id;                
                $staff_array[$staff_id]['name'] = $faculty_name;
                $staff_array[$staff_id]['first_name'] = $faculty_first_name;
                $staff_array[$staff_id]['last_name'] = $faculty_last_name;                
                $staff_array[$staff_id]['image'] = $faculty_image;
                $staff_array[$staff_id]['title'] = $faculty_title;
                $staff_array[$staff_id]['email'] = $faculty_email;
                $staff_array[$staff_id]['phone'] = $faculty_phone;
                $staff_array[$staff_id]['website'] = $faculty_website;
                $staff_array[$staff_id]['cv'] = $faculty_cv;
                $staff_array[$staff_id]['interests'] = $faculty_interests;
                $staff_array[$staff_id]['education_overview'] = $faculty_education_overview;
                $staff_array[$staff_id]['education'] = $faculty_education;
                $staff_array[$staff_id]['classes'] = $faculty_classes;
                $staff_array[$staff_id]['user_heading_1'] = $user_heading_1;
                $staff_array[$staff_id]['user_body_1'] = $user_body_1;
                $staff_array[$staff_id]['user_heading_2'] = $user_heading_2;
                $staff_array[$staff_id]['user_body_2'] = $user_body_2;
                $staff_array[$staff_id]['user_heading_3'] = $user_heading_3;
                $staff_array[$staff_id]['user_body_3'] = $user_body_3;
                $staff_array[$staff_id]['display_profile_button'] = $display_profile_button;

                $staff_id++;
            } else if ($is_emeritus == "Yes") {
                $emeritus_array[$emeritus_id]['id'] = $record_id;                
                $emeritus_array[$emeritus_id]['name'] = $faculty_name;
                $emeritus_array[$emeritus_id]['first_name'] = $faculty_first_name;
                $emeritus_array[$emeritus_id]['last_name'] = $faculty_last_name;                                
                $emeritus_array[$emeritus_id]['image'] = $faculty_image;
                $emeritus_array[$emeritus_id]['title'] = $faculty_title;
                $emeritus_array[$emeritus_id]['email'] = $faculty_email;
                $emeritus_array[$emeritus_id]['phone'] = $faculty_phone;
                $emeritus_array[$emeritus_id]['website'] = $faculty_website;
                $emeritus_array[$emeritus_id]['cv'] = $faculty_cv;
                $emeritus_array[$emeritus_id]['interests'] = $faculty_interests;
                $emeritus_array[$emeritus_id]['education_overview'] = $faculty_education_overview;
                $emeritus_array[$emeritus_id]['education'] = $faculty_education;
                $emeritus_array[$emeritus_id]['classes'] = $faculty_classes;
                $emeritus_array[$emeritus_id]['user_heading_1'] = $user_heading_1;
                $emeritus_array[$emeritus_id]['user_body_1'] = $user_body_1;
                $emeritus_array[$emeritus_id]['user_heading_2'] = $user_heading_2;
                $emeritus_array[$emeritus_id]['user_body_2'] = $user_body_2;
                $emeritus_array[$emeritus_id]['user_heading_3'] = $user_heading_3;
                $emeritus_array[$emeritus_id]['user_body_3'] = $user_body_3;
                $emeritus_array[$emeritus_id]['display_profile_button'] = $display_profile_button;

                $emeritus_id++;
            } else if ($is_adjunct == "Yes") {                
                $adjunct_array[$adjunct_id]['id'] = $record_id;
                $adjunct_array[$adjunct_id]['name'] = $faculty_name;
                $adjunct_array[$adjunct_id]['first_name'] = $faculty_first_name;
                $adjunct_array[$adjunct_id]['last_name'] = $faculty_last_name;                                                
                $adjunct_array[$adjunct_id]['image'] = $faculty_image;
                $adjunct_array[$adjunct_id]['title'] = $faculty_title;
                $adjunct_array[$adjunct_id]['email'] = $faculty_email;
                $adjunct_array[$adjunct_id]['phone'] = $faculty_phone;
                $adjunct_array[$adjunct_id]['website'] = $faculty_website;
                $adjunct_array[$adjunct_id]['cv'] = $faculty_cv;
                $adjunct_array[$adjunct_id]['interests'] = $faculty_interests;
                $adjunct_array[$adjunct_id]['education_overview'] = $faculty_education_overview;
                $adjunct_array[$adjunct_id]['education'] = $faculty_education;
                $adjunct_array[$adjunct_id]['classes'] = $faculty_classes;
                $adjunct_array[$adjunct_id]['user_heading_1'] = $user_heading_1;
                $adjunct_array[$adjunct_id]['user_body_1'] = $user_body_1;
                $adjunct_array[$adjunct_id]['user_heading_2'] = $user_heading_2;
                $adjunct_array[$adjunct_id]['user_body_2'] = $user_body_2;
                $adjunct_array[$adjunct_id]['user_heading_3'] = $user_heading_3;
                $adjunct_array[$adjunct_id]['user_body_3'] = $user_body_3;
                $adjunct_array[$adjunct_id]['display_profile_button'] = $display_profile_button;

                $adjunct_id++;
            } else {
                $faculty_array[$faculty_id]['id'] = $record_id;
                $faculty_array[$faculty_id]['name'] = $faculty_name;
                $faculty_array[$faculty_id]['first_name'] = $faculty_first_name;
                $faculty_array[$faculty_id]['last_name'] = $faculty_last_name;                                                                
                $faculty_array[$faculty_id]['image'] = $faculty_image;
                $faculty_array[$faculty_id]['title'] = $faculty_title;
                $faculty_array[$faculty_id]['email'] = $faculty_email;
                $faculty_array[$faculty_id]['phone'] = $faculty_phone;
                $faculty_array[$faculty_id]['website'] = $faculty_website;
                $faculty_array[$faculty_id]['cv'] = $faculty_cv;
                $faculty_array[$faculty_id]['interests'] = $faculty_interests;
                $faculty_array[$faculty_id]['education_overview'] = $faculty_education_overview;
                $faculty_array[$faculty_id]['education'] = $faculty_education;
                $faculty_array[$faculty_id]['classes'] = $faculty_classes;
                $faculty_array[$faculty_id]['user_heading_1'] = $user_heading_1;
                $faculty_array[$faculty_id]['user_body_1'] = $user_body_1;
                $faculty_array[$faculty_id]['user_heading_2'] = $user_heading_2;
                $faculty_array[$faculty_id]['user_body_2'] = $user_body_2;
                $faculty_array[$faculty_id]['user_heading_3'] = $user_heading_3;
                $faculty_array[$faculty_id]['user_body_3'] = $user_body_3;
                $faculty_array[$faculty_id]['display_profile_button'] = $display_profile_button;

                $faculty_id++;            
            }
        }
    }

     // Sort the multidimensional array
     usort($chair_array, "messiah_custom_sort");
     usort($adjunct_array, "messiah_custom_sort");
     usort($staff_array, "messiah_custom_sort");
     usort($faculty_array, "messiah_custom_sort");
     usort($emeritus_array, "messiah_custom_sort");

     // Define the custom sort function
     function messiah_custom_sort($a,$b) {
          return $a['last_name']>$b['last_name'];
     }

#    array_multisort($chair_array['last_name']);
#    array_multisort($adjunct_array['last_name']);
#    array_multisort($staff_array['last_name']);
#    array_multisort($faculty_array['last_name']);
#    array_multisort($emeritus_array['last_name']);

?>
<link type="text/css" rel="stylesheet" href="/site/custom_scripts/styles/faculty-listing.css"/>
<script src='/site/javascript/addclass.js'></script>

<style>

</style>

<?php if ($param_hidefilter == "DONOTSHOW") { ?>
    <div class="faculty-filter-holder">
        <label for="select">Filter by <?php print $param_filtertitle;?>:</label>
        <select id="faculty_list_filter" name="faculty_list_filter" class="sel-02 customForm-hidden">
            <option class="hidden">View all</option>
            <?php print $major_html; ?>
        </select>
    </div><!-- / filter holder -->
<?php } ?>

<div class="filter-holder">
    <label for="select">Filter by major:</label>
    <select id="select" class="sel-02 customForm-hidden">
        <option class="hidden">Button Style Here</option>
        <option>Name of major</option>
        <option>Name of major</option>
        <option>Name of major</option>
        <option>Name of major</option>
        <option>Name of major</option>
    </select>
</div><!-- / filter holder -->
<div class="block-inform">
    <?php if ($param_hidefilter != "Y") { ?>
        <div class="top-box">
            <span>Filter listing</span>
            <div class="box-show">
                <a href="?sfaculty=" class="item"><em></em>Showing <?php print $current_filter;?></a>
                <div class="drop">
                    <ul>
                        <?php if ($filtered_id != "") {
                            print "<li><a href='?'> View All</a></li>\n";
                        }
                        ?>


                        <?php foreach ($a_program as $p) {
                                $program_id = $p[0];
                                $program_name = $p[1];
                                print "<li><a href='?sfaculty=".$program_id.":". $param_previous."'>" . $program_name . "</a></li>\n";
                              }
                        ?>                                    
                    </ul>
                </div>
            </div>
        </div>
    <?php } ?>



<?php 
    if (!empty($chair_array)) { 
        for ($i=0; $i <= sizeof($chair_array) - 1; $i++) { 
            generate_faculty_list_block($chair_array,$i);
        }
    }

    if (!empty($faculty_array)) { 
        for ($i=0; $i <= sizeof($faculty_array) - 1; $i++) { 
            generate_faculty_list_block($faculty_array,$i);
        }
    }
?>

<?php  if (!empty($emeritus_array)) { ?>
            <div style='clear:both;'>
                <h2>Professor Emeritus</h2>
            </div>

            <?php 
                if (!empty($emeritus_array)) { 
                    for ($i=0; $i <= sizeof($emeritus_array) - 1; $i++) { 
                        generate_faculty_list_block($emeritus_array,$i);
                    }
                }
        }
?>


<?php  if (!empty($adjunct_array)) { ?>
            <div class='ad-faculty'>
                <h2>Adjunct Faculty</h2>
            </div>

            <?php 
                if (!empty($adjunct_array)) { 
                    for ($i=0; $i <= sizeof($adjunct_array) - 1; $i++) { 
                        generate_faculty_list_block($adjunct_array,$i);
                    }
                }
        }
            ?>


<?php  if (!empty($staff_array)) { ?>
            <div style='clear:both;'>
                <h2>Department Staff</h2>
            </div>

            <?php 
                if (!empty($staff_array)) { 
                    for ($i=0; $i <= sizeof($staff_array) - 1; $i++) { 
                        generate_faculty_list_block($staff_array,$i);
                    }
                }
        }
            ?>


<?php function generate_faculty_list_block($person_array,$person_index) { 
        global $directory_id;
        global $display_profile_button;

        $person_id = $person_array[$person_index]['id'];
        $person_image = $person_array[$person_index]['image'];
        $person_name = $person_array[$person_index]['name'];
        $person_title = $person_array[$person_index]['title'];
        $person_email = $person_array[$person_index]['email'];
        $person_phone = $person_array[$person_index]['phone'];
        $person_website = $person_array[$person_index]['website'];
        #$profile_content = $person_array[$person_index]['interests'] . $person_array[$person_index]['education_overview'] . $person_array[$person_index]['education'] . $person_array[$person_index]['classes'] . $person_array[$person_index]['user_body_1'] . $person_array[$person_index]['user_body_2'] . $person_array[$person_index]['user_body_3']; 
        
        $display_profile_button = $person_array[$person_index]['display_profile_button'];

        print "
        <div class='faculty-record faculty-staff' id='". $person_id ."'>
        ";

        if (!empty($person_image)) {
            print "
                <div class='img-wrap'>
                    <img class='' alt='".$person_name . "-". $person_title . "' src='/images/". $person_image ."' />
                </div>
            ";
        }

        print "<div class='faculty-info'>";
        print "
            <h5>" . $person_name ."</h5>
        ";

        if ($person_title != "") {
            print "<p class='intro'>" . $person_title . "</p>";
        }
        if (!empty($person_email)) {
            print "<span><img src='/images/ico_20.png' alt='image'><a href='mailto:". $person_email."'>Send email </a></span>";
        }
        if (!empty($person_phone)) {
            print "<span><img src='/images/ico_21.png' alt='image'>". $person_phone."</span>";
        }
        if (!empty($person_website)) {
            print "<span><img src='/images/www_icon.png' alt='image'><a href='". $person_website."'>Visit my website</a></span>";
        }

    # check to make sure there is extra data to display in the light-box
        if ($display_profile_button) {
            print "
                <div class='profile-link btn-mobile-hide'>
                    <a class='various' data-fancybox-type='iframe' href='/a/academics/facultydir/lightbox.php?directoryID=". $directory_id."&entryID=". $person_id."'>View profile</a>
                </div>
                <div class='profile-link btn-mobile-show'>
                    <a href='/a/academics/facultydir/lightbox.php?directoryID=". $directory_id."&entryID=". $person_id."'>View profile</a>
                </div>
            ";
        }
    print "

        </div>
    </div>
        ";

    }
?>

</div>

<script>
$(document).ready(function() {
    $(".various").fancybox({
        maxWidth    : 900,
        maxHeight   : 800,
        fitToView   : false,
        width       : '80%',
        height      : '90%',
        autoSize    : false,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none'
    });

    $('#faculty_list_filter').change(function() {
        var sort_by = $(this).val();
        window.location = "?sfaculty=" + sort_by;
    });
  
});
</script>  
