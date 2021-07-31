<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BanTin extends Model
{
    protected $table = "bantin";

    public function loaitin(){
        return $this->belongsTo('App\LoaiTin','id_loaitin','id');
    }
    public function comment(){
        return $this->hasMany('App\Comment','id_bantin','id');
    }

}
