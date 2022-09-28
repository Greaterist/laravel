<?php

namespace App\Models;

class Categories
{
    private static $categories = [
        [
            'id' => 1,
            'title' => 'Спорт',
        ],
        [
            'id' => 2,
            'title' => 'Политика',
        ],
        [
            'id' => 3,
            'title' => 'Наука',
        ]
        ];

    public static function getCategories(): array
    {
        return static::$categories;
    }

    public static function getCategoriesId($id): ?array
     {
        foreach (static::getCategories() as $categories) {
            if ($categories['id'] == $id) {
                return $categories;
            }
        }
        return null;
    }
}