<?php  
  $dev = false;
  //$dev = true;
  $folder = '';
  if (!$dev) {
    $folder = '/site/custom_scripts/styles/';
  }
?>
      <link rel="stylesheet" type="text/css" href="<?php echo $folder; ?>mc-career.css?v=20" media="all" />
      <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">
      <div class="hero">
        <div class="career-wrapper">
          <div class="col-50">
            <h1>Great Jobs, Great Lives</h1>
            <hr>
            <h2>Messiah College Undergraduate Career and Outcome Data</h2>
          </div>
        </div>
        <div class="career-wrapper">
          <a class="start-here center">
            <span>Start Here</span>
            <img src="<?php echo $folder; ?>img/career/arrow-down.png" alt="start">
          </a>
        </div>
      </div>
      <div class="career-wrapper">
        <div class="tabs-field center">
          <a class="active"><img src="<?php echo $folder; ?>img/career/outcomes.png"> Career Outcomes</a> 
          <a href="http://www.messiah.edu/success"><img src="<?php echo $folder; ?>img/career/alumni.png"> Alumni Success</a>
          <a href="http://www.messiah.edu/career-prep"><img src="<?php echo $folder; ?>img/career/preparation.png"> Career Preparation</a>
        </div>
      </div>

      <div id="loading" class="center">
        Loading...
      </div>

      <div id="loaded" style="display: none">
        <div class="filters center">
          <div class="career-wrapper filter-wrapper">
            <p><span class="filter-text">Click here to filter results based on academic department</span> <span class="filter-button open"></span></p>
          </div>
        </div>
        <div class="filters-open" style="display: none">
          <div class="career-wrapper">
            <ul id="departments">
            </ul>
            <div class="center">
              <a id="filter-department" class="button white-btn" style="display: none">Filter Profiles <img src="<?php echo $folder; ?>img/career/arrow-down-bold.png"></a>
            </div>
          </div>
        </div>
        <div class="employment-rate padding-v">
          <div class="career-wrapper center">
            <h2 class="department-title"></h2>
            <div class="col-33">
              <div class="grad-rate">
                <div class="gr-content">
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="40 40 120 120" class="circliful">
                    <circle cx="100" cy="100" r="57" class="border" fill="none" stroke="#ccc" stroke-width="5" stroke-dasharray="360" transform="rotate(-90,100,100)"></circle>
                    <circle id="employment-rate-circle" class="circle" cx="100" cy="100" r="57" fill="none" stroke="#4d87a9" stroke-width="5" stroke-dasharray="0, 20000" transform="rotate(-90,100,100)"></circle>
                  </svg>
                  <h3 id="employment-rate" class="grad-rate-nr"></h3>
                  <p id="grad-rate-desc">of Messiah graduates are employed or in graduate school within 6-9 months of graduation.</p>
                </div>
              </div>
            </div>
            <div class="col-66 grad-students">
            </div>
          </div>
          <div class="career-wrapper info-button">
            <a class="info-link"><img src="<?php echo $folder; ?>img/career/info-dark.svg"></a>
          </div>
        </div>
        <div class="grad-work padding-v">
          <div class="career-wrapper center">
            <h2 class="department-title"></h2>
            <h3 class="big-h3">Where our graduates work</h3>
            <p class="big-txt grad-work-caption-all">Among the various industries employing Messiah graduates, below is a sample of places our 2018 graduates are working</p>
            <p class="big-txt grad-work-caption-dep" style="display:none"></p>
            <div class="logos">
              <ul class="slides">
                <li><img id="logo-1" src=""></li>
                <li><img id="logo-2" src=""></li>
                <li><img id="logo-3" src=""></li>
                <li><img id="logo-4" src=""></li>
                <li><img id="logo-5" src=""></li>
                <li><img id="logo-6" src=""></li>
                <li><img id="logo-7" src=""></li>
                <li><img id="logo-8" src=""></li>
                <li><img id="logo-9" src=""></li>
                <li><img id="logo-10" src=""></li>
              </ul>
            </div>
            <ul id="where-grads-work" class="columns-4">
            </ul>
          </div>
          <div class="career-wrapper info-button">
            <a class="info-link"><img src="<?php echo $folder; ?>img/career/info-light.svg"></a>
          </div>
        </div>
        <div class="marketplace padding-v">
          <div class="career-wrapper center">
            <h2 class="department-title"></h2>
            <h3 class="big-h3">Competitive in the marketplace</h3>
            <p class="big-txt">2018 graduate salary ranges</p>
            <div class="salary-ranges" id="salary-ranges">
              <div id="range-1">
                <div class="graph-bar" id="salary-range-1" >
                  <div class="graph-tip"><span class="graph-value" id="salary-range-1-value"></span> <span id="graph-legend">Less than $20k</span></div>
                </div>
              </div>
              <div id="range-2">
                <div class="graph-bar" id="salary-range-2" >
                  <div class="graph-tip"><span class="graph-value" id="salary-range-2-value"></span> <span id="graph-legend">$20k - $30k</span></div>
                </div>
              </div>
              <div id="range-3">
                <div class="graph-bar" id="salary-range-3" >
                  <div class="graph-tip"><span class="graph-value" id="salary-range-3-value"></span> <span id="graph-legend">$30k - $40</span></div>
                  </div>
              </div>
              <div id="range-4">
                <div class="graph-bar" id="salary-range-4" >
                  <div class="graph-tip"><span class="graph-value" id="salary-range-4-value"></span> <span id="graph-legend">$40k - $50k</span></div>
                  </div>
              </div>
              <div id="range-5">
                <div class="graph-bar" id="salary-range-5" >
                  <div class="graph-tip"><span class="graph-value" id="salary-range-5-value"></span> <span id="graph-legend">$50k - $60k</span></div>
                  </div>
              </div>
              <div id="range-6">
                <div class="graph-bar" id="salary-range-6" >
                  <div class="graph-tip"><span class="graph-value" id="salary-range-6-value"></span> <span id="graph-legend">More than $60k</span></div>
                  </div>
              </div>
            </div>
            <ul class="salary-ranges">
              <li id="range-1">Less than $20k</li>
              <li id="range-2">$20k - $29,999k</li>
              <li id="range-3">$30k - $39,999k</li>
              <li id="range-4">$40k - $49,999k</li>
              <li id="range-5">$50k - $59,999k</li>
              <li id="range-6">More than $60k</li>
            </ul>
          </div>
          <div class="career-wrapper info-button">
            <a class="info-link"><img src="<?php echo $folder; ?>img/career/info-dark.svg"></a>
          </div>
        </div>
        <div class="alumni padding-v center">
          <h2 class="department-title"></h2>
          <h3 class="big-h3">Alumni Success</h3>
          <div class="col-33 alumni-img" id="alumni-1-image">
            <div class="alumni-info">
              <p class="name big-txt" id="alumni-1-name"></p>
              <p class="sub-name" id="alumni-1-title"></p>
            </div>
            <p class="read-btn"><a class="read-story" data-index="1">Read story</a></p>
          </div>
          <div class="col-33 alumni-img" id="alumni-2-image">
            <div class="alumni-info">
              <p class="name big-txt" id="alumni-2-name"></p>
              <p class="sub-name" id="alumni-2-title"></p>
            </div>
            <p class="read-btn"><a class="read-story" data-index="2">Read story</a></p>
          </div>
          <div class="col-33 alumni-img" id="alumni-3-image">
            <div class="alumni-info">
              <p class="name big-txt" id="alumni-3-name"></p>
              <p class="sub-name" id="alumni-3-title"></p>
            </div>
            <p class="read-btn"><a class="read-story" data-index="3">Read story</a></p>
          </div>
        </div>
        <div class="grad-industries padding-v">
          <div class="career-wrapper center">
            <h2 class="department-title"></h2>
            <h3 class="big-h3">Industries represented by our 2018 graduates</h3>
          </div>

          <div class="career-wrapper">
            <div class="col-50">
              <div class="industries-graph">
                <div class="graph-bg">
                  <div class="graph-line"></div>
                  <div class="graph-line"></div>
                  <div class="graph-line"></div>
                  <div class="graph-line"></div>
                  <div class="graph-line"></div>
                </div>
                <div class="graph-bars">
                  <div class="graph-bar bar-1">
                  <div class="graph-tip"><span class="graph-value" id="graph-value-1"></span> <span id="graph-legend">Science / Research</span></div>
                  </div>
                  <div class="graph-bar bar-2">
                  <div class="graph-tip"><span class="graph-value" id="graph-value-2"></span> <span id="graph-legend">Religious / Ministry Organization</span></div>
                  </div>
                  <div class="graph-bar bar-3">
                  <div class="graph-tip"><span class="graph-value" id="graph-value-3"></span> <span id="graph-legend">Nursing / Health care</span></div>
                  </div>
                  <div class="graph-bar bar-4">
                  <div class="graph-tip"><span class="graph-value" id="graph-value-4"></span> <span id="graph-legend">Non Profit</span></div>
                  </div>
                  <div class="graph-bar bar-5">
                  <div class="graph-tip"><span class="graph-value" id="graph-value-5"></span> <span id="graph-legend">Human Services / Social Services</span></div>
                  </div>
                  <div class="graph-bar bar-6">
                  <div class="graph-tip"><span class="graph-value" id="graph-value-6"></span> <span id="graph-legend">Government</span></div>
                  </div>
                  <div class="graph-bar bar-7">
                  <div class="graph-tip"><span class="graph-value" id="graph-value-7"></span> <span id="graph-legend">Engineering</span></div>
                  </div>
                  <div class="graph-bar bar-8">
                  <div class="graph-tip"><span class="graph-value" id="graph-value-8"></span> <span id="graph-legend">Education</span></div>
                  </div>
                  <div class="graph-bar bar-9">
                  <div class="graph-tip"><span class="graph-value" id="graph-value-9"></span> <span id="graph-legend">Computer Science / IT</span></div>
                  </div>
                  <div class="graph-bar bar-10">
                  <div class="graph-tip"><span class="graph-value" id="graph-value-10"></span> <span id="graph-legend">Communications / Media</span></div>
                  </div>
                  <div class="graph-bar bar-11">
                  <div class="graph-tip"><span class="graph-value" id="graph-value-11"></span> <span id="graph-legend">Business / Accounting / Financial Services</span></div>
                  </div>
                  <div class="graph-bar bar-12">
                  <div class="graph-tip"><span class="graph-value" id="graph-value-12"></span> <span id="graph-legend">Athletics / Recreation / Sports</span></div>
                  </div>
                  <div class="graph-bar bar-13">
                  <div class="graph-tip"><span class="graph-value" id="graph-value-13"></span> <span id="graph-legend">Arts / Music / Entertainment</span></div>
                  </div>
                </div>
              </div>
              <div class="industries-graph-legend">Hover over bar to see percentage</div>
            </div>

            <div class="col-50">
              <ul>
                <li class="clr-13">Arts / Music / Entertainment</li>
                <li class="clr-12">Athletics / Recreation / Sports</li>
                <li class="clr-11">Business / Accounting / Financial Services</li>
                <li class="clr-10">Communications / Media</li>
                <li class="clr-9">Computer Science / IT</li>
                <li class="clr-8">Education</li>
                <li class="clr-7">Engineering</li>
                <li class="clr-6">Government</li>
                <li class="clr-5">Human Services / Social Services</li>
                <li class="clr-4">Non Profit</li>
                <li class="clr-3">Nursing / Health care</li>
                <li class="clr-2">Religious / Ministry Organization</li>
                <li class="clr-1">Science / Research</li>
              </ul>
            </div>
            
          </div>
          <div class="career-wrapper info-button">
            <a class="info-link"><img src="<?php echo $folder; ?>img/career/info-dark.svg"></a>
          </div>
        </div>
        <div class="grad-info padding-v">
          <div class="career-wrapper center">
            <h2 class="department-title"></h2>
            <h3 class="big-h3">Graduate and professional school information</h3>
            <p class="big-txt">17% of the survey respondents from the Class of 2018 reported graduate or professional school as their primary activity following graduation. The numbers below represent the graduate level fields of study pursued by these graduates.</p>
          </div>

          <div class="career-wrapper">
            <table>
              <tbody>
                <tr>
                  <td rowspan="2" class="double-row science"><span id="school-information-1" class="rate"></span>Science</td>
                  <td class="medicine"><span id="school-information-2" class="rate"></span>Medicine</td>
                  <td class="humanities"><span id="school-information-3" class="rate"></span>Humanities</td>
                  <td class="arts"><span id="school-information-4" class="rate"></span>Arts & Music</td>
                </tr>
                <tr>
                  <td class="law"><span id="school-information-5" class="rate"></span>Law</td>
                  <td class="education"><span id="school-information-6" class="rate"></span>Education, Social Sciences, Government</td>
                  <td class="business"><span id="school-information-7" class="rate"></span>Business, Math, Engineering, IT</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="career-wrapper info-button">
            <a class="info-link"><img src="<?php echo $folder; ?>img/career/info-dark.svg"></a>
          </div>
        </div>
        <div class="grad-info-alt padding-v" style="display: none">
          <div class="career-wrapper center">
            <h2 class="department-title"></h2>
            <h3 class="big-h3">Graduate and professional school information</h3>
          </div>
          <div class="career-wrapper">
            <div class="col-33 center-on-mobile">
              <img src="<?php echo $folder; ?>img/career/grad-outcomes-icon.png">
            </div>
            <div class="col-66">
              <p class="big-txt"><span id="grad-school-rate"></span> of the Class of 2018 survey respondents reported graduate or professional school as their primary activity following graduation</p>
              <ul id="grad-schools-attended">
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div id="peek-overlay" class="peek-overlay">
        <div class="peek">
          <div id="peek-close" class="peek-close">
            <img src="<?php echo $folder; ?>img/career/peek-close.png">
          </div>
          <div id="peek-story">
            <div class="peek-img">
              <img id="peek-large-image" src="">
            </div>
            <div class="peek-content">
              <h2 id="peek-title" class="peek-title"></h2>
              <h3 class="peek-subtitle"><span id="peek-category"></span></h3>
              <p id="peek-overview"></p>
            </div>
          </div>
          <div id="peek-info">
            <h1>Our Survey</h1>
            <h2>Purpose</h2>
            <p>The purpose of the annual first destination survey is to capture information on the employment and graduate school status of Messiah College alumni within six to nine months of graduation. For the purpose of this survey, the class of 2018 is defined as anyone who graduated in December 2017, May 2018 or August 2018.</p>
            <h2>Data Collection Methods</h2>
            <p>Statistics provided are based on information received through a variety of methods, including an electronic survey that was distributed via email; a survey completed on-campus prior to graduation; contact with department faculty; follow-up surveys; and updated professional profiles provided on social media sites like LinkedIn.</p>
            <p>The collection process and reporting summary of results adheres to the professional guidelines set forth by NACE (the National Association for Colleges and Employers).</p>
            <h2>Response Rate</h2>
            <p>Through this extensive process, we obtained a 74% knowledge rate of the Class of 2018 Knowledge rate is defined by NACE as the percent of graduates for which an institution has reasonable and verifiable information concerning the graduates post-graduation career activities.</p>
          </div>
        </div>
      </div>
    </div>

    <script id="department-template" type="text/x-jQuery-tmpl">
      <li class="${selected}"><span class="filter-icon" style="background-image: url('<?php echo $folder; ?>img/career/fi-${entry_id}.png');"></span><a class="filter-data" data-filter="${entry_id}">${entry_title}</a></li>
    </script>

    <script id="grad-students-template" type="text/x-jQuery-tmpl">
      <span id="grad-students-${index}" class="${gender}"></span>
    </script>

    <script id="where-grads-work-template" type="text/x-jQuery-tmpl">
      <li>${name}</li>
    </script>

    <script id="grad-schools-attended-template" type="text/x-jQuery-tmpl">
      <li>${name}</li>
    </script>

    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>jquery.fittext.js?v=2"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>jquery.flexslider.js?v=2"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>mc-timer.js?v=2"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>mc-career.js?v=25"></script>
    