<?php

namespace Database\Seeders;

use App\Steps;
use Illuminate\Database\Seeder;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Steps::create(["id"=>1, "title"=>"Отправлено"]);
        Steps::create(["id"=>2, "title"=>"Принято в работу","previous_step"=>1]);
        Steps::create(["id"=>3, "title"=>"Спецпроверка","previous_step"=>2]);
        Steps::create(["id"=>4, "title"=>"Предложение","previous_step"=>3]);
        Steps::create(["id"=>5, "title"=>"Подписание контракта","previous_step"=>4]);

    }
}
