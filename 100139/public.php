<?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '4';
    $folder = '/site/custom_scripts/styles/';
  }
?>

<style>
@media (max-height: 720px) {
.fs-wrapper h2 {
        font-size: 3em;
        line-height: 1em;
    }

.fs-bg {
display:none!important; 
}


}

</style>
   
<link rel="stylesheet" href="<?php echo $folder; ?>fonts/font-awesome/css/font-awesome.min.css">
    <link href="<?php echo $folder; ?>mc-static-homepage.css?v=<?php echo $version; ?>" rel="stylesheet">
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">
    <div class="fs-bg" data-parallax="scroll" data-image-src="<?php echo $folder; ?>img/move-in-homepage.jpg">
        <div class="fs-wrapper">
            <h2>Welcome,</br>New Students!</h2>
            <hr>
            <p>Move-In Day 2018</p>
            <a href="https://youtu.be/ID8DEz9S2I8" class="sl-button" data-lity>Watch the video</a>
        </div>
        <div class="faith-and-service-tabs hide-on-mobile">
            <ul>
                <li class="fas-explore-button"><a class="gtm-car-scroll">Explore Messiah<br><img src="<?php echo $folder; ?>img/faith-and-service/car2-arrow-down.png"></a></li>
                </ul>
        </div>
    </div>



    <script type="text/javascript" src="/site/custom_scripts/styles/parallax.min.js"</script>
