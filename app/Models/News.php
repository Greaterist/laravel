<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;

class News
{
    private array $news = [
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
        ];

    public function getNews(): array
    {
        return json_decode((Storage::disk('local')->get('news.json')), true);
    }

    public function getNewsid($id): ?array
     {
        if (array_key_exists($id, $this->getNews())){
            return $this->getNews()[$id];
        }
        return null;
    }

    public function getNewsCategory($category): ?array
     {
        $newsArray = [];
        foreach ($this->getnews() as $news) {
            if ($news['category_id'] == $category) {
                $newsArray[]=$news;
            }
        }
        return $newsArray;
    }
}