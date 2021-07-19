<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

//class Category extends Seeder

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create ([
            'name' => 'Марка оборудования',
        ]);
        Category::create ([
            'name' => 'Монтажный набор',
        ]);
        Category::create ([
            'name' => 'Мультиклапан',
        ]);
        \Database\Seeders\Category::create ([
            'name' => 'Марка оборудования',
        ]);
    }

