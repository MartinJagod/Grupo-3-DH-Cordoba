<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class friend extends Model
{
    public $table= "table_friendship";
    public $guarded=[];

    protected $fillable = [
        'user_1','user_2', 'status'
    ];
}
