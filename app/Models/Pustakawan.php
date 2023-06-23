<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pustakawan extends Model
{
    use HasFactory;
    protected $table = 'pustakawan';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'user_id',
        'nama_pustakawan',
        'jenis_kelamin',
        'tgl_lahir_pustakawan',
        'alamat_pustakawan',
        'tlp_pustakawan',
        'email_pustakawan'
    ];
}
