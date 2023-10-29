<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table = 'berita';
    protected $primarykey = 'id';
    protected $fillable = [
        'judul',
        'url',
        'tgl',
        'isi',
        'gambar',
        'delstatus',
    ];

}
