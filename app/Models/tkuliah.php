<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tkuliah extends Model
{
    use HasFactory;
    protected $table= 'tkuliah' ;
    protected $fillable= ['id_alumni', 'nama_lembaga', 'jurusan_kuliah'] ;

    protected $primaryKey= 'id_kuliah';
    public $timestamps= false ;
}
