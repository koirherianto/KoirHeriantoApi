<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table='berita';

    protected $fillable=
    [
       'id','judul','isi','users_id','kategori_berita_id'
    ];
    public function kategoriberitas(){
        return $this->belongsTo( \App\Models\KategoriBerita::class, 'kategori_berita_id', 'id');
    }
    public function user(){
        return $this->belongsTo( \App\Models\user::class, 'users_id', 'id' );
    }
    use HasFactory;
}
