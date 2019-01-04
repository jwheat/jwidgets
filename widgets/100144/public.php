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
                    <a href="#">Apply</a>
                    <a href="#">Request information</a>
                    <a href="#">Majors and minors</a>
                    <a href="#">Visit campus</a>
                    <a href="#">Cost and scholarships</a>
                    <a href="#">Admissions process</a>
                    <a href="#">Pay your deposit</a>
                    <a href="#">Accepted students</a>

                    <a class="g-sidenav-btn" href="#">VISIT FULL SITE</a>
                    
                </div>
                <button class="switch-program-btn"><span>Show me links to Undergraduate</span><i class="fas fa-exchange-alt"></i></button>
            </div>

            <div id="ug-sidenav" class="admissions-sidenav">
                <div class="links-panel">
                    <a href="#">Apply</a>
                    <a href="#">Request information</a>
                    <a href="#">Majors and minors</a>
                    <a href="#">Visit campus</a>
                    <a href="#">Cost and scholarships</a>
                    <a href="#">Admissions process</a>
                    <a href="#">Pay your deposit</a>
                    <a href="#">Accepted students</a>

                    <a class="g-sidenav-btn" href="#">VISIT FULL SITE</a>
                    
                </div>
                <button class="switch-program-btn"><span>Show me links to Graduate</span><i class="fas fa-exchange-alt"></i></button>
            </div>
        </div>



 <script type="text/javascript" src="<?php echo $folder; ?>mc-gn-admissions.js?v=<?php echo $version; ?>"></script>
