<?php

require_once 'utilities/JaduStatus.php';
require_once 'custom/MegaMenu/CustomMegaMenu.php';

/**
 * This script muxes together all the submenus for all menus requested.
 */
$menuIds = explode(',', $_GET['menus']);

foreach ($menuIds as $menuId) {
    $menu = CustomMegaMenu::findById($menuId);

    if (!$menu || !$menu->links) {
        continue;
    }

    foreach ($menu->links as $link) {
        if (!$link || !$link->homepage) {
            continue;
        }

        $widgets = $link->homepage->getWidgetsToHomepages();
        $homepageSections = [];

        foreach ($widgets as $content) {
            if (!isset($homepageSections[$content->positionY])) {
                $homepageSections[$content->positionY] = [];
            }
            if ($content->stackPosition > 0) {
                if (!isset($homepageSections[$content->positionY][$content->positionX])) {
                    $homepageSections[$content->positionY][$content->positionX] = [];
                }
                $homepageSections[$content->positionY][$content->positionX][] = $content;
            } else {
                $homepageSections[$content->positionY][] = $content;
            }
        }

        printf('<div data-mega-menu-link="%d">', $link->id);
        require $_SERVER['DOCUMENT_ROOT'] . '/site/includes/homepages_content.php';
        print '</div>';
    }
}
