<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    protected $table='kategori_galeri';

    protected $fillable=[
        'nama','users_id'
    ];

    public function galeris(){
        return $this->hasMany(\App\models\galeri::class, 'kategori_galeri_id', 'id');
    }

    public function user(){
        return $this->belongsTo(\App\models\user::class,'user_id','id');
    }
    use HasFactory;
}
