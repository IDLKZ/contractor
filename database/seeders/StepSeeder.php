<?php

namespace Database\Seeders;

use App\Step;
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
        Step::create(["id"=>1, "title"=>"Отправлено"]);
        Step::create(["id"=>2, "title"=>"Принято в работу","previous_step"=>1]);
        Step::create(["id"=>3, "title"=>"Спецпроверка","previous_step"=>2]);
        Step::create(["id"=>4, "title"=>"Предложение","previous_step"=>3]);
        Step::create(["id"=>5, "title"=>"Подписание контракта","previous_step"=>4]);

    }
}
