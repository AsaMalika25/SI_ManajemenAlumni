<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class talumni extends Model
{
    use HasFactory;

    protected $table= 'talumni' ;
    protected $fillable= ['id_akun','id_kelas','nama','tgl_lahir','alamat','email','no_telp','jenkel'] ;

    protected $primaryKey= 'id_alumni';
    public $timestamps= false ;
}
