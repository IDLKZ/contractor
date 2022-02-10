<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"Admin Adminov",
            "role_id"=>1,
            "email"=>"admin@gmail.com",
            "phone"=>"+77007777777",
            "password"=>bcrypt("admin123")
        ]);
    }
}
