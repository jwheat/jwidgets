<?php
  //$dev = true;
  $dev = false;
  $categoryId = '';
  $folder = '';
  $version = date('YmdHis');
  if (!$dev) {
    $version = 1;
    $folder = '/site/custom_scripts/styles/';
  }
  if ($dev) {
    $categoryId = 17;
  } else {
    $param_department = "";
    if ($param_department == '%' . 'PARAM_DEPARTMENT%' || $param_department == '') {
      $param_department = '%PARAM_DEPARTMENT%';
    }
    $department_array = explode("|", $param_department);
    $department_name = $department_array[0];
    $categoryId = $department_array[1];
  }
?>

<link type="text/css" rel="stylesheet" href="<?php echo $folder; ?>mc-course-listing.css?version=<?php echo $version; ?>"/>

<div class="editor">
    <div id="full-view">
        <input type="hidden" id="mc-category-id" value="<?php echo $categoryId; ?>">
        <p class="info">Click a course link below to view courses for that degree type.</p>
        <div>
            <div id="expanded" class="program-table">
            </div>
        </div>
    </div>
</div>

<script id="programs-template" type="text/x-jQuery-tmpl">
    <div class="{{if (expanded) }}expanded{{/if}} tr">
        <span class="name">
            <a>${program_name}</a>
            {{each degree_types}}
            <span class="degree-type">${$value.name}</span>
            {{/each}}
        </span>
        {{if (major_courses_url != '') }}<span class="major"><a href="${major_courses_url}"><span class="badge"></span></span></a>{{/if}}
        {{if (minor_courses_url != '') }}<span class="minor"><a href="${minor_courses_url}"><span class="badge"></span></span></a>{{/if}}
        {{if (concentration_courses_url != '') }}<span class="concentration"><a href="${concentration_courses_url}"><span class="badge"></span></span></a>{{/if}}
        {{if (pre_professional_courses_url != '') }}<span class="prepro"><a href="${pre_professional_courses_url}"><span class="badge"></span></span></a>{{/if}}
        {{if (teaching_certification_course_url != '') }}<span class="teaching"><a href="${teaching_certification_course_url}"><span class="badge"></span></span></a>{{/if}}
    </div>
</script>

<!-- jQuery Templates -->
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.js"></script>
<script type="text/javascript" src="<?php echo $folder; ?>mc-course-listing.js?v=<?php echo $version; ?>"></script>
