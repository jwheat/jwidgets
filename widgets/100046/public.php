<?php
$fancybox = true;
#if (!class_exists('MessiahDirectoryCategoryHelper')) {
    require_once "custom/academics/class.MessiahDirectoryCategoryHelper.php";
#}
    $directoryhelper = new MessiahDirectoryCategoryHelper;
    define('WEBROOT', '/a/academics/listing');

    $major_html = "";
    $param_department = "";
    $param_filtertitle = "";
    $param_hidefilter = "";

    $api_key = "a38737a6a302f5f0390169114b6640a6";
    $directory_id = 8;



    if ('%PARAM_DEPARTMENT%' != '' && '%PARAM_DEPARTMENT%' != '%PARAM_DEPARTMENT'.'%') {
        $param_department = '%PARAM_DEPARTMENT%';
        $param_previous = $param_department;
    }

    if ('%PARAM_HIDEFILTER%' != '' && '%PARAM_HIDEFILTER%' != '%PARAM_HIDEFILTER'.'%') {
        $param_hidefilter = '%PARAM_HIDEFILTER%';
    }

    if ('%PARAM_FILTERTITLE%' != '' && '%PARAM_FILTERTITLE%' != '%PARAM_FILTERTITLE'.'%') {
        $param_filtertitle = '%PARAM_FILTERTITLE%';
    }

    if ($param_filtertitle == "") { $param_filtertitle = "major";}

    if (isset($_GET['s'])) {
        $params = $_GET['s'];        
        $param_array = explode(":", $params);
        if ($param_array[0] != "") {
            $param_department = $param_array[0];
            $param_previous = $param_array[1];
            $major_html = "<option value=''>View All</option>";
        } 
    }

    $majors = $directoryhelper->get_directory_subcategories ($directory_id,$param_previous);

    if ($majors != "") {
        foreach ($majors as $m) {
            $major_id = $m['id'];
            $major_name = $m['title'];

            $major_html .= "<option value='" . $major_id .":". $param_previous. "'>" . $major_name . "</option>\n";
        }
    } else {

    }

    $directory_api_url = "http://www.messiah.edu/site/custom_scripts/api/directoriesByCategory.php?directoryID=".$directory_id."&categoryID=" . $param_department;

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

    $featured_story = array();
    $alumni_story = array();

    $featured_id = 0;
    $alumni_id = 0;

    foreach ($array as $faculty) {

        if (!empty($faculty['entry_id'])) {
            $record_id = $faculty['entry_id'];
            $alumni_name = $faculty['entry_title'];
            $alumni_major = $faculty['major_name'];
            $alumni_image = $faculty['image'];
            $alumni_class_year = $faculty['class_year_two_digits_numbers_only'];
            $alumni_subheading = $faculty['subheading'];
            $alumni_teaser = $faculty['teaser_between_25_and_50_words'];
            $alumni_profile = $faculty['profile'];
            $alumni_featured_story = $faculty['featured_story'];

            /*if ($alumni_featured_story == "yes") {
                $featured_story[$featured_id]['id'] = $record_id;
                $featured_story[$featured_id]['name'] = $alumni_name;
                $featured_story[$featured_id]['image'] = $alumni_image;
                $featured_story[$featured_id]['class_year'] = $alumni_class_year;
                $featured_story[$featured_id]['subheading'] = $alumni_subheading;
                $featured_story[$featured_id]['teaser'] = $alumni_teaser;
                $featured_story[$featured_id]['profile'] = $alumni_profile;
                $featured_story[$featured_id]['featured'] = $alumni_featured_story;
                $featured_id++;

            } else {
*/
                $alumni_story[$alumni_id]['id'] = $record_id;
                $alumni_story[$alumni_id]['name'] = $alumni_name;
                $alumni_story[$alumni_id]['image'] = $alumni_image;
                $alumni_story[$alumni_id]['class_year'] = $alumni_class_year;
                $alumni_story[$alumni_id]['subheading'] = $alumni_subheading;
                $alumni_story[$alumni_id]['teaser'] = $alumni_teaser;
                $alumni_story[$alumni_id]['profile'] = $alumni_profile;
                $alumni_story[$alumni_id]['major'] = $alumni_major;
                $alumni_id++;
  #          }
        }
    }

?>

<link type="text/css" rel="stylesheet" href="/site/custom_scripts/styles/alumni.css?v=2"/>

<?php if ($param_hidefilter != "Y") { ?>
    <div class="alumni-filter-holder">
        <label for="select">Filter by <?php print $param_filtertitle;?>:</label>
        <select id="alumni_list_filter" name="alumni_list_filter" class="sel-02">
            <option class="hidden">View profile</option>
            <?php print $major_html; ?>
        </select>
    </div><!-- / filter holder -->
<?php } ?>

<ul class="filter-content">

    <?php

        if (!empty($alumni_story)) { 
            for ($i=0; $i <= sizeof($alumni_story) - 1; $i++) { 
#            for ($i=0; $i <= 4 ; $i++) { 
                if (!empty($alumni_story[$i]['name'])) {
                    generate_block($alumni_story,$i);
                }
            }
        }
    ?>
</ul>


<?php 

function generate_block($person_array,$person_index) { 
        global $directory_id;
        global $param_hidefilter;
        
        $person_id = $person_array[$person_index]['id'];
        $person_image = $person_array[$person_index]['image'];    
        $person_name = $person_array[$person_index]['name'];
        $person_major = $person_array[$person_index]['major'];       
        $person_class_year = $person_array[$person_index]['class_year'];
        if (!empty($person_class_year)) {
            $person_class_year = "’" . $person_class_year;
        }
        
        $person_subheading = $person_array[$person_index]['subheading'];
        $person_teaser = $person_array[$person_index]['teaser'];
        $person_profile = $person_array[$person_index]['profile'];


        print "
            <li>";

            if ($param_hidefilter != "Y") {
                print "
                    <span class='name-section'>".$person_major."</span>
                ";
            }

        if (!empty($person_image)) { 

            print "
                <div class='picture-holder'>
                    <img class='' alt='".$person_name . "-". $person_title . "' src='/images/". $person_image ."' height='221' width='174' /> 
                </div>
            ";
        }

            print "
                <div class='text-box'>
                    <span class='name-holder'>".$person_name." ".$person_class_year."</span>
                    <span class='add-holder'>".$person_subheading."</span>
                    <p>".$person_teaser."</p>";

            if (!empty($person_profile)) {
                print "<a class='alumni_list_various btn-info fancybox-01' data-fancybox-type='iframe' href='/a/alumni/lightbox.php?directoryID=". $directory_id."&entryID=". $person_id."'>View profile</a>";
            }                

            print "                    
                </div>
            </li>
        ";
    }

?>

<script>
$(document).ready(function() {
    $('head').append('<link rel="canonical" href="/info/20755/our_alumni" />');
    $(".alumni_list_various").fancybox({
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


    $('#alumni_list_filter').change(function() {
        var sort_by = $(this).val();
        window.location = "?s=" + sort_by;
    });
});  
</script>
