<?php
	
	$url = "http://mcweb.messiah.edu/mcsquare/safety_committee/document_list_for_jadu.php";

	$fp = fopen($url,"r") or die("Unable to connect to $url");
	while (!feof ($fp))
	$html .= fgets($fp, 4096);
	fclose ($fp);	

	print $html;
?>