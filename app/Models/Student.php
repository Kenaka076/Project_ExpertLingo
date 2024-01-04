<?php

// app/Models/Student1.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'firstName', 'lastName', 'email', 'phoneNumber', 'password',
    ];

    protected $hidden = [
        'password',
    ];
    

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'id_student');
    }
}
