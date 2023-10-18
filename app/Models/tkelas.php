<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tkelas extends Model
{
    use HasFactory;
    protected $table= 'tkelas' ;
    protected $fillable= ['id_jurusan','id_angkatan','nama_kelas'] ;

    protected $primaryKey= 'id_kelas';
    public $timestamps= false ;
}
