<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailAngsuran extends Model
{
    protected $fillabe = ['tgl_jatuh_tempo', 'besar_angsuran',];
    public $timetamps = true;
}
