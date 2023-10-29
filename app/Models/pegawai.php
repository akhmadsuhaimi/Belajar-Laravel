<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'tgl_lahir',
        'tempat_lahir',
        'agama',
        'jabatan_id',
        'delstatus',
    ];


    public function jabatan()
    {
        return $this->belongsTo(jabatan::class, "jabatan_id");
    }
}
