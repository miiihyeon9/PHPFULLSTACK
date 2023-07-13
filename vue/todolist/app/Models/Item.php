<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    // 타입 캐스트
    protected $casts =[
        'completed' => 'boolean',
    ];


    protected $guarded = [];
    // completed_at 을 데이트 설정에 추가
    protected $dates = ['completed_at'];


    protected function serializeDate(DateTimeInterface $date){
        return $date->format('Y-m-d H:i:s');
    }
}
