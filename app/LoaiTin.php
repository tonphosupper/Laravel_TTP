<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    protected $table = "loaitin";

    public function bantin(){
        return $this->hasMany('app\BanTin','id_loaitin'.'id');
    }
}
