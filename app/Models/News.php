<?php

namespace App\Models;

class News
{
    private static $news = [
        [
            'id' => 1,
            'title' => 'News 1',
            'text' => 'text 1',
            'category_id' => '1'
        ],
        [
            'id' => 2,
            'title' => 'News 2',
            'text' => 'text 2',
            'category_id' => '2'
        ],
        [
            'id' => 3,
            'title' => 'News 3',
            'text' => 'text 3',
            'category_id' => '3'
        ]
        ];

    public static function getNews(): array
    {
        return static::$news;
    }

    public static function getNewsid($id): ?array
     {
        foreach (static::getnews() as $news) {
            if ($news['id'] == $id) {
                return $news;
            }
        }
        return null;
    }

    public static function getNewsCategory($category): ?array
     {
        $newsArray = [];
        foreach (static::getnews() as $news) {
            if ($news['category_id'] == $category) {
                $newsArray[]=$news;
            }
        }
        return $newsArray;
    }
}