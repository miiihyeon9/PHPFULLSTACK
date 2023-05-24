<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //* Seeder (초기 데이터 생성) : database\seeders의 각 클래스 파일 확인
        // - 
        // -

    //* factory (더미 데이터 생성) : database\factories의 각 클래스 파일 확인
        // - 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            //  id는 기본적으로 데이터타입이 bigint인데 bigint는 43억명 이상이 사용할 경우에 사용하고 아닌 경우에는 int를 쓸 지 bigint를 사용할지 정해야함
            // 왜나하면 bigint가 용량을 더 많이 차지함 (bigint는 8바이트, int는4바이트)
            //메모리 용량, 서버 저장 공간, 쿼리 속도
            $table->id();
            $table->char('no',1)->unique();
            $table->string('name',30)->unique();
            $table->char('active_flg',1)->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
