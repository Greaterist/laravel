<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(News $news)
    {
        $news = News::query()->paginate(5);
        return view('News.index')->with('news', $news);
    }

    public function show($id, News $news)
    {

        if ($news == null) {
            return abort(404);
        }
        return view('News.one')->with('news', $news->getNewsid($id));
    }
}
