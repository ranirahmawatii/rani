<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetugasKoperasi extends Model
{
    protected $fillabe = ['nama', 'alamat', 'no_tlp', 'tgl_lhr', 'tmpt_lhr',];
    public $timetamps = true;
}
