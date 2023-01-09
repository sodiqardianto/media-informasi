<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    // Menentukan nama table yang digunakan
    protected $table = 'pesan';

    protected $fillable = [
        'nama',
        'notelp',
        'email',
        'isipesan',
    ];
}
