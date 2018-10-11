            <?php
              $dev = false;
              if ($dev) {
            ?>   
          <link type="text/css" rel="stylesheet" href="about.css?v=5"/>
            <?php
                $param_academic_programs_undergraduate = "150+";
                $param_academic_programs_graduate = "27";
                $param_academic_programs_grad_rate = "76%";
                $param_academic_programs_national_average = "52%";
                $param_student_body_students = "3,305";
                $param_student_body_undergraduate_female = "61%";
                $param_student_body_undergraduate_male = "39%";
                $param_student_body_graduate_female = "73%";
                $param_student_body_graduate_male = "27%";
                $param_student_body_undergraduate_students = "2,788";
                $param_student_body_undergraduate_states = "38";
                $param_student_body_undergraduate_countries = "29";
                $param_student_body_undergraduate_percent = "4,6%";
                $param_student_body_graduate_students = "517";
                $param_student_body_graduate_states = "33";
                $param_student_body_graduate_percent = "12,8%";
                $param_student_body_campus = "2,317";
                $param_tuition_and_aid_percent = "100%";
                $param_tuition_and_aid_rank = "#3";
                $param_tuition_and_aid_package = "$24,546";
                $param_study_abroad_percent = "84%";
                $param_study_abroad_students = "600";
                $param_study_abroad_countries = "40";
                $param_careers_and_internships_sites = "89";
                $param_careers_and_internships_available = "403";
                $param_careers_and_internships_percent = "97%";
                $param_careers_and_internships_year = "2015";
                $param_athletics_division_champions = "26";
                $param_athletics_conference_champions = "129";
                $param_athletics_division_all_americans = "275";
                $param_athletics_division_players = "16";
                $param_athletics_division_sports = "23";
              } else {
            ?>
          <link type="text/css" rel="stylesheet" href="//www.messiah.edu/site/custom_scripts/styles/about.css?v=6"/>
            <?php
                $param_academic_programs_undergraduate = "";
                $param_academic_programs_graduate = "";
                $param_academic_programs_grad_rate = "";
                $param_academic_programs_national_average = "";
                $param_student_body_students = "";
                $param_student_body_undergraduate_female = "";
                $param_student_body_undergraduate_male = "";
                $param_student_body_graduate_female = "";
                $param_student_body_graduate_male = "";
                $param_student_body_undergraduate_students = "";
                $param_student_body_undergraduate_states = "";
                $param_student_body_undergraduate_countries = "";
                $param_student_body_undergraduate_percent = "";
                $param_student_body_graduate_students = "";
                $param_student_body_graduate_states = "";
                $param_student_body_graduate_percent = "";
                $param_student_body_campus = "";
                $param_tuition_and_aid_percent = "";
                $param_tuition_and_aid_rank = "";
                $param_tuition_and_aid_package = "";
                $param_study_abroad_percent = "";
                $param_study_abroad_students = "";
                $param_study_abroad_countries = "";
                $param_careers_and_internships_sites = "";
                $param_careers_and_internships_available = "";
                $param_careers_and_internships_percent = "";
                $param_careers_and_internships_year = "";
                $param_athletics_division_champions = "";
                $param_athletics_conference_champions = "";
                $param_athletics_division_all_americans = "";
                $param_athletics_division_players = "";
                $param_athletics_division_sports = "";
              }

              //academic programs
              if ($param_academic_programs_undergraduate == '%' . 'PARAM_ACADEMIC_PROGRAMS_UNDERGRADUATE%' || $param_academic_programs_undergraduate == '') {
                  $param_academic_programs_undergraduate = '%PARAM_ACADEMIC_PROGRAMS_UNDERGRADUATE%';
              }
              if ($param_academic_programs_graduate == '%' . 'PARAM_ACADEMIC_PROGRAMS_GRADUATE%' || $param_academic_programs_graduate == '') {
                  $param_academic_programs_graduate = '%PARAM_ACADEMIC_PROGRAMS_GRADUATE%';
              }
              if ($param_academic_programs_grad_rate == '%' . 'PARAM_ACADEMIC_PROGRAMS_GRAD_RATE%' || $param_academic_programs_grad_rate == '') {
                  $param_academic_programs_grad_rate = '%PARAM_ACADEMIC_PROGRAMS_GRAD_RATE%';
              }
              if ($param_academic_programs_national_average == '%' . 'PARAM_ACADEMIC_PROGRAMS_NATIONAL_AVERAGE%' || $param_academic_programs_national_average == '') {
                  $param_academic_programs_national_average = '%PARAM_ACADEMIC_PROGRAMS_NATIONAL_AVERAGE%';
              }
              
              //student body
              if ($param_student_body_students == '%' . 'PARAM_STUDENT_BODY_STUDENTS%' || $param_student_body_students == '') {
                  $param_student_body_students = '%PARAM_STUDENT_BODY_STUDENTS%';
              }
              if ($param_student_body_undergraduate_female == '%' . 'PARAM_STUDENT_BODY_UNDERGRADUATE_FEMALE%' || $param_student_body_undergraduate_female == '') {
                  $param_student_body_undergraduate_female = '%PARAM_STUDENT_BODY_UNDERGRADUATE_FEMALE%';
              }
              if ($param_student_body_undergraduate_male == '%' . 'PARAM_STUDENT_BODY_UNDERGRADUATE_MALE%' || $param_student_body_undergraduate_male == '') {
                  $param_student_body_undergraduate_male = '%PARAM_STUDENT_BODY_UNDERGRADUATE_MALE%';
              }
              if ($param_student_body_graduate_female == '%' . 'PARAM_STUDENT_BODY_GRADUATE_FEMALE%' || $param_student_body_graduate_female == '') {
                  $param_student_body_graduate_female = '%PARAM_STUDENT_BODY_GRADUATE_FEMALE%';
              }
              if ($param_student_body_graduate_male == '%' . 'PARAM_STUDENT_BODY_GRADUATE_MALE%' || $param_student_body_graduate_male == '') {
                  $param_student_body_graduate_male = '%PARAM_STUDENT_BODY_GRADUATE_MALE%';
              }
              if ($param_student_body_undergraduate_students == '%' . 'PARAM_STUDENT_BODY_UNDERGRADUATE_STUDENTS%' || $param_student_body_undergraduate_students == '') {
                  $param_student_body_undergraduate_students = '%PARAM_STUDENT_BODY_UNDERGRADUATE_STUDENTS%';
              }
              if ($param_student_body_undergraduate_states == '%' . 'PARAM_STUDENT_BODY_UNDERGRADUATE_STATES%' || $param_student_body_undergraduate_states == '') {
                  $param_student_body_undergraduate_states = '%PARAM_STUDENT_BODY_UNDERGRADUATE_STATES%';
              }
              if ($param_student_body_undergraduate_countries == '%' . 'PARAM_STUDENT_BODY_UNDERGRADUATE_COUNTRIES%' || $param_student_body_undergraduate_countries == '') {
                  $param_student_body_undergraduate_countries = '%PARAM_STUDENT_BODY_UNDERGRADUATE_COUNTRIES%';
              }
              if ($param_student_body_undergraduate_percent == '%' . 'PARAM_STUDENT_BODY_UNDERGRADUATE_PERCENT%' || $param_student_body_undergraduate_percent == '') {
                  $param_student_body_undergraduate_percent = '%PARAM_STUDENT_BODY_UNDERGRADUATE_PERCENT%';
              }
              if ($param_student_body_graduate_students == '%' . 'PARAM_STUDENT_BODY_GRADUATE_STUDENTS%' || $param_student_body_graduate_students == '') {
                  $param_student_body_graduate_students = '%PARAM_STUDENT_BODY_GRADUATE_STUDENTS%';
              }
              if ($param_student_body_graduate_states == '%' . 'PARAM_STUDENT_BODY_GRADUATE_STATES%' || $param_student_body_graduate_states == '') {
                  $param_student_body_graduate_states = '%PARAM_STUDENT_BODY_GRADUATE_STATES%';
              }
              if ($param_student_body_graduate_percent == '%' . 'PARAM_STUDENT_BODY_GRADUATE_PERCENT%' || $param_student_body_graduate_percent == '') {
                  $param_student_body_graduate_percent = '%PARAM_STUDENT_BODY_GRADUATE_PERCENT%';
              }
              if ($param_student_body_campus == '%' . 'PARAM_STUDENT_BODY_CAMPUS%' || $param_student_body_campus == '') {
                  $param_student_body_campus = '%PARAM_STUDENT_BODY_CAMPUS%';
              }
              
              //tuition and aid
              if ($param_tuition_and_aid_percent == '%' . 'PARAM_TUITION_AND_AID_PERCENT%' || $param_tuition_and_aid_percent == '') {
                  $param_tuition_and_aid_percent = '%PARAM_TUITION_AND_AID_PERCENT%';
              }
              if ($param_tuition_and_aid_rank == '%' . 'PARAM_TUITION_AND_AID_RANK%' || $param_tuition_and_aid_rank == '') {
                  $param_tuition_and_aid_rank = '%PARAM_TUITION_AND_AID_RANK%';
              }
              if ($param_tuition_and_aid_package == '%' . 'PARAM_TUITION_AND_AID_PACKAGE%' || $param_tuition_and_aid_package == '') {
                  $param_tuition_and_aid_package = '%PARAM_TUITION_AND_AID_PACKAGE%';
              }

              //study abroad
              if ($param_study_abroad_percent == '%' . 'PARAM_STUDY_ABROAD_PERCENT%' || $param_study_abroad_percent == '') {
                  $param_study_abroad_percent = '%PARAM_STUDY_ABROAD_PERCENT%';
              }
              if ($param_study_abroad_students == '%' . 'PARAM_STUDY_ABROAD_STUDENTS%' || $param_study_abroad_students == '') {
                  $param_study_abroad_students = '%PARAM_STUDY_ABROAD_STUDENTS%';
              }
              if ($param_study_abroad_countries == '%' . 'PARAM_STUDY_ABROAD_COUNTRIES%' || $param_study_abroad_countries == '') {
                  $param_study_abroad_countries = '%PARAM_STUDY_ABROAD_COUNTRIES%';
              }

              //careers and internships
              if ($param_careers_and_internships_sites == '%' . 'PARAM_CAREERS_AND_INTERNSHIPS_SITES%' || $param_careers_and_internships_sites == '') {
                  $param_careers_and_internships_sites = '%PARAM_CAREERS_AND_INTERNSHIPS_SITES%';
              }
              if ($param_careers_and_internships_available == '%' . 'PARAM_CAREERS_AND_INTERNSHIPS_AVAILABLE%' || $param_careers_and_internships_available == '') {
                  $param_careers_and_internships_available = '%PARAM_CAREERS_AND_INTERNSHIPS_AVAILABLE%';
              }
              if ($param_careers_and_internships_percent == '%' . 'PARAM_CAREERS_AND_INTERNSHIPS_PERCENT%' || $param_careers_and_internships_percent == '') {
                  $param_careers_and_internships_percent = '%PARAM_CAREERS_AND_INTERNSHIPS_PERCENT%';
              }
              if ($param_careers_and_internships_year == '%' . 'PARAM_CAREERS_AND_INTERNSHIPS_YEAR%' || $param_careers_and_internships_year == '') {
                  $param_careers_and_internships_year = '%PARAM_CAREERS_AND_INTERNSHIPS_YEAR%';
              }

              //athletics
              if ($param_athletics_division_champions == '%' . 'PARAM_ATHLETICS_DIVISION_CHAMPIONS%' || $param_athletics_division_champions == '') {
                  $param_athletics_division_champions = '%PARAM_ATHLETICS_DIVISION_CHAMPIONS%';
              }
              if ($param_athletics_conference_champions == '%' . 'PARAM_ATHLETICS_CONFERENCE_CHAMPIONS%' || $param_athletics_conference_champions == '') {
                  $param_athletics_conference_champions = '%PARAM_ATHLETICS_CONFERENCE_CHAMPIONS%';
              }
              if ($param_athletics_division_all_americans == '%' . 'PARAM_ATHLETICS_DIVISION_ALL_AMERICANS%' || $param_athletics_division_all_americans == '') {
                  $param_athletics_division_all_americans = '%PARAM_ATHLETICS_DIVISION_ALL_AMERICANS%';
              }
              if ($param_athletics_division_players == '%' . 'PARAM_ATHLETICS_DIVISION_PLAYERS%' || $param_athletics_division_players == '') {
                  $param_athletics_division_players = '%PARAM_ATHLETICS_DIVISION_PLAYERS%';
              }
              if ($param_athletics_division_sports == '%' . 'PARAM_ATHLETICS_DIVISION_SPORTS%' || $param_athletics_division_sports == '') {
                  $param_athletics_division_sports = '%PARAM_ATHLETICS_DIVISION_SPORTS%';
              }
            ?>
      
                    <div id="messiah-glance">

                        <h1 class="banner-heading title">Messiah at a Glance</h1>

                        <table>
                            <tr>
                                <td class="border-r center-mobile">
                                    <span class="glance-title">founded in</span>
                                    <span class="big-txt">1909</span>
                                </td>
                                <td class="border-r messiah-location center-mobile" style="padding-left: 105px; background: url(http://www.messiah.edu/site/custom_scripts/styles/img/glance/location-marker.png) no-repeat 20px 20px;">
                                    <span class="glance-title">located in</span>
                                    <span>Mechanicsburg,<br>Pennsylvania</span>
                                </td>
                                <td class="center">
                                    <span class="glance-title">college motto</span>
                                    <span>Christ<br>Preeminent</span>
                                </td>
                            </tr>
                        </table>

                        <hr>

                        <table>
                            <tr>
                                <td class="border-r half right center-mobile">
                                    <span class="glance-title">school colors</span>
                                    <img src="http://www.messiah.edu/site/custom_scripts/styles/img/glance/school-colors.png" alt="scholl colors" />
                                </td>
                                <td class="falcon-mascot" style="padding-left: 205px; background: url(http://www.messiah.edu/site/custom_scripts/styles/img/glance/falcon-athletics-logo.png) no-repeat 20px 20px;">
                                    <span class="glance-title">athletics mascot</span>
                                    <span>Falcons</span>
                                </td>
                            </tr>
                        </table>

                        <hr class="black hide-on-mobile">

                        <table class="hide-on-mobile">
                            <tr>
                                <td class="half">
                                    <span class="glance-small-title">Mission and Identity</span>
                                    <span class="txt">Messiah College is a Christian college of the liberal and applied arts and sciences. Our mission is to educate men and women toward maturity of intellect, character and Christian faith in preparation for lives of service, leadership and reconciliation in church and society.</span>
                                    <a class="button" href="http://www.messiah.edu/info/20001/mission_and_identity">Read more</a>
                                </td>
                                <td>
                                    <span class="glance-small-title">Our History</span>
                                    <span class="txt">Messiah College was founded in 1909 by the Brethren in Christ Church. Now, the College's faith base is broadly evangelical and includes students and employees from a variety of denominations and Christian faith traditions.</span>
                                    <a class="button" href="http://www.messiah.edu/info/20013/our_history">Read more</a>
                                </td>
                            </tr>
                        </table>

                        <h2 class="strike"><span>Academic Programs</span></h2>

                        <table>
                            <tr>
                                <td class="border-r center">
                                    <span class="big-txt"><?php print $param_academic_programs_undergraduate;?></span>
                                    <span class="txt-s2" style="white-space: nowrap;">Undergraduate <br>programs</span>
                                </td>
                                <td class="border-r center">
                                    <span class="big-txt"><?php print $param_academic_programs_graduate;?></span>
                                    <span class="txt-s2">Graduate degrees and certificate programs</span>
                                </td>
                                <td class="center college-honors" style="padding-left: 115px; padding-top: 80px; background: url(http://www.messiah.edu/site/custom_scripts/styles/img/glance/honors-medal.png) no-repeat 20px 0px;">
                                    <span class="big-txt"> </span>
                                    <span class="txt-s2" style="white-space: nowrap;">Rigorous<br>College Honors<br>Program</span>
                                </td>
                            </tr>
                        </table>

                        <hr>

                        <table>
                            <tr>
                                <td class="border-r summer-courses" style="background: url(http://www.messiah.edu/site/custom_scripts/styles/img/glance/cursor.png) no-repeat 20px 55px;">
                                    <span>Summer</span>
                                    <span class="big-txt" style="padding-left: 65px; line-height: 26px; margin-bottom: 10px;">online</span>
                                    <span class="right">courses</span>
                                </td>
                                <td class="border-r center-mobile degree-option">
                                    <span class="big-txt">3-year</span>
                                    <span class="txt-s2" style="padding-left: 90px; white-space: nowrap;">degree options</span>
                                </td>
                                <td class="center">
                                    <span class="big-txt"><?php print $param_academic_programs_grad_rate;?></span>
                                    <span>4-year grad rate</span>
                                    <span class="txt-s3">(vs. <?php print $param_academic_programs_national_average;?> national average)</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="center hide-on-mobile">
                                    <a class="button" href="http://www.messiah.edu/info/20005/academics">Learn more</a>
                                </td>
                            </tr>
                        </table>

                        <h2 class="strike"><span>Student Body</span></h2>

                        <table>
                            <tr>
                                <td class="half center hide-on-mobile">
                                    <img src="http://www.messiah.edu/site/custom_scripts/styles/img/glance/students-icon.png" alt="students icon" />
                                </td>
                                <td class="center-mobile">
                                    <span class="big-txt"><?php print $param_student_body_students;?></span>
                                    <span class="txt-s2">Undergraduate and graduate students</span>
                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 10px;">
                            <tr>
                                <td class="border-t border-b center">
                                    <span class="txt-s3">UNDERGRADUATE</span>
                                    <span><?php print $param_student_body_undergraduate_female;?> female | <span class="light-blue" style="display: inline-block;"><?php print $param_student_body_undergraduate_male;?> male</span></span>
                                </td>
                                <td class="hide-on-mobile" style="padding-top: 0; padding-bottom: 0;">
                                    <img src="http://www.messiah.edu/site/custom_scripts/styles/img/glance/male-female-icon.png" alt="male female icon"/>
                                </td>
                                <td class="border-t border-b center">
                                    <span class="txt-s3">GRADUATE</span>
                                    <span><?php print $param_student_body_graduate_female;?> female | <span class="subspan light-blue"><?php print $param_student_body_graduate_male;?> male</span></span>
                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 10px;">
                            <tr>
                                <td class="half right border-r undergrad-country" style="background: url(http://www.messiah.edu/site/custom_scripts/styles/img/glance/undergrad-icon.png) no-repeat 40px 20px;">
                                    <div class="border-b" style="padding-bottom: 10px;">
                                        <span class="big-txt" style="margin-bottom: 20px; padding: 0 40px;"><?php print $param_student_body_undergraduate_students;?></span>
                                        <span class="center txt-s2">undergraduate students from <span class="subspan light-blue"><?php print $param_student_body_undergraduate_states;?> states</span> and <span class="subspan light-blue"><?php print $param_student_body_undergraduate_countries;?> countries</span></span>
                                        <div class="center" style="padding-top: 6px;">
                                            <span class="banner-left"></span>
                                            <span class="txt-s3 banner center"><?php print $param_student_body_undergraduate_percent;?> international<br>students</span>
                                            <span class="banner-right"></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="grad-students-cultural">
                                    <div class="border-b grad-states" style="padding-bottom: 20px; padding-left: 125px; background: url(http://www.messiah.edu/site/custom_scripts/styles/img/glance/grad-icon.png) no-repeat 20px 20px;">
                                        <span class="big-txt"><?php print $param_student_body_graduate_students;?><span class="subspan txt-s2">graduate</span></span>
                                        <span class="txt-s2">students from <span class="subspan light-blue"><?php print $param_student_body_graduate_states;?> states</span></span>
                                    </div>
                                    <div class="border-b center" style="padding: 10px 0;">
                                        <span class="banner-left"></span>
                                        <span class="center banner undergrad-population"><span class="txt-s3 block-desktop"><span class="subspan txt-s2"><?php print $param_student_body_graduate_percent;?> </span> undergrad students</span> <span class="txt-s3 block-desktop">from underrepresented racial,</span> <span class="txt-s3 block-desktop">ethnic and cultural populations</span></span>
                                        <span class="banner-right"></span>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td class="center">
                                    <div class="right live-on-campus" style="display: inline-block; margin-bottom: 30px; padding-left: 105px; background: url(http://www.messiah.edu/site/custom_scripts/styles/img/glance/residential-icon.png) no-repeat 0 0;">
                                        <span class="big-txt"><?php print $param_student_body_campus; ?><span class="subspan txt-s2">undergrad students</span></span>
                                        <span>live in <span class="subspan light-blue">on-campus</span> housing</span>
                                    </div>
                                    <div><a class="button" href="http://www.messiah.edu/download/downloads/id/3478/16_1166___ADM_Class_20120_Profile_Sheet.pdf">See first-year undergrad student profile</a></div>
                                </td>
                            </tr>
                        </table>

                        <div class="tuition img-box">
                            <h2 class="strike"><span>Tuition and Aid</span></h2>
                            <table>
                                <tr>
                                    <td class="white-txt center" style="width: 40%;">
                                        <span class="big-txt"><?php print $param_tuition_and_aid_percent;?></span>
                                        <span class="txt-s2">of undergraduate students<br>receive financial aid</span>
                                    </td>
                                    <td style="width: 20%;" class="center hide-on-mobile">
                                        <img src="http://www.messiah.edu/site/custom_scripts/styles/img/glance/award.png" alt="award" />
                                    </td>
                                    <td class="white-txt center"  style="width: 40%;">
                                        <div class="float-wrap" style="margin-bottom: 20px;">
                                            <span class="big-txt float no-float-mobile"><?php print $param_tuition_and_aid_rank;?></span>
                                            <span class="txt-s2 float no-float-mobile">Great school,<br>great price</span>
                                        </div>
                                        <span class="txt-s4"><strong>Source:</strong> 2019 U.S. News and World Report</span>
                                    </td>
                                </tr>
                            </table>
                            <div class="center white-txt">
                                <span class="txt-s4"><strong>AVERAGE AID PACKAGE</strong> = <?php print $param_tuition_and_aid_package;?> for first-year students</span>
                            </div>
                            <div class="float-wrap" style="padding: 20px; box-sizing: border-box;">
                                <div class="float half right center-mobile" style="padding: 10px; box-sizing: border-box;">
                                    <a class="button light-btn" href="http://www.messiah.edu/info/21344/tuition_and_aid">Undergrad tuition and fees</a>
                                </div>
                                <div class="float half center-mobile" style="padding: 10px; box-sizing: border-box;">
                                    <a class="button light-btn" href="http://www.messiah.edu/info/21207/tuition_and_fees">Grad tuition and fees</a>
                                </div>
                            </div>
                        </div>

                        <h2 class="strike"><span>Study Abroad</span></h2>

                        <table>
                            <tr>
                                <td class="border-r center half">
                                    <span class="big-txt"><?php print $param_study_abroad_percent;?></span>
                                    <span class="txt-s2"><span class="block-desktop">of Messiah's student</span> <span class="block-desktop">body studies or serves abroad</span></span>
                                </td>
                                <td class="plain-txt" style="background: url(http://www.messiah.edu/site/custom_scripts/styles/img/glance/plane.png) no-repeat 20px 0;">
                                    <span class="txt-s2 right" style="padding-top: 1em;">Last year, more than<br><span class="subspan light-blue"><?php print $param_study_abroad_students;?> undergraduate students</span> <br>studied abroad in more than <span class="subspan light-blue"><?php print $param_study_abroad_countries;?> countries</span>.</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="center hide-on-mobile">
                                    <a class="button" href="http://www.messiah.edu/info/20698/off_campus_programs">Off-campus programs</a>
                                </td>
                            </tr>
                        </table>

                        <h2 class="strike"><span>Careers and Internships</span></h2>

                        <table>
                            <tr>
                                <td class="border-r half center internship-sites" style="padding-left: 180px; background: url(http://www.messiah.edu/site/custom_scripts/styles/img/glance/internship-sites-icon.png) no-repeat 20px 0;">
                                    <span class="big-txt"><?php print $param_careers_and_internships_sites;?></span>
                                    <span class="txt-s2">Internship sites<br>per year</span>
                                </td>
                                <td class="center available-internship" style="padding-left: 190px; background: url(http://www.messiah.edu/site/custom_scripts/styles/img/glance/internship-icon.png) no-repeat 40px 0;">
                                    <span class="big-txt"><?php print $param_careers_and_internships_available;?></span>
                                    <span class="txt-s2">Available<br>internships<br>per year<span class="subspan txt-s3">(average)</span></span>
                                </td>
                            </tr>
                        </table>

                        <hr>

                        <table>
                            <tr>
                                <td class="undergrad-employed" style="padding-left: 220px; background: url(http://www.messiah.edu/site/custom_scripts/styles/img/glance/employment-icon.png) no-repeat 20px 0;">
                                    <span class="big-txt"><?php print $param_careers_and_internships_percent;?> <span class="subspan txt-s2">of the undergraduate Class of <?php print $param_careers_and_internships_year;?> </span></span>
                                    <span class="txt-s2">respondents indicated they were employed or in grad/professional programs <span class="subspan light-blue">within 6-9 months after graduation</span></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <a class="button" href="http://www.messiah.edu/info/21119/career_outcomes">Learn more</a>
                                </td>
                            </tr>
                        </table>

                        <h2 class="strike"><span>Athletics</span></h2>

                        <table>
                            <tr>
                                <td class="border-r" style="padding-left: 125px; background: url(http://www.messiah.edu/site/custom_scripts/styles/img/glance/trophy.png) no-repeat 20px 0;">
                                    <span class="big-txt"><?php print $param_athletics_division_champions;?></span>
                                    <span class="txt-s2"><span class="block-desktop bd-small">NCAA Division III</span> <span class="block-desktop">Championships</span></span>
                                </td>
                                <td class="border-r center">
                                    <span class="big-txt"><?php print $param_athletics_conference_champions;?></span>
                                    <span class="txt-s2"><span class="block-desktop">Conference team</span> <span class="block-desktop">champions</span></span>
                                </td>
                                <td class="center">
                                    <span class="big-txt"><?php print $param_athletics_division_all_americans;?></span>
                                    <span class="txt-s2"><span class="block-desktop bd-small">NCAA Division III</span> <span class="block-desktop">All-Americans</span></span>
                                </td>
                            </tr>
                        </table>

                        <hr>

                        <table style="margin-bottom: 20px;">
                            <tr>
                                <td class="border-r center">
                                    <span class="big-txt"><?php print $param_athletics_division_players;?></span>
                                    <span class="txt-s2">NCAA Division III<br>National Players<br>of the Year</span>
                                </td>
                                <td class="float-wrap ncaa-3-list">
                                    <div class="right float">
                                        <span class="big-txt light-blue"><?php print $param_athletics_division_sports;?></span>
                                        <span class="txt-s2 light-blue">NCAA<br>Division III<br>sports</span>
                                    </div>
                                    <div class="txt-s3 float">
                                        <ul class="division-3-sports">
                                            <li>baseball (M)</li>
                                            <li>basketball (M/W)</li>
                                            <li>cross country (M/W)</li>
                                            <li>field hockey (W)</li>
                                            <li>indoor track and field (M/W)</li>
                                            <li>lacrosse (M/W)</li>
                                            <li>outdoor track and field (M/W)</li>
                                            <li>soccer (M/W)</li>
                                            <li>softball (W)</li>
                                            <li>tennis (M/W)</li>
                                            <li>wrestling (M)</li>
                                            <li>swimming (M/W)</li>
                                            <li>volleyball (M/W)</li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </table>

            <!--
                        <div class="rankings img-box">
                            <h2 class="strike"><span>Rankings and Recognitions</span></h2>
                            <div class="float-wrap">
                                <div class="float left-nav nav-btn">
                                    <a href="#"><img src="http://www.messiah.edu/site/custom_scripts/styles/img/glance/left-arrow.png" alt="go left button"/></a>
                                </div>
                                <div class="float float-wrap slide-content white-txt">
                                    <div class="float third pad-box">
                                        <div class="single-slider-content">
                                            <div class="big-txt">#5</div>
                                            <span class="txt-s4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                    <div class="float third pad-box hide-on-mobile">
                                        <div class="single-slider-content active">
                                            <div class="big-txt">#5</div>
                                            <span class="txt-s4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                    <div class="float third pad-box hide-on-mobile">
                                        <div class="single-slider-content">
                                            <div class="big-txt">#5</div>
                                            <span class="txt-s4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="float right-nav nav-btn">
                                    <a href="#"><img src="http://www.messiah.edu/site/custom_scripts/styles/img/glance/right-arrow.png" alt="go right button"/></a>
                                </div>
                                <div class="float-wrap white-txt pad-box">
                                    <div class="float third center undergrad">
                                        <span class="txt-s4">Undergraduate</span>
                                    </div>
                                    <div class="float third center">
                                        <a class="button light-btn" href="#">Read more</a>
                                    </div>
                                    <div class="float third center grad">
                                        <span class="txt-s4">Graduate</span>
                                    </div>
                                </div>
                            </div>
                        </div>
            -->

                    </div><!-- #messiah-glance -->
