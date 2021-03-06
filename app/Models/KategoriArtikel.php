<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    use HasFactory;

    protected $table='kategori_artikel';

    protected $fillable=[
        'nama','users_id'
    ];

    public function Artikels(){
        return $this->hasMany('\App\models\Artikel::class', 'kategori_artikel_id', 'id');
    }

    public function user(){
        return $this->belongsTo('\App\models\user::class','user_id','id');
    }
}
