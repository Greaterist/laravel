<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index (): string
     {
        $categories = Categories::getCategories();
        return view('categories')->with('categories', $categories);
    }

    public function show($id): string
    {
        $news = News::getNewsCategory($id);
        $categories = Categories::getCategoriesId($id);
        if($categories ==null){
            return abort(404);
        }

        return view('newsCategory')->with('news', $news);
    }
}
