<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = "surat";
    
    public function ayats(){
        return $this->hasMany('App\Ayat', 'nomor_surat', 'nomor_surat');
    }
}