<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tangkatan extends Model
{
    use HasFactory;
    protected $table= 'tangkatan' ;
    protected $fillable= ['id_angkatan','no_angkatan','tahun_masuk','tahun_keluar'] ;

    protected $primaryKey= 'id_alumni';
    public $timestamps= false ;
}
