<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tberita extends Model
{
    use HasFactory;

    protected $table= 'tberita' ;
    protected $fillable= ['id_alumni','id_admin','id_jenis_berita','judul_berita','tgl_post','kode_berita','ket_berita'] ;

    protected $primaryKey= 'id_alumni';
    public $timestamps= false ;
}
