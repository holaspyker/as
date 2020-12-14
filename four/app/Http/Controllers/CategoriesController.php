<?php

namespace App\Http\Controllers;

use App\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoriesController extends Controller
{
    public $categories;


    public function parseReponse($category, $parent_id = 0)
    {
        foreach ($category as $item) {
            $this->parseCategories($item, $parent_id);
        }
    }

    public function parseCategories($categ, $parent_id = 0)
    {
        $category = new categories();
        $category->id_foursquare = $categ["id"];
        $category->name = $categ["name"];
        $category->pluralName = $categ["pluralName"];
        $category->shortName = $categ["shortName"];
        $category->prefix = $categ["icon"]["prefix"];
        $category->suffix = $categ["icon"]["suffix"];
        $category->parent = $parent_id;
        $category->save();
        if (isset($categ['categories'])) {
            $this->parseReponse($categ['categories'], $category->id);
        }
    }


    public function getCategory()
    {
        $data = $this->getAllCategories();
        return View::make('category', ['data' => $data]);
    }

    public static function getChildrens($categories, $parent_id = 0)
    {
        $children=[];
        foreach ($categories as $val) {
            if ($val->parent == $parent_id) {
                $children[] = $val;
            }
        }
        return $children ?? null;
    }

    private function getAllCategories()
    {
        return categories::all();

    }




}
