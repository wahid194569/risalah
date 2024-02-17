<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $fillable = ['id', 'nama', 'kelas'];
    

    // jelaskan function dibawah ini
    // function dibawah ini adalah relasi dari model Student ke model Pengajuan
    // relasi ini adalah one to many, dimana satu siswa bisa memiliki banyak pengajuan
    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class, 'id_siswa');
    }

    public function penerimaan()
    {
        return $this->hasMany(Penerimaan::class, 'id_siswa');
    }

    // Lagi mnecari solusi untuk menampilkan data 'pengajuan' dari model 'Student' ke view 'student.index'
    // kalau ada yang tau silahkan komentar di video ini


}