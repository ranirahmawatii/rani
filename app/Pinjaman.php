<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $fillabe = ['nama_pinjaman', 'anggotas_id', 'besar_pinjaman', 'tgl_pengajuan_pinjaman', 'tgl_acc_pinjaman', 'tgl_pinjaman', 'tgl_pelunasan', 'angsurans_id'];
    public $timetamps = true;
}
