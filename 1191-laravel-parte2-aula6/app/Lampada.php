<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampada extends Model
{
    protected $table = 'lampadas';
    public $timestamps = false;
    protected $fillable = ['status'];
}
