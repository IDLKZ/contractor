<?php

namespace Database\Seeders;

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['id' => 1,"title"=>"Администратор"]);
        Role::create(['id' => 2,"title"=>"Пользователь"]);
    }
}
