<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perubahan extends Model
{
    use HasFactory;

    protected $fillable = array('ortu_id', 'progress');

    public function ortu(){
        return $this->belongsTo(Ortu::class);
    }
}
