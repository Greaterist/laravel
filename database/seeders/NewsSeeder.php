<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
        $this->getData();
    }

    private function getData()
    {
        
        $faker = Faker::create('ru_RU');

        $data = [];
        for ($i=0; $i<10;$i++){
            $data[] = [
                'title' => $faker->sentence(rand(3, 10)),
                'text' => $faker->text(rand(50, 5000)),
                'isPrivate' => false,
                'category_id' => '1' 
            ];
        }
        return $data;
    }
}
