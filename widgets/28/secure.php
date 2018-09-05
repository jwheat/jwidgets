<?php
    require_once 'JaduConstants.php';
    require_once 'multimedia/JaduMultimediaGalleries.php';

    $galleries = getAllMultimediaGalleries(array('approved' => true, 'live' => true, 'visible' => true));
?>
<table class="form_table" id="lb_widget_content">
    <tbody>
    <tr>
        <td class="label_cell">Gallery</td>
        <td class="data_cell">
            <select id="galleryid">
                <option value="-1">Choose a gallery.</option>
<?php
    foreach ($galleries as $gallery) {
?>
                <option value="<?php print (int) $gallery->id; ?>"><?php print encodeHtml($gallery->title); ?></option>
<?php
    }
?>
            </select>
        </td>
    </tr>
    </tbody>
</table>
