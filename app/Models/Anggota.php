<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'user_id',
        'nomor_anggota',
        'nama_anggota',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
        'email',
        'nomor_telepon'
    ];
}
