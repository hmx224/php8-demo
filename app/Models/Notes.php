<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    //指定表名
    public $table = 'hd_notes';

    //指定主键
    public $primaryKey = 'id';

    //是否开启时间戳
    public $timestamps = false;

    //设置时间戳格式为Unix
    public $dateFormat = 'U';

    //过滤字段，只有包含的字段才能被更新
    public $fillable = ['content'];

    //隐藏字段
//    public $hidden = ['password'];
}
