<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index ()
    {
        return view('Admin.index');
    }

    public function createNews (Request $request, Categories $categories)
    {
        if($request->isMethod('post')){
            $request->flash();
            $news = new News();
            $news = $news->getNews();
            $newData = $request->except('_token');
            $newData['id'] = count($news);
            //dd($news); 
            if (!isset($newData['isPrivate'])){
                $newData['isPrivate'] = false;
            }
            $news[] = $newData;
            Storage::disk('local')->put('news.json', json_encode($news, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
            return redirect()->route('news.one', $newData['id']);
        }
        return view('Admin.createNews',[
            'categories' => $categories->getCategories()
        ]);
    }

    public function test1 ()
    {
        return response()->download('index.png');
    }

    public function test2 (News $news)
    {
        return response()->json($news->getNews())
                        ->header('Content-Disposition', 'attachment; filename = "json.txt')
                        ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}