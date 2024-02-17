<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'judul',
        'pembimbing_a',
        'pembimbing_b',
    ];


    // ini saya buat tapi error jack, muncul pesan lain.
    public function siswa()
    {
        return $this->belongsTo(Student::class, 'id_siswa');
    }

    public function pembimbing()
    {
        return $this->belongsTo(Tutor::class, 'id_pembimbing_a');
    }

    public function pembimbingb()
    {
        return $this->belongsTo(Tutor2::class, 'id_pembimbing_b');
    }
}
