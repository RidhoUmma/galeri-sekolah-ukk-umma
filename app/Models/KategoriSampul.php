<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriSampul extends Model
{
    use HasFactory;
    protected $table = 'kategori_sampuls';

    protected $fillable = [
        'nama_kategori',
        'image_sampul',
    ];
    public function fotos()
    {
        return $this->hasMany(Foto::class, 'id_kategori');
    }
}
