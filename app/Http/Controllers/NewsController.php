<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index (): string
     {
        $news = News::getNews();
        return view('news')->with('news', $news);
    }

    public function show($id): string
    {
        $news = News::getNewsid($id);
        if($news ==null){
            return abort(404);
        }
        return view('newsOne')->with('news', $news);
    }
}
