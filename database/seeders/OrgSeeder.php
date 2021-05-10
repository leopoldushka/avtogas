<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Org;

class OrgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Org::create ([
            'name' => 'Кадастровая палата',
        ]);

        Org::create ([
            'name' => 'Управление Росреестра',
        ]);
    }
}
