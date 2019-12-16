<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='table_post_user';

    protected $fillable = ['text_post','user_id_post','id_photo'];

   public function user(){
       return $this->belongsTo('App\User','user_id_post');
   }
}
