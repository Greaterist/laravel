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
        $categories = Categories::query()->get();
        return view('News.categories')->with('categories', $categories);
    }

    public function show($id, Categories $categories, News $news)
    {
        $category = Categories::query()->where('id', $id)->exists();
        if(!$category){
            return abort(404);
        }
        $news = News::query()->where('category_id', $id)->get();
        return view('News.category')->with('news', $news);
    }
}
