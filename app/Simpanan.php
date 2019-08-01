<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    protected $fillabe = ['nama_simpanan', 'anggotas_id', 'tgl_simpanan', 'besar_simpanan'];
    public $timetamps = true;
}
