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
        
        if ($request->isMethod('post')) {

            $news = new News();

            $name = null;
            if ($request->file('image')) {
                $path = Storage::putFile('public/images', $request->file('image'));
                $name = Storage::url($path);
            }

            $data = $request->except('_token');
            if (!isset($data['isPrivate'])){
                $data['isPrivate'] = false;
            }
            $news->fill($data)->save();


            return redirect()->route('admin.createNews')->with('success', 'Новость добавлена успешно!');

        }

        $news = new News();
        return view('Admin.createNews', [
            'news' => $news,
            'categories' => Categories::query()->select(['id', 'title'])->get()
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