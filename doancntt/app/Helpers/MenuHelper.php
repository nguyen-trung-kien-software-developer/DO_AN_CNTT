<?php

namespace App\Helpers;


class MenuHelper
{
    public static function renderSubCategoryList($subCategories)
    {
        $firstListHtml = '<ul class="ul_child_menu_left_1_1">';
        $secondListHtml = '<ul class="ul_child_menu_left_1_1">';
        $firstSubCategoryItems = '';
        $secondSubCategoryItems = '';
        $count = 1;

        foreach ($subCategories as $subCategory) {
            if ($count > 28) {
                break;
            }

            if ($count % 2 != 0) {
                $firstSubCategoryItems .= '<li>
                <a class="a_cap_1" href="' . route('site.subCategory.index', [$subCategory->parentCategory->slug, $subCategory->slug]) . '"
                    title="' . $subCategory->name . '">' . $subCategory->name . '</a>
                    </li>';
            } else {
                $secondSubCategoryItems .= '<li>
                <a class="a_cap_1" href="' . route('site.subCategory.index', [$subCategory->parentCategory->slug, $subCategory->slug]) . '"
                    title="' . $subCategory->name . '">' . $subCategory->name . '</a>
                    </li>';
            }
            $count++;
        }

        $firstListHtml .= $firstSubCategoryItems . "</ul>";
        $secondListHtml .= $secondSubCategoryItems . "</ul>";

        return $firstListHtml . $secondListHtml;
    }
}