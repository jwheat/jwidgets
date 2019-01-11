<?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '3';
    $folder = '/site/custom_scripts/styles/';
  }
?>

<link rel="stylesheet" href="<?php echo $folder; ?>mc-gn-admissions.css?v=<?php echo $version; ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


<!-- ====== PAGE CONTENT ====== -->
        <div class="admissions-container clearfix">
            <div class="undergraduate-container">
                <button id="ug-admissions-btn" class="admissions-btn">Undergraduate Admissions</button>
            </div>
            <div class="graduate-container">
                <button id="g-admissions-btn" class="admissions-btn">Graduate Admissions</button>
            </div>

            <div id="g-sidenav" class="admissions-sidenav">
                <div class="links-panel">
                    <a href="http://www.messiah.edu/info/21329/apply">Apply</a>
                    <a href="http://www.messiah.edu/forms/form/223/en/1/graduate_studies_request_information">Request information</a>
                    <a href="http://www.messiah.edu/info/20436/degrees">Graduate degrees and certificates</a>
                    <a href="http://www.messiah.edu/info/21207/tuition_and_fees">Cost and aid</a>
                    <a href="http://www.messiah.edu/info/21324/admissions_process">Admissions process</a>

                    <a class="g-sidenav-btn" href="http://www.messiah.edu/info/21084/graduate_admissions?mm3">VISIT FULL SITE</a>

                </div>
                <button class="switch-program-btn"><span>Show me links to Undergraduate</span><i class="fas fa-exchange-alt"></i></button>
            </div>

            <div id="ug-sidenav" class="admissions-sidenav">
                <div class="links-panel">
                    <a href="http://www.messiah.edu/applynow">Apply</a>
                    <a href="http://www.messiah.edu/request-info">Request information</a>
                    <a href="http://www.messiah.edu/majors-minors-programs">Majors and minors</a>
                    <a href="http://www.messiah.edu/info/21343/visit_campus">Visit campus</a>
                    <a href="http://www.messiah.edu/info/21344/tuition_and_aid">Cost and scholarships</a>
                    <a href="http://www.messiah.edu/info/21083/undergraduate_admissions">Admissions process</a>
                    <a href="https://www.messiah.edu/deposit">Pay your deposit</a>
                    <a href="https://www.messiah.edu/info/21342/accepted_students">Accepted students</a>

                    <a class="g-sidenav-btn" href="http://www.messiah.edu/info/21083/undergraduate_admissions?mm3">VISIT FULL SITE</a>

                </div>
                <button class="switch-program-btn"><span>Show me links to Graduate</span><i class="fas fa-exchange-alt"></i></button>
            </div>
        </div>



 <script type="text/javascript" src="<?php echo $folder; ?>mc-gn-admissions.js?v=<?php echo $version; ?>"></script>
 <script type="text/javascript" src="<?php echo $folder; ?>js.cookie.js?v=<?php echo $version; ?>"></script>
