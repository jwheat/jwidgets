<link rel="stylesheet" type="text/css" href="//www.messiah.edu/site/custom_scripts/styles/mcforms.css">
<?php
    if (isset($_GET['first_name']) && isset($_GET['last_name']) && isset($_GET['email']) && isset($_GET['phone'])) {
        $first_name = $_GET['first_name'];
        $last_name = $_GET['last_name'];
        $email = $_GET['email'];
        $phone = $_GET['phone'];
?>
        <h2><?php print $first_name;?>, thanks for requesting information from Messiah College.</h2>
        <p> So that we may send you additional information, please tell us a little more about yourself and your interests. Once you submit this brief form, an admissions counselor will be in touch via email to answer any questions you might have. In the meantime, feel free to contact us at 717-796-5061. </p>
<div id="crmWebToEntityForm">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <form id="grfi-webfx" action="https://crm.zoho.com/crm/WebToLeadForm" name="WebToLeads2051930000000116019" method="POST" onsubmit="javascript:document.charset="UTF-8"; return checkMandatory()" accept-charset="UTF-8">

        <!-- Do not remove this code. -->
        <input type="text" style="display:none;" name="xnQsjsdp" value="c0b918469d9fe3ede182fe61f12e08d2cf18b084cabfe14e6b9ca4385b64d4a0">
        <input type="hidden" name="zc_gad" id="zc_gad" value="">
        <input type="text" style="display:none;" name="xmIwtLD" value="beb415faaf80d30993ab001ccaee67dbfe7d85f30d616b42205371e28e9d283a">
        <input type="text" style="display:none;" name="actionType" value="TGVhZHM=">

        <input type="text" style="display:none;" name="returnURL" value="http://www.messiah.edu/info/21084/graduate_admissions/3341/thanks_for_requesting_information">
        <!-- Do not remove this code. -->
   
        <div class="row">
            <div class="input-row"><label>First Name<span>*</span></label><input class="xfields" maxlength="40" name="First Name" type="text" value="<?php print $first_name;?>"></div>

            <div class="input-row"><label>Last Name<span>*</span></label><input class="xfields" maxlength="80" name="Last Name" type="text" value="<?php print $last_name;?>"></div>
        </div>

        <div class="row">
            <div class="input-row"><label>Street<span>*</span></label><input class="xfields" maxlength="250" name="Street" type="text"></div>

            <div class="input-row"><label>Address 2</label><input class="xfields" maxlength="250" name="LEADCF10" type="text"></div>
        </div>

        <div class="row">
            <div class="input-row"><label>City<span>*</span></label><input class="xfields" maxlength="30" name="City" type="text"></div>

            <div class="input-row"><label>State<span>*</span></label><input class="xfields" maxlength="30" name="State" type="text"></div>
        </div>

        <div class="row">
            <div class="input-row"><label>Zip Code<span>*</span></label><input class="xfields" maxlength="30" name="Zip Code" type="text"></div>

            <div class="input-row"><label>Country</label><input class="xfields" maxlength="30" name="Country" type="text"></div>
        </div>

        <div class="row">
            <div class="input-row"><label>Phone<span>*</span></label><input class="xfields" maxlength="30" name="Phone" type="text" value="<?php print $phone;?>"></div>

            <div class="input-row"><label>Email<span>*</span></label><input class="xfields" maxlength="100" name="Email" type="text" value="<?php print $email;?>"></div>
        </div>
        <div class="row break">
            <div class="input-row"><label>Undergraduate College</label><input class="xfields" maxlength="250" name="LEADCF9" type="text"></div>

            <div class="input-row"><label>Graduation Year</label><input class="xfields" maxlength="9" name="LEADCF51" type="text"></div>
        </div>

        <div class="row">
            <div class="input-row"><label>Undergraduate Degree</label> <select class="select-dd" name="LEADCF7"><option value="-None-">Select a undergraduate degree</option><option value="Associate of Science in Nursing">Associate of Science in Nursing</option><option value="Bachelor of Arts">Bachelor of Arts</option><option value="Bachelor of Education">Bachelor of Education</option><option value="Bachelor of Engineering">Bachelor of Engineering</option><option value="Bachelor of Fine Arts">Bachelor of Fine Arts</option><option value="Bachelor of Liberal Arts">Bachelor of Liberal Arts</option><option value="Bachelor of Music">Bachelor of Music</option><option value="Bachelor of Science">Bachelor of Science</option><option value="Bachelor of Science in Nursing">Bachelor of Science in Nursing</option><option value="Bachelor of Social Work">Bachelor of Social Work</option><option value="Other Bachelor Degree">Other Bachelor Degree</option><option value="Diploma Program in Nursing">Diploma Program in Nursing</option> </select></div>

            <div class="input-row"><label>Undergraduate Major</label><input class="xfields" maxlength="250" name="LEADCF3" type="text"></div>
        </div>

        <div class="row">
            <div class="input-row"><label>Program of interest<span>*</span></label> <select class="select-dd" name="LEADCF4">
                    <option value="-None-">-None-</option>
                    <option value="MA-Strategic Leadership">MA-Strategic Leadership</option>
                    <option value="MBA- Masters in Business Administration">MBA- Masters in Business Administration</option>
                    <option value="Certificate in Digital Marketing">Certificate in Digital Marketing</option>
                    <option value="Certificate in Management">Certificate in Management</option>
                    <option value="Certificate in Organizational and Strategic Communication">Certificate in Organizational and Strategic Communication</option>
                    <option value="Certificate in Social Entrepreneurship">Certificate in Social Entrepreneurship</option>
                    <option value="Certificate in Strategic Leadership">Certificate in Strategic Leadership</option>
                    <option value="MM Conducting-choral">MM Conducting-choral</option>
                    <option value="MM Conducting- orchestral">MM Conducting- orchestral</option>
                    <option value="MM Conducting- wind">MM Conducting- wind</option>
                    <option value="MM Conducting- track undecided">MM Conducting- track undecided</option>
                    <option value="MA Counseling- clinical mental health">MA Counseling- clinical mental health</option>
                    <option value="MA Counseling- marriage, couple and family">MA Counseling- marriage, couple and family</option>
                    <option value="MA Counseling- school counseling">MA Counseling- school counseling</option>
                    <option value="MA Counseling - track undecided">MA Counseling - track undecided</option>
                    <option value="MA Higher Education- academic support services">MA Higher Education- academic support services</option>
                    <option value="MA Higher Education- college athletics leadership">MA Higher Education- college athletics leadership</option>
                    <option value="MA Higher Education- student affairs">MA Higher Education- student affairs</option>
                    <option value="MA Higher Education- individualized program">MA Higher Education- individualized program</option>
                    <option value="MA Higher Education ÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂ¢ÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂ strategic leadership">MA Higher Education ÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂ¢ÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂ strategic leadership</option>
                    <option value="MED- curriculum and instruction">MED- curriculum and instruction</option>
                    <option value="MED- Special Education">MED- Special Education</option>
                    <option value="MED- Special Education Certification (PDE, Pre K-8)">MED- Special Education Certification (PDE, Pre K-8)</option>
                    <option value="MED- Special Education Certification (PDE, Grades 7-12)">MED- Special Education Certification (PDE, Grades 7-12)</option>
                    <option value="MED - TESOL">MED - TESOL</option>
                    <option value="MOT - Master of Occupational Therapy">MOT - Master of Occupational Therapy</option>
                    <option value="DNP - Family Nurse Practitioner">DNP - Family Nurse Practitioner</option>
                    <option value="MSN- Nurse Educator">MSN- Nurse Educator</option>
                    <option value="RN to MSN- Nurse Educator">RN to MSN- Nurse Educator</option>
                    <option value="CAGS- Conducting">CAGS- Conducting</option>
                    <option value="CAGS- Counseling">CAGS- Counseling</option>
                    <option value="CAGS- Nurse Educator">CAGS- Nurse Educator</option>
                    <option value="ESL Program Specialist Certification (PDE, K-12)">ESL Program Specialist Certification (PDE, K-12)</option>
                    <option value="Certificate in TESOL">Certificate in TESOL</option>
                    <option value="Certificate in Bilingual Education and TESOL">Certificate in Bilingual Education and TESOL</option>
                    <option value="Certificate in Autism Spectrum Disorders">Certificate in Autism Spectrum Disorders</option>
                    <option value="Certificate in Autism Spectrum Disorders PDE Endorsement (PDE, K-12)">Certificate in Autism Spectrum Disorders PDE Endorsement (PDE, K-12)</option>
                    <option value="Special Education Certification (PDE, Pre K-8)">Special Education Certification (PDE, Pre K-8)</option>
                    <option value="Special Education Certification (PDE, Grades 7-12)">Special Education Certification (PDE, Grades 7-12)</option>
                    <option value="Dietetic Internship Program">Dietetic Internship Program</option>
                </select></div>

            <div class="input-row"><label>Start Term<span>*</span></label> <select class="select-dd" name="LEADCF6"><option value="-None-">Select a start term</option><option value="Fall">Fall</option><option value="Spring">Spring</option><option value="Summer">Summer</option></select></div>
        </div>

        <div class="row">
            <div class="input-row"><label>Start Year<span>*</span></label> <select class="select-dd" name="LEADCF5"><option value="-None-">Select a start year</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option> </select></div>

            <div class="input-row"><label>How did you hear about us?</label> <select class="select-dd" name="LEADCF12">
                    <option value="- How did you hear about us? -">- How did you hear about us? -</option>
                    <option value="Billboard">Billboard</option>
                    <option value="Facebook ad">Facebook ad</option>
                    <option value="Graduate Fair/Expo">Graduate Fair/Expo</option>
                    <option value="Internet Search">Internet Search</option>
                    <option value="Journal ad">Journal ad</option>
                    <option value="Magazine ad">Magazine ad</option>
                    <option value="Newspaper ad">Newspaper ad</option>
                    <option value="Pandora">Pandora</option>
                    <option value="Postcard/Flyer">Postcard/Flyer</option>
                    <option value="Professional Conference">Professional Conference</option>
                    <option value="Promotional Email">Promotional Email</option>
                    <option value="Radio ad">Radio ad</option>
                    <option value="Spotify">Spotify</option>
                    <option value="Web Banner ad">Web Banner ad</option>
                    <option value="Word of Mouth/Referral">Word of Mouth/Referral</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="input-row-text">
                <label>Comments / Questions / Additional Educational Background:</label>
                <textarea name="LEADCF13" class="input-text" maxlength="2000"></textarea>
            </div>
        </div>
        <div class="row-hide">
            <div class="input-row"><label>Referring URL</label><input class="xfields" maxlength="250" name="LEADCF11" type="text" value="www.messiah.edu"></div>
        </div>

        <div class="row">
            <div class="input-row"><input class="submit-btn" type="submit" value="Submit"> <input class="reset" type="reset" value="Reset"></div>
        </div>
    </form></div>

<script>
    var mndFileds=new Array('First Name','Last Name','LEADCF4','LEADCF6','LEADCF5','Email','Phone','Street','City','Zip Code','State');
    var fldLangVal=new Array('First Name','Last Name','Program','Start Term','Start Year','Email','Phone','Street','City','Address 2','Zip Code','State');
    var name='';
    var email='';

    function checkMandatory() {
        for(i=0;i<mndFileds.length;i++) {
            var fieldObj=document.forms['WebToLeads2051930000000116019'][mndFileds[i]];
            if(fieldObj) {
                if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
                    if(fieldObj.type =='file')
                    {
                        alert('Please select a file to upload.');
                        fieldObj.focus();
                        return false;
                    }
                    alert(fldLangVal[i] +' cannot be empty.');
                    fieldObj.focus();
                    return false;
                }  else if(fieldObj.nodeName=='SELECT') {
                    if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
                        alert(fldLangVal[i] +' cannot be none.');
                        fieldObj.focus();
                        return false;
                    }
                } else if(fieldObj.type =='checkbox'){
                    if(fieldObj.checked == false){
                        alert('Please accept  '+fldLangVal[i]);
                        fieldObj.focus();
                        return false;
                    }
                }
                try {
                    if(fieldObj.name == 'Last Name') {
                        name = fieldObj.value;
                    }
                } catch (e) {}
            }
        }
    }

</script>

<?php }  ?>