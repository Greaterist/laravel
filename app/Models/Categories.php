<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
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
        $categories = DB::select('SELECT * FROM categories');
        return $categories;
    }

    public function getCategoriesId($id)
     {
        $select = DB::select("SELECT * FROM categories WHERE id=:id", ['id' => $id]);
        return isset($select[0]) ? $select[0]: null;

        /*foreach ($this->getCategories() as $categories) {
            if ($categories['id'] == $id) {
                return $categories;
            }
        }
        return null;
        */
    }
}