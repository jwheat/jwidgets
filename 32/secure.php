<?php
include_once("JaduConstants.php");

// initialise document editor
$editor = $jadu->getEditor();
?>
<table class="form_table" id="lb_widget_content">
    <tbody>
        <tr>
            <td class="label_cell"><label for="param_heading">Heading</label></td>
            <td class="data_cell"><textarea name='param_heading' rows='1' cols='10' id='param_heading'></textarea></td>
        </tr>
        <tr>
            <td class="label_cell"><label for="param_heading">Sub Heading</label></td>
            <td class="data_cell"><textarea name='param_subheading' rows='1' cols='10' id='param_subheading'></textarea></td>
        </tr>

        <tr>
            <td class="label_cell"><label for="content">Text</label></td>
            <td class="data_cell">
                <?php print $editor->getEditorMarkup('content', '', 'content', false); ?>
            </td>
        </tr>
        <tr>
            <td class="label_cell"><label for="param_anchor">Anchor</label></td>
            <td class="data_cell"><textarea name='param_anchor' rows='1' cols='10' id='param_anchor'></textarea></td>
        </tr>        
    </tbody>
</table>
