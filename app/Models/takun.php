<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class takun extends Authenticatable
{
    use HasFactory;

    protected $table = "takun";
    protected $fillable = ['username','password','role'] ;
    protected $primaryKey = 'id_akun' ;
    public $timestamps = false ;
}
