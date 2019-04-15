<div class="eventsCalendarContainer" style="display:none;">
    <a class="ath-events" href="http://gomessiah.com/calendar.aspx" style="
float: left; text-transform: uppercase;">View upcoming athletic events</a>
        <form id="calendarSearch" class="custom-events__search">
            <label class="visually-hidden" for="calendarSearchQuery">Search</label>
            <input id="calendarSearchQuery" class="txt" type="text" name="query" value="">
            <input class="btn" type="submit" value="Search">
        </form>
    <div id="selectedCategoriesText" class="selectedCategoriesText"></div>
    <div id='fc_calendar'></div>

    <?php if (!isset($ignoreFiltering) || $ignoreFiltering == false): ?>
        <div class="origCategoriesForm" style="display:none;">
            <form action="#" class="filterForm" method="POST">
                <div class="accordionForm">
<?php
                    foreach ($categories as $category):
                        $hasSubCategories = !empty($category->childCategories);
?>
                    <div class="accordionForm__block">
<?php
                        if ($hasSubCategories):
?>
                        <i class="accordionForm__icon accordionForm__icon--open"></i>
<?php
                        endif;
?>
<?php
                        $checked = (in_array($category->id, $selectedCategories) ? 'checked' : '');
                        print '<label class="accordionForm__category" for="category-' . $category->id . '"><input type="checkbox" name="category-' . $category->id . '" value="' . $category->id . '" ' . $checked . '/>' . $category->name . '</label>';

                        if ($hasSubCategories):
                            print '<ul class="accordionForm__subcat-list accordionForm__subcat-list--hidden">';
                            foreach ($category->childCategories as $childCategory):
                                $childChecked = (in_array($childCategory->id, $selectedCategories)) ? 'checked' : '';

                                print '<label for="category-' . $childCategory->id . '" class="accordionForm__subcat-item"><input type="checkbox" id="category-' . $childCategory->id . '" name="category-' . $childCategory->id . '" value="' . $childCategory->id . '" ' . $childChecked . '/>' . $childCategory->name . '</label>';
                            endforeach;
                            print '</ul>';
                        else:
                            print '<div></div>';
                        endif;
?>
                    </div>
<?php
                    endforeach;
?>
                </div>
                <input class="btn" type="submit" value="Apply">
            </form>
        </div>
    <?php endif; ?>
</div>
