<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hafalan extends Model
{
    protected $table = 'ayat_user';

    protected $fillable = ['id', 'ayat_id', 'user_id', 'terhafal'];

    public $timestamps = false;
}
