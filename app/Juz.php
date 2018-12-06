<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juz extends Model
{
    protected $table = "juz";

    public function ayats(){
        return $this->hasMany('App\Ayat', 'nomor_juz', 'nomor_juz');
    }
}
