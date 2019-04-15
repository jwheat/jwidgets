<?php 
  $dev = false;
  //$dev = true;
  $folder = '';
  if (!$dev) {
      $folder = '/site/custom_scripts/styles/';
  }
?>
        <link href="<?php print $folder; ?>mc-campaign-cta.css" rel="stylesheet">
        <input type="hidden" id="mc-folder" value="<?php print $folder; ?>">

        <script id="mc-cta-sticky-template" type="text/x-jQuery-tmpl">
            <div class="cta-sticky">
                <ul>
                    <li class="cta-request-sticky"><a href="https://www.messiah.edu/request-info" class="gtm-sticky-cta"><img src="<?php print $folder; ?>img/campaign-cta/information.png"> Request Information</a></li>
                    <li class="cta-apply-sticky "><a href="https://www.messiah.edu/applynow" class="gtm-sticky-cta"><img src="<?php print $folder; ?>img/campaign-cta/checkmark.png"> Apply Today</a></li>
                    <li class="cta-visit-sticky "><a href="https://www.messiah.edu/info/21343/visit_campus" class="gtm-sticky-cta"><img src="<?php print $folder; ?>img/campaign-cta/campus-location.png"> Visit Campus</a></li>
                    <li class="cta-chat-sticky "><a href="https://lc.chat/now/5528171/" target="_blank" class="gtm-sticky-cta"><img src="<?php print $folder; ?>img/campaign-cta/chat-balloon.png"> Chat Online</a></li>
                </ul>
            </div>
        </script>

        <script id="mc-cta-overlay-template" type="text/x-jQuery-tmpl">
            <div class="cta-overlay" style="display:none">
                <a class="cta-close"><img src="<?php print $folder; ?>img/campaign-cta/close-button.png"></a>
                <div class="cta-lightbox">
                    <div class="cta-lightbox-header">
                        <h2>Interested in exploring Messiah College?</h2>
                        <p>Here are a few ways you can connect with us:</p>
                    </div>
                    <div class="cta-lightbox-content">
                        <div class="cta-img-bg">
                            <a href="https://www.messiah.edu/info/21343/visit_campus" class="cta-lb-visit">
                                <img src="<?php print $folder; ?>img/campaign-cta/visit-campus.png">
                                <span><div class="visit">Visit Campus</div></span>
                            </a>
                        </div>
                        <div class="cta-img-bg">
                            <a href="https://www.messiah.edu/applynow" class="cta-lb-apply">
                                <img src="<?php print $folder; ?>img/campaign-cta/apply-today.png">
                                <span><div class="apply">Apply Today</div></span>
                            </a>
                        </div>
                        <div class="cta-img-bg">
                            <a href="https://www.messiah.edu/request-info" class="cta-lb-rfi">
                                <img src="<?php print $folder; ?>img/campaign-cta/request-info.png">
                                <span><div class="request">Request Info</div></span>
                            </a>
                        </div>
                        <div class="cta-img-bg">
                            <a href="https://lc.chat/now/5528171/" target="_blank" class="cta-lb-chat">
                                <img src="<?php print $folder; ?>img/campaign-cta/chat-online.png">
                                <span><div class="chat">Chat Online</div></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </script>
        
        <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.js"></script>        
        <script type="text/javascript" src="<?php print $folder; ?>mc-campaign-cta.js"></script>
