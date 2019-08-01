<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    protected $fillabe = ['angsurans_id', 'kategori_pinjamen', 'anggotas_id', 'tgl_pinjaman', 'angsuran_ke', 'besar_angsuran',];
    public $timetamps = true;
}
