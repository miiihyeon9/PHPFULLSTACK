<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\CategorySeeder;    // CategorySeeder use
class DatabaseSeeder extends Seeder
{
        //  Seeder는 초기 데이터를 넣을 때 사용을 많이 함
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //! 초기 데이터 삽입용 시더 호출
        $this->call(CategorySeeder::class);

        // 더미 데이터 삽입용 팩토리 호출
        // $cnt = 0;
        // while($cnt <=5){
        //     $cnt++;
        // }
        
        \App\Models\Board::factory(20)->create();
        \App\Models\Review::factory(1000)->create();
    }
}
