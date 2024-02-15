<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $table = 'pembimbing2';
    protected $fillable = ['id', 'nama', 'spesialisasi'];

    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class, 'id_pembimbing_a');
    }
}
