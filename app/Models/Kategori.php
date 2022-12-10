<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Menentukan field yang bisa diisi
    protected $fillable = [
        'namakategori',
    ];

    // Menentukan nama table yang digunakan
    protected $table = 'kategori';

    // Menentukan relasi one-to-many dengan model Berita
    public function berita()
    {
        return $this->hasMany('App\Berita');
    }
}
