<?php
    $fancybox = true;
    define('WEBROOT', '/a/academics/listing');

    $param_department = "";

    if ($param_department == '%' . 'PARAM_DEPARTMENT%' || $param_department == '') {
        $param_department = '%PARAM_DEPARTMENT%';
    }

    $api_key = "a38737a6a302f5f0390169114b6640a6";
    $directory_id = 8;
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
            #if (empty($faculty['image'])) {
            #    $faculty['image'] = "blank.png";
            #}

            $record_id = $faculty['entry_id'];
            $alumni_name = $faculty['entry_title'];
            $alumni_image = $faculty['image'];
            $alumni_class_year = $faculty['class_year_two_digits_numbers_only'];
            if (!empty($alumni_class_year)) {
                $alumni_class_year = "’" . $alumni_class_year;
            }

            $alumni_subheading = $faculty['subheading'];
            $alumni_teaser = $faculty['teaser_between_25_and_50_words'];
            $alumni_profile = $faculty['profile'];
            $alumni_featured_story = $faculty['featured_story'];

            if ($alumni_featured_story == "yes") {
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

                $alumni_story[$alumni_id]['id'] = $record_id;
                $alumni_story[$alumni_id]['name'] = $alumni_name;
                $alumni_story[$alumni_id]['image'] = $alumni_image;
                $alumni_story[$alumni_id]['class_year'] = $alumni_class_year;
                $alumni_story[$alumni_id]['subheading'] = $alumni_subheading;
                $alumni_story[$alumni_id]['teaser'] = $alumni_teaser;
                $alumni_story[$alumni_id]['profile'] = $alumni_profile;
                $alumni_id++;
            }
        }
    }

?>

<link type="text/css" rel="stylesheet" href="/site/custom_scripts/styles/alumni.css"/>
<?php
    if (!empty($featured_story)) { 
        if (sizeof($featured_story) == 1) {
            print "
                <style>
                    .flex-direction-nav a.flex-disabled {
                        display:none;
                    }
                </style>
            ";
        }
    }
?>    

<div class="info-gallery gallery-05">
    <ul class="slides">

    <?php 
        if (!empty($featured_story)) { 
            for ($i=0; $i <= sizeof($featured_story) - 1; $i++) { 
                generate_featured_block($featured_story,$i);
            }
        }
    ?>
    </ul>
</div>

<?php 

function generate_featured_block ($person_array, $person_index) {
    global $directory_id;

    $person_id = $person_array[$person_index]['id'];
    $person_image = $person_array[$person_index]['image'];
    $person_name = $person_array[$person_index]['name'];
    $person_class_year = $person_array[$person_index]['class_year'];
    $person_subheading = $person_array[$person_index]['subheading'];
    $person_teaser = $person_array[$person_index]['teaser'];
    $person_prfile = $person_array[$person_index]['profile'];

    print "
        <li>";

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
                <p>".$person_teaser."</p>
                <a class='various btn-info fancybox-01' data-fancybox-type='iframe' href='/a/alumni/lightbox.php?directoryID=". $directory_id."&entryID=". $person_id."'>View profile</a>

                <span class='modile-text'>< swipe for more ></span>
            </div>
        </li>
    ";
}

?>

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
    });  
</script>
