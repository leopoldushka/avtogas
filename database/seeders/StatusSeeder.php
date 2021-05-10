<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create ([
            'title' => 'Создана',
        ]);
        Status::create ([
            'title' => 'На исполнении',
        ]);
        Status::create ([
            'title' => 'Завершена',
        ]);
    }
}
