<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    // jika nama tabel tidak sesuai dengan aturan laravel, maka perlu dituliskan nama tabelnya
    // nama tabel yg sesuai untuk model Dosen yaitu dosens
    protected $table = 'dosen';

    // jika kolom primary key bukan id (default nama kolom nya id)
    // maka perlu dituliskan nama kolom yg menjadi primary key
    protected $primaryKey = 'id';

    // pilihan jika tidak ingin menyimpan timestamp pembuatan
    public $timestamps = true;

    protected $fillable = ['nik', 'nama_dosen', 'umur'];
}
