<?php
include_once("JaduConstants.php");

// initialise document editor
$editor = $jadu->getEditor();
?>
<table class="form_table" id="lb_widget_content">
<tbody>
    <tr>
        <td class="label_cell">Heading</td>
        <td class="data_cell"><input id="title" value="" size="12" class="field" type="text"></td>
    </tr>
    <tr>
        <td class="info_cell" colspan="2">Content</td>
    </tr>
    <tr>
        <td class="data_cell" colspan="2">
<textarea id='content'  rows='20' style='width:90%'></textarea>
        </td>
    </tr>
</tbody>
</table>
