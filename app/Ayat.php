<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayat extends Model
{
    protected $table = "ayat";

    public function juz()
    {
        return $this->belongsTo('App\Juz', 'nomor_juz', 'nomor_juz');
    }

    public function surat()
    {
        return $this->belongsTo('App\Surat', 'nomor_surat', 'nomor_surat');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
