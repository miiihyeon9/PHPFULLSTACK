<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // 모델 생성하는 명령어
    // php artisan make:model Review -mfs (migration factory seeder 생성)
    //                                 만약에 하나만 생성하고 싶다면 --하고 옵션 작성

    protected $table = 'reviews';
    protected $primaryKey = 're_no';

    // 수정할 수 있는 컬럼을 지정하거나, 수정할 수 없는 컬럼 지정
    protected $guarded = ['re_age'];
}
