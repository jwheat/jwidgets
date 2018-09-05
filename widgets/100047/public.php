 <?php
   # if (!class_exists('MessiahDirectoryCategoryHelper')) {
        require_once "custom/academics/class.MessiahDirectoryCategoryHelper.php";
   # }
    
    $directoryhelper = new MessiahDirectoryCategoryHelper;
    define('WEBROOT', '/a/academics/listing');

    $major_html = "";
    $param_department = "";

    $api_key = "a38737a6a302f5f0390169114b6640a6";
    $directory_id = 1;

    if ($param_department == '%' . 'PARAM_DEPARTMENT%' || $param_department == '') {
        $param_department = '%PARAM_DEPARTMENT%';
        $param_previous = $param_department;
    }
    if ($param_hidefilter == '%' . 'PARAM_HIDEFILTER%' || $param_hidefilter == '') {
        $param_hidefilter = '%PARAM_HIDEFILTER%';
    }
    

    $filtered_id = "";
    
    if (isset($_GET['s'])) {
        $params = $_GET['s'];        
        $param_array = explode(":", $params);
        if ($param_array[0] != "") {
            $param_department = $param_array[1];
            $param_previous = $param_array[1];
            $filtered_id = $param_array[0];

            $major_html = "<option value=''>Remove Filter</option>";
        } 
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

    $a_program = array();
    $a_work = array();
    $a_do = array();
    $a_study = array();

    foreach ($array as $major) {

        if (!empty($major['entry_id'])) {
            $record_id = $major['entry_id'];
            $alumni_title = $major['entry_title'];
            $alumni_program_name = $major['program_name'];
            $alumni_work = $major['where_they_work_separate_with_a_comma'];
            $alumni_do = $major['what_they_do_separate_with_a_comma'];
            $alumni_study = $major['where_they_study_separate_with_a_comma'];

            if ( !empty($alumni_work) || !empty($alumni_do) || !empty($alumni_study) ) {
                if (!empty($alumni_program_name)) { 
                    $p_name = trim($alumni_program_name);
                    $p_id = $record_id;

                    $tmp_arr = array();
                    array_push($tmp_arr, $p_id);
                    array_push($tmp_arr, $p_name);
                    array_push($a_program, $tmp_arr);
                }
            }

            if ($filtered_id == "") {
                    $current_filter = "all majors";
                    if (!empty($alumni_work)) {
                        #check for comma
                        if (strpos($alumni_work, ",")) {
                            $tmp_work = explode(",",$alumni_work);
                            foreach ($tmp_work as $t) {
                                if (!empty($t)) {
                                    array_push($a_work, trim($t));
                                }
                            }
                        } else {
                            array_push($a_work,$alumni_work);
                        }
                    }

                    if (!empty($alumni_do)) {
                        if (strpos($alumni_do, ",") === FALSE) {
                            array_push($a_do,$alumni_do);
                        } else {
                            $tmp_do = explode(",",$alumni_do);
                            foreach ($tmp_do as $t) {
                                if (!empty($t)) {
                                    array_push($a_do, trim($t));
                                }
                            }
                        } 
                    }

                    if (!empty($alumni_study)) {
                        if (strpos($alumni_study, ",") === FALSE) {
                            array_push($a_study,$alumni_study);
                        } else {
                            $tmp_study = explode(",",$alumni_study);
                            foreach ($tmp_study as $t) {
                                if (!empty($t)) {
                                    array_push($a_study, trim($t));
                                }
                            }
                        } 
                    }

            } else {
                if ($record_id == $filtered_id) {
                    $current_filter = $alumni_program_name;    
                    if (!empty($alumni_work)) {
                        #check for comma
                        if (strpos($alumni_work, ",")) {
                            $tmp_work = explode(",",$alumni_work);
                            foreach ($tmp_work as $t) {
                                if (!empty($t)) {
                                    array_push($a_work, trim($t));
                                }
                            }
                        } else {
                            array_push($a_work,$alumni_work);
                        }
                    }

                    if (!empty($alumni_do)) {
                        if (strpos($alumni_do, ",") === FALSE) {
                            array_push($a_do,$alumni_do);
                        } else {
                            $tmp_do = explode(",",$alumni_do);
                            foreach ($tmp_do as $t) {
                                if (!empty($t)) {
                                    array_push($a_do, trim($t));
                                }
                            }
                        } 
                    }

                    if (!empty($alumni_study)) {
                        if (strpos($alumni_study, ",") === FALSE) {
                            array_push($a_study,$alumni_study);
                        } else {
                            $tmp_study = explode(",",$alumni_study);
                            foreach ($tmp_study as $t) {
                                if (!empty($t)) {
                                    array_push($a_study, trim($t));
                                }
                            }
                        } 
                    }
                }
            }
        }
    }

    $work_array = array_unique($a_work);
    $do_array = array_unique($a_do);
    $study_array = array_unique($a_study);

    sort($work_array);
    sort($do_array);
    sort($study_array);
?>

<link type="text/css" rel="stylesheet" href="/site/custom_scripts/styles/outcomes.css"/>
<script src='/site/javascript/addclass.js'></script>

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
            <span>filter listing</span>
            <div class="box-show">
                <a href="#" class="item"><em></em>Showing <?php print $current_filter;?></a>
                <div class="drop">
                    <ul>
                        <?php if ($filtered_id != "") {
                            print "<li><a href='?'> View All</a></li>\n";
                        }
                        ?>

                        <?php foreach ($a_program as $p) {
                                $program_id = $p[0];
                                $program_name = $p[1];
                                print "<li><a href='?s=".$program_id.":". $param_previous."'>" . $program_name . "</a></li>\n";
                              }
                        ?>                                    
                    </ul>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="text-inform">
        <div class="box-hold">
            <div class="box">
                <h2>Where they work</h2>
                <ul>
                <?php foreach ($work_array as $company) {
                        print "<li>" . $company . "</li>\n";
                      }
                ?>
                </ul>
            </div>
            <div class="box">
                <h2>What they do</h2>
                <ul>
                <?php foreach ($do_array as $job) {
                        print "<li>" . $job . "</li>\n";
                      }
                ?>
                </ul>
            </div>
            <div class="box">
                <h2>Graduate school</h2>
                <ul>
                <?php foreach ($study_array as $maj) {
                        print "<li>" . $maj . "</li>\n";
                      }
                ?>
                </ul>
            </div>
        </div>
        <div class="box-view">
            <a href="#" class="btn-view"><em>View full list</em> <span>collapse list</span></a>
        </div>
    </div>
</div>