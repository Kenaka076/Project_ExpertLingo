<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = [
        'nama_guru','phoneNumber',
    ];
    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'id_guru');
    }
}