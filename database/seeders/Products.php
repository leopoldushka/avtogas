<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class Products extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
        foreach ($categories as $category) {
            Product::create ([
                'category_id' => $category->id,
                'name' => 'Наименование',
                'price'=> '1000',
                'status_id'=> '1',
                'producer_id'=> '1',
                'rank_id'=> '1',
                'term_id'=> '1',
            ]);
        }
    }
}
