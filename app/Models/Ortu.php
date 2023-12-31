<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    use HasFactory;


    protected $table = 'ortu';

    protected $fillable = array('nama_ortu', 'nama_anak', 'alamat', 'kontak_wa');

    public function perubahans(){
        return $this->hasMany(Perubahan::class);
    }

}
