<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tsuperadmin extends Model
{
    use HasFactory;
    protected $table= 'tsuperadmin' ;
    protected $fillable= ['id_akun','username','password','nama','email'] ;

    protected $primaryKey= 'id_superadmin';
    public $timestamps= false ;
}
