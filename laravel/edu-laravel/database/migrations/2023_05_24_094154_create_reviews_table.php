<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //! 마이그레이션 따로 생성
    // php artisan make:migration 파일명

    //* 마이그레이션 전체 생성
    // php artisan migrate(이미 있을 경우 알아서 제외하고 만들어줌)

    //* 마이그레이션 되돌리기 (롤백)
    // php artisan migrate:rollback

    //* 제한된 숫자만큼 마이그레이션 (예시로는 최근 2개의 마이그레이션만 되돌림)
    // php artisan migrate:rollback --step=2

    // * 모든 마이그레이션 되돌림
    // php artisan migrate:reset 

    //! 하나의 명령어로 롤백과 마이그레이트 함께 실행 
    // 모든 마이그레이션을 되돌리고 migrate명령어를 실행한다 => 전체 데이터 베이스를 효과적으로 재생성 
    // php artisan migrate:refresh
    // step 옵션을 전달하면 제한된 숫자의 마이그레이션만 되돌리고 다시 마이그레이션 실행
    //  php artisan migrate:refresh --step=1 

    //모든 테이블과 마이그레이션 Drop
    //! migrate 명령은 접두어에 관계없이 모든 데이터 베이스 테이블 삭제. 
    //! 다른 응용 프로그램과 공유되는 데이터베이스에서 개발할 때 주의
    // php artisan migrate:fresh 

    // php artisan migrate:fresh --seed 

    /**
     * Run the migrations.
     *
     * @return void
     */

    
    public function up()
    {
        //* 테이블 생성하기
        // Schema::create('테이블 명',function (Blueprint $table){
        // table 조건들 작성 
        // }) 
        // *테이블 수정 / 생성
        // Schema::table('테이블 명',function(Blueprint $table){
            // 수정할 컬럼 
            // ex)
            // $table->integer('vote');
        // })
        //* 테이블 이름 변경/ 제거
        // Schema::rename($from,$to)

        //*테이블 드랍 및 제거
        // Schema::drop('users')
        //          or
        // Schema::dropIfExists('users');

        Schema::create('reviews', function (Blueprint $table) {
            // $table->id('re_no');
            $table->increments('re_no');
            $table->string('re_id',100);
            $table->string('re_pw',100);
            $table->char('re_age',3);
            $table->string('re_email',100)->unique();
            $table->string('re_con',100)->unique();
            $table->char('del_flg',1)->default('0');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }

};
