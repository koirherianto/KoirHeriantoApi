<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\artikel;
use App\models\pengumuman;
use App\models\galeri;
use App\models\KategoriGaleri;

class BabSatuController extends Controller
{
    public function a1(){

        $artikels=Artikel::where('id',2)->where('users_id',2)->get();
 
        return $artikels;
    }

    public function a2(){

        $artikels=Artikel::where('id',12)->where('users_id',12)->get();
 
        return $artikels;
    }

     // //Soal 3
    //Tampilkan artikel dengan id=3 dan user dengan nama  =Aslijan Megantara
    public function a3(){
        $artikels=Artikel::where('id',23)->whereHas('user',function($query){
            $query->where('name','Dodo Iswahyudi ');
        })->with('user')->get();
        return $artikels;
    }
    // //Soal 4
     //Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan galeri id=269
     public function a4(){
         $pengumumans=Pengumuman::whereHas('user',function($query){
             $query->whereHas('galeris',function ($query){
                 $query->where('id',39 );
             });
         })->with('user.galeris')->get();

         return $pengumumans;
        }
}
