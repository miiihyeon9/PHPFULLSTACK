<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //* Migration 파일 따로 생성하는 명령어
    // : php artisan make:migration create_boards_table
    
    //* Migration 실행 
    // : php artisan migrate
    
    //* Migration Reset : 모든 migration 파일의 down()메소드를 실행(모든 마이그레이션을 되돌림)
    // !Drop했기 때문에 데이터를 되돌릴 수 없음 조심하3
    // : php artisan migrate:reset
    
    //* Migration Rollback : 가장 최근에 실행된 마이그레이션 내용을 롤백
    // : php artisan migrate:rollback
    
    // 기존에 있던 파일을 삭제할 필요없이 알아서 제외하고 생성해줌

    /**
     * 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            // 글번호, 제목, 내용, 작성일, 수정일, 삭제일, 삭제 여부  
            $table->id('bno');  // big_int, pk, auto_increment
            $table->char('bcategory',1)->index();// join해서 사용하는데 category 테이블의 category_no와 조인할려고
                                                 // char(1),not null , index추가
            $table->string('btitle',100); //varchar(100) not null ;  데이터베이스마다 다 다르기 때문에 하나로 통일하기 위해서 string 제한을 안정해주면 디폴트로 200일거임
            $table->string('bcontent',1000); // 4000자 이상일 경우에는 blob으로 해야함.
            $table->timestamps();   // created_at, update_at를 생성 null 가능 
            $table->timestamp('deleted_at')->nullable();// 라라벨에서 기대하는 컬럼명으로 지정할 경우 엘로퀀트 작성에 편리??
            $table->char('deleted_flg',1)->default('0');// char(1), default '0', not null char가 속도 제일 빠름 char> enum > int 순으로 빠름

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};
