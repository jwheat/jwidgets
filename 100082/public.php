<?php  
  $dev = false;
  //$dev = true;
  $folder = '';
  if (!$dev) {
    $folder = '/site/custom_scripts/styles/';
  }
?>
    <link rel="stylesheet" type="text/css" href="<?php echo $folder; ?>mc-alumni.css?v=1" media="all" />
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">
    <div class="mm-page">
      <div class="hero">
        <div class="alumni-wrapper">
          <div class="col-50">
            <h1>Alumni Success</h1>
            <hr>
            <h2>Making a living and a life. </h2>
          </div>
        </div>
        <div class="alumni-wrapper">
          <a class="start-here center">
            <span>Start Here</span>
            <img src="<?php echo $folder; ?>img/alumni/arrow-down.png" alt="start">
          </a>
        </div>
      </div>      
      
      <div class="alumni-wrapper">
        <div class="tabs-field center">
          <a href="http://www.messiah.edu/career-outcomes"><img src="<?php echo $folder; ?>img/alumni/outcomes.png"> Career Outcomes</a>
          <a class="active"><img src="<?php echo $folder; ?>img/alumni/alumni.png"> Alumni Success</a>
          <a href="http://www.messiah.edu/career-prep"><img src="<?php echo $folder; ?>img/alumni/preparation.png"> Career Preparation</a>
        </div>
      </div>

      <div>
        <div class="filters center" style="display:none">
          <div class="alumni-wrapper filter-wrapper">
            <p><span class="filter-text">Click here to filter results based on academic department</span> <span class="filter-button open"></span></p>
          </div>
        </div>
        <div class="filters-open" style="display: none">
          <div class="alumni-wrapper">
            <ul id="departments">
              <li class="selected"><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-389.png');"></span><a class="filter-data" data-filter="389">Featured</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-83.png');"></span><a class="filter-data" data-filter="83">Visual Arts</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-84.png');"></span><a class="filter-data" data-filter="84">Music</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-85.png');"></span><a class="filter-data" data-filter="85">Theatre and Dance</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-87.png');"></span><a class="filter-data" data-filter="87">Education</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-88.png');"></span><a class="filter-data" data-filter="88">Human Development & Family Science</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-89.png');"></span><a class="filter-data" data-filter="89">Psychology</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-90.png');"></span><a class="filter-data" data-filter="90">Social Work</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-91.png');"></span><a class="filter-data" data-filter="91">Sociology, Anthropology and Criminal Justice</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-92.png');"></span><a class="filter-data" data-filter="92">Management and Business</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-94.png');"></span><a class="filter-data" data-filter="94">Biological Sciences</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-95.png');"></span><a class="filter-data" data-filter="95">Chemistry and Biochemistry</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-96.png');"></span><a class="filter-data" data-filter="96">Engineering</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-97.png');"></span><a class="filter-data" data-filter="97">Health and Human Performance</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-98.png');"></span><a class="filter-data" data-filter="98">Information and Mathematical Science</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-99.png');"></span><a class="filter-data" data-filter="99">Nursing</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-100.png');"></span><a class="filter-data" data-filter="100">Nutrition and Dietetics</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-101.png');"></span><a class="filter-data" data-filter="101">Pre-health Professions Advising</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-157.png');"></span><a class="filter-data" data-filter="157">Computer and Information Science</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-194.png');"></span><a class="filter-data" data-filter="194">Mathematics, Physics, and Statistics</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-103.png');"></span><a class="filter-data" data-filter="103">Biblical and Religious Studies</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-104.png');"></span><a class="filter-data" data-filter="104">Communication</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-105.png');"></span><a class="filter-data" data-filter="105">English</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-106.png');"></span><a class="filter-data" data-filter="106">History</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-107.png');"></span><a class="filter-data" data-filter="107">Modern Languages</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-108.png');"></span><a class="filter-data" data-filter="108">Philosophy</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-109.png');"></span><a class="filter-data" data-filter="109">Politics and International Relations</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-110.png');"></span><a class="filter-data" data-filter="110">Pre-professional Programs</a></li>
              <li><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/alumni/fi-312.png');"></span><a class="filter-data" data-filter="312">Peace and conflict studies</a></li>
            </ul>
            <div class="center">
              <a id="filter-department" class="button white-btn" style="display: none">Filter Profiles <img src="<?php echo $folder; ?>img/alumni/arrow-down-bold.png"></a>
            </div>
          </div>
        </div>
        <div id="loading" class="alumni-profiles padding-v">
          <div class="alumni-wrapper">
            <h3>Loading...</h3>
          </div>
        </div>
        <div id="loaded" class="alumni-profiles padding-v" style="visibility:hidden">
          <div class="alumni-wrapper">
            <h3>Check-out what our alumni are up to</h3>
            <div id="alumni-items"></div>
          </div>
        </div>
      </div>

      <div id="peek-overlay" class="peek-overlay">
        <div class="peek">
          <div id="peek-close" class="peek-close">
            <img src="<?php echo $folder; ?>img/alumni/peek-close.png">
          </div>
          <div class="peek-img">
            <img id="peek-large-image" src="">
          </div>
          <div class="peek-content">
            <h2 class="peek-title"><span id="peek-title"></span>'<span id="peek-year"></span></h2>
            <h3 class="peek-subtitle"><span id="peek-category"></span></h3>
            <p id="peek-overview"></p>
          </div>
        </div>
      </div>
    </div>

    <script id="alumni-item-template" type="text/x-jQuery-tmpl">
      <div class="alumni-item">
        <div class="col-25 alumni-img" style="background-image: url('http://www.messiah.edu/images/${image}');">
        </div>
        <div class="col-75 alumni-box">
          <h3 class="alumni-name">${entry_title} '${class_year_two_digits_numbers_only}</h3>
          <p class="alumni-occupation">${subheading}</p>
          <p class="alumni-desc">${teaser_between_25_and_50_words}</p>
          <a class="button read-more" data-entry-id="${entry_id}">Read More</a>
        </div>
      </div>
    </script>

    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>mc-alumni.js?v=2"></script>