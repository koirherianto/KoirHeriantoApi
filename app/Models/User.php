<?php

namespace App\Models;
use App\Models\Galeri;
use App\Models\Kategorigaleri;
use App\Models\Berita;
use App\Models\KategoriBerita;
use App\Models\Pengumuman;
use App\Models\KategoriPengumuman;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Artikels(){
        return $this->hasMany('\app\Models\Artikel::class','user_id','id');
    }

    public function KategoriArtikels(){
        return $this->hasMany('\app\Models\KategoriArtikel::class','user_id','id');
    }

    public function beritas(){
        return $this->hasMany(\App\Models\Berita::class,'users_id','id');
    }

    public function kategoriberitas(){
        return $this->hasMany(\App\Models\KategoriBerita::class,'users_id','id');
    }

    public function galeris(){
        return $this->hasMany(\App\Models\Galeri::class,'users_id','id');
    }

    public function kategorigaleris(){
        return $this->hasMany(\App\Models\KategoriGaleri::class,'users_id','id');
    }

    public function Pengumumans(){
        return $this->hasMany(\App\Models\Pengumuman::class,'users_id','id');
    }

    public function KategoriPengumumans(){
        return $this->hasMany(\App\Models\KategoriPengumuman::class,'users_id','id');
    }

   
}
