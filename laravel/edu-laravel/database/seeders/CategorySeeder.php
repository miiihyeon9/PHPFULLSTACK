<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    // * 초기 데이터 생성 
    // 1. 시더 클래스 생성(database\seeders에 생성됨 ) : php artisan make:seeder CategorySeeder
    // 2. database\seeders\DatabaseSeeder->run() 안에 1에서 생성한 시더 클래스를 콜에 추가 
    // 3. 1에서 생성한 시더 클래스에 레코드 추가 코드를 작성(해당 클래스의 run()메소드에 작성하면 됨)
    // 4-1. 개별 시더 실행 : php artisan db:seed --class=CategorySeeder
                                                // 클래스명
    // 4-2. database\seeders\DatabaseSeeder->run()에 설정된 모든 시더 및 팩토리 실행  php artisan db:seed




    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //* 쿼리 빌더를 이용하여 쿼리 작성
        DB::table('categories')->insert([
                        ['no' => '1','name' => 'category1' ]
                        ,['no' => '2','name' => 'category2' ]
                        ,['no' => '3','name' => 'category3' ]
                        ,['no' => '4','name' => 'category4' ]
                        ,['no' => '5','name' => 'category5' ]
                        ,['no' => '6','name' => 'category6' ]
                        ,['no' => '7','name' => 'category7' ]
                        ,['no' => '8','name' => 'category8' ]
                        ,['no' => '9','name' => 'category9' ]]);
                        // 여러 데이터를 넣고 싶을 때는 ,[]해서 배열에 값을 넣어주면 됨
    }
}
