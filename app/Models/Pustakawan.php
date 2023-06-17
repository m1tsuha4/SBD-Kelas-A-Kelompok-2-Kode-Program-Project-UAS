<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pustakawan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pustakawan',
        'jenis_kelamin',
        'tgl_lahir_pustakawan',
        'alamat_pustakawan',
        'tlp_pustakawan',
        'email_pustakawan'
    ];
}
