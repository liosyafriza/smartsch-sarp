<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class input_barang extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'seri', 'nama', 'tgl_beli', 'satuan', 'kategori','jml_baik', 'jml_rusak','ruangan','imgs'];
}
