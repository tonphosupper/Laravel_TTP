<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comment";

    public function tintuc(){
        return $this->belongsTo('App\BanTin','id_bantin','id');
    }

    public function user(){
        return $this->belongsTo('App\User','id_user','id');
    }
}
