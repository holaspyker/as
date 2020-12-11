<?php

namespace App\Http\Controllers;

use App\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{


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
//                var_dump($categ['categories']);
                $this->parseReponse($categ['categories'], $category->id);
            }


//        }catch (\Exception $e){
//
//            dump(($categ));
//
//        }
    }


}
