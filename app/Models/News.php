<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    /*private array $news = [
        [
            'id' => 1,
            'title' => 'News 1',
            'text' => 'text 1',
            'isPrivate' => false,
            'category_id' => '1'
        ],
        [
            'id' => 2,
            'title' => 'News 2',
            'text' => 'text 2',
            'isPrivate' => false,
            'category_id' => '2'
        ],
        [
            'id' => 3,
            'title' => 'News 3',
            'text' => 'text 3',
            'isPrivate' => true,
            'category_id' => '3'
        ]
        ];*/

    public function getNews(): array
    {
        $news = DB::select('SELECT * FROM news');
        return $news;
        //return json_decode((Storage::disk('local')->get('news.json')), true);
    }

    public function getNewsid($id)
     {
        $select = DB::select("SELECT * FROM news WHERE id=:id", ['id' => $id]);
        return isset($select[0]) ? $select[0]: null;

    }

    public function getNewsCategory($category)
     {
        $select = DB::select("SELECT * FROM news WHERE category_id=:category", ['category' => $category]);
        return $select;
        /*$newsArray = [];
        foreach ($this->getnews() as $news) {
            if ($news['category_id'] == $category) {
                $newsArray[]=$news;
            }
        }
        return $newsArray;*/
    }
}