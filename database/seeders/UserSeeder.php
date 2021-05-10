<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create ([
            'name' => 'user1', 'fio' => 'Тест Тестович Тестов', 'activity'=>'1', 'org_id'=>'1', 'email' => 'ttt@test.ru', 'password' =>bcrypt('user1'),
        ]);
        User::create ([
            'name' => 'user2', 'fio' => 'Проверка Проверковна Проверкович', 'activity'=>'1', 'org_id'=>'2', 'email' => 'ppp@test.ru', 'password' =>bcrypt('user2'),
        ]);
        User::create ([
            'name' => 'user3', 'fio' => 'Хрен Редькович Неслащев', 'activity'=>'1', 'org_id'=>'1', 'email' => 'hrn@test.ru','password' =>bcrypt('user3'),
        ]);
        User::create ([
            'name' => 'user4', 'fio' => 'Читун Редактович Статистиков', 'activity'=>'1', 'org_id'=>'1', 'email' => 'crs@test.ru', 'password' =>bcrypt('user4'),
        ]);
    }
}
