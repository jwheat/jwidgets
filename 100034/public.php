<?php
    define('WEBROOT', '/a/academics/listing');
    require "custom/academics/class.MessiahAcademicOfferings.php";
    $listing = new MessiahAcademicListing;

    # -- Get selected department
    $param_department = "";

    if ($param_department == '%' . 'PARAM_DEPARTMENT%' || $param_department == '') {
        $param_department = '%PARAM_DEPARTMENT%';
    }

    if ($param_department != "") {

	    $prefix = "Department of";

	    $ds_name = $param_department;

	    $orderby_sql = "e.title";
	    $s_default = "default";
	    $w_clause = "and ct.title = '".$ds_name."'";

	    $data_table = $listing->getSmallDirectoryList($orderby_sql,$w_clause);

	    $html = "


	                                <table class='accordion-info-table'>
	                                    <thead>
	                                        <tr>
	                                            <th class='cell-01'>Program</th>
	                                            <th class='cell-02'>Degree</th>
	                                            <th class='cell-03'>Major</th>
	                                            <th class='cell-04'>Minor</th>
	                                            <th class='cell-05'>Concentration</th>
	                                            <th class='cell-06'>Pre Professional</th>
	                                            <th class='cell-07'>Teaching Certification</th>
	                                        </tr>
	                                    </thead>
	                            ".$data_table."
	                                </table>

	    ";	    

	    print "<link rel='stylesheet' type='text/css' href='/site/custom_scripts/styles/department_list.css' media='screen' />";
		print $html;

    }
?>