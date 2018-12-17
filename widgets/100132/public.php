<?php
    $param_hide = "";
    $param_bodycopy = "bodycopy";
    $param_image = "placeholder-pixel.png";

    if ('%PARAM_HIDE%' != '' && '%PARAM_HIDE%' != '%PARAM_HIDE'.'%') {
            $param_hide = '%PARAM_HIDE%';
    } 

    if ('%PARAM_BODYCOPY%' != '' && '%PARAM_BODYCOPY%' != '%PARAM_BODYCOPY'.'%') {
            $param_bodycopy = '%PARAM_BODYCOPY%';
    }      

    if ('%PARAM_IMAGE%' != '' && '%PARAM_IMAGE%' != '%PARAM_IMAGE'.'%') {
            $param_image = '%PARAM_IMAGE%';
    }

    if ($param_hide != "Y") {        
?>    

<style>
.announcement-widget {
    background-color: #6697B8;
    padding: 10px 20px; 
    margin-bottom: 20px; 
    display: -webkit-flex; /* Safari */
    display: flex;

}

.announcement-widget img {
    -webkit-flex: 1;  /* Safari 6.1+ */
    -ms-flex: 1;  /* IE 10 */
    flex: 1;
    max-width:  30px !important; 
    max-height: 30px !important; 
    height: auto; 
    width: auto; 
    margin-right:  20px;
      -webkit-align-items: center; 
      align-items: center; 
}

.announcement-widget p {
    color: #fff;
    -webkit-flex: 1;  /* Safari 6.1+ */
    -ms-flex: 1;  /* IE 10 */
    flex: 1;
    -webkit-align-items: center;
    align-items: center;
    margin: 0px !important;
    font: 15px/30px mendoza-book, serif;
    padding:  0px;
}
</style>

<div class="announcement-widget" >
<img src="/images/<?php print $param_image;?>" alt="calendar icon">
<?php print $param_bodycopy;?>
</div>

<?php } ?>