<?php

namespace App\Models;

class Categories
{
    private array $categories = [
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

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function getCategoriesId($id): ?array
     {
        foreach ($this->getCategories() as $categories) {
            if ($categories['id'] == $id) {
                return $categories;
            }
        }
        return null;
    }
}