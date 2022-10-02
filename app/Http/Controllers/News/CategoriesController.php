<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Categories $categories)
    {
        return view('News.categories')->with('categories', $categories->getCategories());
    }

    public function show($id, Categories $categories, News $news)
    {

        if ($categories->getCategoriesId($id) == null) {
            return abort(404);
        }

        return view('News.category')->with('news', $news->getNewsCategory($id));
    }
}
