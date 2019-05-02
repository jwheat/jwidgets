<?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '1';
    $folder = '/site/custom_scripts/styles/';
  }

  $icon = "";
  if ('%ICON%' != '' && '%ICON%' != '%ICON' . '%') {
    $icon = '%ICON%';
  }  

  $param_heading = "";
  if ('%PARAM_HEADING%' != '' && '%PARAM_HEADING%' != '%PARAM_HEADING' . '%') {
    $param_heading = '%PARAM_HEADING%';
    //$id = strtolower($param_heading);
    //$id = str_replace(" ", "-", $id);
    $id = rand(1, 10000);
  }  

  $content = "";
  if ('%CONTENT%' != '' && '%CONTENT%' != '%CONTENT' . '%') {
    $content = '%CONTENT%';
  }  

  $param_show = "";
  if ('%PARAM_SHOW%' != '' && '%PARAM_SHOW%' != '%PARAM_SHOW' . '%') {
    $param_show = '%PARAM_SHOW%';
  }  
 

  if ($param_show != "hide") {
?>

    <div class="section section-bottom" id="section-<?php print $id;?>">
        <div class="wrapper content">
            <div class="accordion-container">
                <div class="accordion">
                    <div class="acc-container">
                        <input type="checkbox" name="panel" id="panel-<?php print $id;?>">
                        <label for="panel-<?php print $id;?>">
                          <?php if (!empty($icon)) { ?>
                            <img src="/images/<?php echo $icon;?>" class="acc-img" alt="lock icon">
                          <?php } ?>
                            <?php echo $param_heading;?>
                        </label>
                        <div class="accordion__content">
                            <?php echo $content;?>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          
      </div>
<?php 
  } 
?>  