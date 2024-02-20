<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $table = 'foto';

    protected $fillable = [
        'id_kategori',
        'judul_foto',
        'image',
        'keterangan',
        'tgl_foto',
    ];
    public function kategori()
    {
        return $this->belongsTo(KategoriSampul::class, 'id_kategori');
    }
}
