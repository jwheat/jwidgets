<?php

namespace custom\Nav;

require_once 'utilities/JaduStatus.php';
require_once 'custom/Nav/Menu.php';

/**
 * This script muxes together all the submenus for all menus requested.
 */
$menuIds = explode(',', $_GET['menus']);

foreach ($menuIds as $menuId) {
    $menu = Menu::findByCodename($menuId);

    if (!$menu) {
        continue;
    }

    foreach ($menu->rootItem->children as $link) {
        if (!$link || !$link->submenuHomepageId) {
            continue;
        }

        $widgets = $link->submenuHomepage->getWidgetsToHomepages();
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

        printf('<div data-nav-menuitem="%d">', $link->id);
        require $_SERVER['DOCUMENT_ROOT'] . '/site/includes/homepages_content.php';
        print '</div>';
    }
}
