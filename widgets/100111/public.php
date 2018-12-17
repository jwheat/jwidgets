<?php
	$image = $name = $title = $phone = $email = "";

    if ('%IMAGE%' != '' && '%IMAGE%' != '%IMAGE' . '%') {
      $image = '%IMAGE%';
    }

    $name = "";
    if ('%NAME%' != '' && '%NAME%' != '%NAME' . '%') {
      $name = '%NAME%';
    }

    $title = "";
    if ('%TITLE%' != '' && '%TITLE%' != '%TITLE' . '%') {
      $title = '%TITLE%';
    }

    $phone = "";
    if ('%PHONE%' != '' && '%PHONE%' != '%PHONE' . '%') {
      $phone = '%PHONE%';
    }

    $email = "";
    if ('%EMAIL%' != '' && '%EMAIL%' != '%EMAIL' . '%') {
      $email = '%EMAIL%';
    }


?>


<div class="request-help-container">
    <div class="request-help-container__left">
        <img id="request-help-photo" src="/images/<?php print $image;?>" alt="" class="request-help-photo">
        <span class="help-text">I can help!</span>
    </div>
    <div class="request-help-container__right">
        <p class="request-help-person-name"><?php print $name;?></p>
        <p class="request-help-person-role"><?php print $title;?></p>
        <div class="contact-container">
            <img src="" alt="" class="phone-icon">
            <span><?php print $phone;?></span>
        </div>
        <div class="email-container">
            <img src="" alt="" class="email-icon">
            <a href="mailto:<?php print $email;?>"><?php print $email;?></a>
        </div>
    </div>
</div>    
