<div class="box">
<?php
    require_once 'JaduConstants.php';

    $contentWidgetTitle = ('%TITLE%' != '%TITLE'.'%') ? '%TITLE%' : '';
    $contentWidgetContent = ('%CONTENT%' != '%CONTENT'.'%') ? '%CONTENT%' : '';

    $contentWidgetContent = str_replace('\"','"', $contentWidgetContent);
    $contentWidgetContent = str_replace('\\\'', '\'', $contentWidgetContent);
    $contentWidgetTitle = str_replace('\"', '"', $contentWidgetTitle);

    if (isset($_POST['action']) && isset($_POST['preview'])) {
        $contentWidgetContent = str_replace('src="./images/', 'src="' . getCurrentProtocolSiteRootURL() . '/images/', $contentWidgetContent);
        // Editor class for control centre preview
        $editorClass = 'byEditor';
    }
    else {
        // Editor class for front end
        $editorClass = 'editor';
    }

    if ($contentWidgetContent) {
        if ($contentWidgetTitle) {
?>
    <h2><?php print encodeHtml($contentWidgetTitle); ?></h2>
<?php
        }
?>
    <div class="<?php print $editorClass; ?>">
<?php
        print processEditorContent($contentWidgetContent);
?>

    </div>
<?php
    }
?>
</div>