<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPinjaman extends Model
{
    protected $fillabe = ['nama_pinjaman', 'anggotas_id'];
    public $timetamps = true;
}
