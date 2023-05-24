<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kategori',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
