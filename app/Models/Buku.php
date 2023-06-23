<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'id_penerbit');
    }
    protected $fillable =[
        'isbn',
        'judul',
        'penulis',
        'tahun_terbit',
        'jumlah_terpinjam',
        'id_pnb',
        'id_kategori'
    ];

}
