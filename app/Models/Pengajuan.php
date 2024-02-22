<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan';
    protected $fillable = [
        'id_siswa',
        'judul_a',
        'judul_b',
        'judul_c',
        'keterangan',
        'id_pembimbing_a',
        'id_pembimbing_b',
    ];
    public $timestamps = false;


    // function dibawah ini adalah relasi dari model Pengajuan ke model Student relasi ini adalah many to one, dimana banyak pengajuan bisa dimiliki oleh satu siswa
    public function siswa()
    {
        // return $this->belongsTo('App\Models\Student', 'id_siswa', 'id');
        return $this->belongsTo(Student::class, 'id_siswa');
    }

    public function pembimbing()
    {
        return $this->belongsTo(Tutor::class, 'id_pembimbing_a');
    }
    public function pembimbing2()
    {
        return $this->belongsTo(Tutor2::class, 'id_pembimbing_b');
    }
}
