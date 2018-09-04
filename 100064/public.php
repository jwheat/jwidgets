<link rel="stylesheet" type="text/css" href="//www.messiah.edu/site/custom_scripts/styles/mcforms.css">
<div class="side-form-grad">
<div id="crmWebToEntityForm">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8">
   <form action="https://crm.zoho.com/crm/WebToLeadForm" name="WebToLeads2051930000000136039" method="POST" onsubmit='javascript:document.charset="UTF-8";  fillvals(); return checkMandatory();' accept-charset="UTF-8">
   
    <input type="text" style="display:none;" name="xnQsjsdp" value="c0b918469d9fe3ede182fe61f12e08d2cf18b084cabfe14e6b9ca4385b64d4a0">
    <input type="hidden" name="zc_gad" id="zc_gad" value="">
    <input type="text" style="display:none;" name="xmIwtLD" value="beb415faaf80d30993ab001ccaee67db60803e5b1db49b93411df0772aa3b7f1">
    <input type="text" style="display:none;" name="actionType" value="TGVhZHM=">
    <h3>Request Information</h3>
    <p>Call</p>
    <h4>717.796.5061</h4>
    <p>Or Submit </br>the form below</p>
    <input type="hidden" name="returnURL" id="returnURL" value="http://www.messiah.edu/grad-rfi"> 
    <input type="text" class="xfields-side" maxlength="40" name="First Name" id='first_name' placeholder="First name">
    <input type="text" class="xfields-side" maxlength="80" name="Last Name" id='last_name' placeholder="Last name">
    <input type="text" class="xfields-side" maxlength="100" name="Email" id='email' placeholder="Email">
    <input type="text" class="xfields-side" maxlength="30" name="Phone" id='phone' placeholder="Phone (optional)">
    <input type='hidden' name='LEADCF11' id="hidden-url" >
    <select style='display:none;' name='LEADCF1'>
        <option selected value='Public - shortl RFI'>Public - shortl RFI</option>
        </select>
    <input class="submit-btn-side" type="submit" value="Submit">
    </form>
</div>
</div>
<script>
    function fillvals() {
        var jadu_page_url = "http://www.messiah.edu/homepage/2754/";
      $('#returnURL').val(jadu_page_url+'/?email='+jQuery("#email").val()+'&first_name='+jQuery("#first_name").val()+'&last_name='+jQuery("#last_name").val()+'&phone='+jQuery("#phone").val());        
    }

    document.querySelector("#hidden-url").value = window.location.href;

</script>