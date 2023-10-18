<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tkaprog extends Model
{
    use HasFactory;

    protected $table= 'tkaprog' ;
    protected $fillable= ['id_akun','id_jurusan','nama_kaprog','email'] ;

    protected $primaryKey= 'id_kaprog';
    public $timestamps= false ;
}
