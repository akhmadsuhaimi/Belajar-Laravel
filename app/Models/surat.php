<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat extends Model
{
    protected $table = 'surat';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'nik',
        'nohp',
        'keterangan',
        'pengajuan_id',
        'delstatus',
    ];

    public function pengajuan()
    {
        return $this->belongsTo(pengajuan::class, "pengajuan_id");
    }

}
