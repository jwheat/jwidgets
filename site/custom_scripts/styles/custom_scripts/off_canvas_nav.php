<?php
    require_once 'JaduConstants.php';
    include_once 'custom/Nav/Menu.php';

/**
 * Navigation menu used off-canvas in narrow view.
 */
$leftHandNavigation = custom\Nav\Menu::findByCodename('left_hand_navigation', [
        'depth' => 2,
        'attributes' => [
            'outer' => [
                'class' => 'off-canvas-nav',
            ],
        ],
    ]);
print $leftHandNavigation != null ? $leftHandNavigation->render() : '';
