<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    protected $table = 'jabatans';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'jabatan',
        'delstatus',
    ];


    public function pegawai()
    {
        return $this->hasMany(pegawai::class);
    }
}
