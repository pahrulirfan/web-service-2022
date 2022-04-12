<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

//    public $timestamps = false;

    protected $fillable = ['nik', 'nama_dosen', 'umur'];
}
