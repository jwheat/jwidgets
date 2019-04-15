<?php
namespace custom\Nav;
// Documents
?>
<select name="sourceId" id="sourceId">
<?php foreach ($menuItem->sourceOptions as $id => $title): ?>
    <option value="<?php print encodeHtml($id); ?>"><?php print encodeHtml($title); ?></option>
<?php endforeach; ?>	
</select>