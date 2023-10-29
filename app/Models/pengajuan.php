<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan extends Model
{
    protected $table = 'pengajuan';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'jenispengajuan',
        'delstatus',
    ];

    public function surat()
    {
        return $this->hasMany(surat::class);
    }
}
