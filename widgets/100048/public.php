<?php
    
    if ($param_department == '%' . 'PARAM_DEPARTMENT%' || $param_department == '') {
        $param_department = '%PARAM_DEPARTMENT%';
        $param_previous = $param_department;
    }

    if ($param_percentage == '%' . 'PARAM_PERCENTAGE%' || $param_percentage == '') {
        $param_percentage = '%PARAM_PERCENTAGE%';
    }

    if ($param_url == '%' . 'PARAM_URL%' || $param_url == '') {
        $param_url = '%PARAM_URL%';
    }

    if ($param_text == '%' . 'PARAM_TEXT%' || $param_text == '') {
        $param_text = '%PARAM_TEXT%';
    }
?>

<link type="text/css" rel="stylesheet" href="/site/custom_scripts/styles/outcomes.css?v=3"/>
<script src='/site/javascript/chart.js'></script>

<div class="statistics-hold">
	<div class="statistics-block">
		<span class="img-hold">
			<img src="/site/images/grad_stats_background.jpg" alt="image desxcription" width="832" height="317">
		</span>
		<div class="text">
			<p><?php print $param_text;?></p>
			<?php if (!empty($param_url)) { ?>
			<a href="<?php print $param_url;?>" class="btn">Read more</a>
			<?php } ?>
		</div>
		<div class="statistics-circle">
			<span><span class="value"><?php print $param_percentage;?></span>%</span>
			<div class="circle-box" id="chart" angle-data="[[34, 2, 0], [360, 2, 10]]" start-data="[[0, 2, 0], [34, 2, 10]]" color-data='["#ffffff", "#6697B8"]' percent-data="<?php print $param_percentage;?>"></div>
		</div>
	</div>
</div>