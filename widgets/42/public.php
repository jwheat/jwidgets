<?php
	require_once('JaduConstants.php');
	
	$contentWidgetTitle = '%TITLE%';
	$contentWidgetContent = '%CONTENT%';
	$contentWidgetContent = str_replace('\"','"', $contentWidgetContent); 
	$contentWidgetContent = str_replace('\\\'', '\'', $contentWidgetContent);
	$contentWidgetTitle = str_replace('\"', '"', $contentWidgetTitle);

	if (isset($_POST['action']) && isset($_POST['preview'])) {
		$contentWidgetContent = str_replace('src="./images/', 'src="http://'.DOMAIN.'/images/', $contentWidgetContent);
	}
	if ($contentWidgetContent != '' && $contentWidgetContent != '%CONTENT'.'%') {
?>
<div class="bg-info contact-box">
<?php
		if ($contentWidgetTitle != '' && $contentWidgetTitle != '%TITLE'.'%') {
?>
	<h2><?php print encodeHtml($contentWidgetTitle); ?></h2>
<?php
		}
?>
	<div class="widget_content byEditor"><?php print processEditorContent($contentWidgetContent); ?></div>
</div>
<?php
	}
?>