<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_ruangan' ,'imgs'];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
