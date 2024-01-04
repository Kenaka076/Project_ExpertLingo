<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';

    protected $fillable = ['id_guru', 'nama_guru', 'id_student', 'nama_student', 'jadwal', 'jam_mulai', 'jam_selesai'];



    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'id_student');
    }
}
