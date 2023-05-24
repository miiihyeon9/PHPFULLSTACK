<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;
    // 모델 생성 : php artisan make:model 테이블명 -mfs
                                            // 옵션으로 migration , factory, seeder 생성
                                            // 옵션을 하나만 생성할 경우에는 -- 붙여줘야함
    
    // 테이블 정의
    // 모델 안에서는 모두 protected
    // 정의하지 않을 경우에는 클래스 명의 복수형을 암묵적으로 인식한다. 
    protected $table = 'boards';

    // PK 정의 (정의하지 않을 경우에는 'id' 컬럼을 PK로 인식)
    protected $primaryKey = 'bno';

    // *대량 할당을 이용한 취약성 대책 
    // 둘 중 하나만 써야함 아니면 에러 뜸
    // 1. 화이트 리스트 방식 : 수정할 수 있는 컬럼을 설정
    // protected $fillable = ['column1','column2'];

    // 2. 블랙 리스트 방식 : 수정할 수 없는 컬럼을 설정
    // protected $guarded = ['column1','column2'];  
    // protected $guarded = []; 블랙리스트를 빈 배열로 만들면 수정이 가능함 (현업에서 편법?으로 사용하긴함)

    protected $guarded = [];
}
