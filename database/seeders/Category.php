<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Модель оборудования',
        ]);
        DB::table('categories')->insert([
            'name' => 'Мультиклапан',
        ]);
        DB::table('categories')->insert([
            'name' => 'Монтажный набор',
        ]);

    }
}
