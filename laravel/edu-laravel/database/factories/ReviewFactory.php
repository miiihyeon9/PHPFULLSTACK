<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    //*팩토리 생성
    //php artisan make:factory ReviewFactory
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-1 years');
        return [
            're_id'=>$this->faker->text(8)
            ,'re_pw'=>$this->faker->text(12)
            ,'re_age'=>$this->faker->randomNumber(2)
            ,'re_email'=>$this->faker->email(30)
            ,'re_con'=>"010".$this->faker->numerify('########')
            ,'created_at'   => $date
            ,'updated_at'   => $date 
            // $table->increments('re_no');
            // $table->string('re_id',100);
            // $table->string('re_pw',100);
            // $table->char('re_age',3);
            // $table->string('re_email',100)->unique();
            // $table->char('re_contact',11)->unique();
            // $table->char('del_flg',1)->default('0');
            // $table->timestamps();
            // $table->timestamp('deleted_at')->nullable();    
        
        ];
    }
}
