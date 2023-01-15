<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';
    protected $fillable = [
        'idkategori',
        'iduser',
        'judul',
        'berita',
        'gambar',
        'carousel'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'idkategori');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }

    public function scopeFilter($query, array $filters)
    {
        return $query->when(
            $filters['search'] ?? false,
            fn ($query, $search)
            => $query->where('judul_berita', 'like', '%' . $search . '%')
        );
    }
}
