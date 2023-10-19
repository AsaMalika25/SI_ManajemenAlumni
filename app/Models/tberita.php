<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tberita extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======

    protected $table= 'tberita' ;
    protected $fillable= ['id_alumni','id_admin','id_jenis_berita','judul_berita','tgl_post','kode_berita','ket_berita'] ;

    protected $primaryKey= 'id_alumni';
    public $timestamps= false ;
>>>>>>> 805c0a560fda3bb4a8c2b67a5a0d8b80d14f5b32
}
