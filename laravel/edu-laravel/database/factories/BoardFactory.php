<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Board>
 */
class BoardFactory extends Factory
{
    //* 팩토리 생성
    //php artisan make:factory BoardFactory --model=Board

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-1 years');
        return [

                                //$nbDights => 몇자리 수인지 작성 1이면 0~9  
            'bcategory'     => $this->faker->randomNumber(1)
            ,'btitle'       => $this->faker->realText(100)
            ,'bcontent'     => $this->faker->realText(1000)
            ,'created_at'   => $date
            ,'updated_at'   => $date 

        ];
    }
}
