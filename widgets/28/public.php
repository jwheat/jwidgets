<?php
require_once 'multimedia/JaduMultimediaGalleries.php';

$galleryID = '%GALLERYID%';

if (is_numeric($galleryID) && $galleryID > 0) {
    $gallery = getMultimediaGallery($galleryID, array('live' => true, 'approved' => true));
    
    if (!$gallery) {
        $gallery = new MultimediaGallery();
    }

    $items = $gallery->getItems();

    if ($gallery->id > 0) {
?>
<h3><?php print encodeHtml($gallery->title);?></h3>
<div class="editor">
    <?php print processEditorContent($gallery->description); ?>
</div>
<?php
        if (!empty($items)) {
?>
<div class="bss-slides">
<?php
            foreach ($items as $index => $item) {
?>
        <figure>
            <img src="<?php print getStaticContentRootURL() . (!$item->isAudio() ? $item->getThumbnail(500) : '/site/images/audio_150.jpg'); ?>" alt="">
<?php
                if (!empty($item->caption)) {
?>
            <figcaption><?php print encodeHtml($item->caption); ?></figcaption>
<?php
                }
?>
        </figure>
<?php
            }
?> 
</div>
<?php
        }
    }
}
?>
