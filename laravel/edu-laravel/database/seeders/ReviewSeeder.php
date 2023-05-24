<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class ReviewSeeder extends Seeder
{
    //* seeder 생성 명령어
    // php artisan make:seeder ReviewSeeder
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // *run() 메소드
    // db_seed Artisan command 실행될 때 호출 
    // run() 내에는 원하는 대로 데이터 삽입 가능 
    // 쿼리 빌더 사용하거나 수동으로 데이터 삽입 
    // run메소드에 필요한 모든 의존성의 타입힌트 지정 가능. 

    //*seeder 실행
    // php artisan db:seed
    
    //* 개별 실행
    // php artisan db:seed --class=ReviewSeeder

    // 모든 테이블 삭제하고 모든 마이그레이션을 다시 실행하는 --seed 옵션과 함께 
    // migrate:fresh 명령을 사용하여 데이터 베이스를 시드할 수 있음 
    // 이거는 데이터베이스를 완전히 재구축 하는데 용이
    // php artisan migrate:fresh --seed

    
    public function run()
    {
        DB::table('reviews')->insert([
            ['re_id'=>'admin','re_pw' => '123','re_age'=>'26','re_email' => 'miiiihyeon98@gmail.com', 're_con'=>'01000000000']
        ]);
    }
}
