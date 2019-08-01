<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    protected $fillabe = ['nama', 'alamat', 'tgl_lhr', 'tmpt_lhr', 'jk', 'status', 'no_tlp'];
    public $timetamps = true;

public function simpanan() {
    return $this->hasMany('App\Simpanan', 'anggotas_id');

}

public function angsuran() {
    return $this->hasMany('App\Angsuran', 'anggotas_id');
    
}

public function pinjaman() {
    return $this->hasMany('App\Pinjaman', 'anggotas_id');
    
}
}

