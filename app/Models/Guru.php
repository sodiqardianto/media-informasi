<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $fillable = [
        'namaguru', 'nipn', 'pendidikanterakhir', 'keahlianbahasa', 'picture'
    ];

    public function scopeFilter($query, array $filters)
    {
        return $query->when(
            $filters['search'] ?? false,
            fn ($query, $search)
            => $query->where('namaguru', 'like', '%' . $search . '%')
        );
    }
}
