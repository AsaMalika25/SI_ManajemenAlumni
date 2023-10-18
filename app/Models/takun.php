<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class takun extends Model
{
    use HasFactory;

    protected $table = "takun";

    protected $fillable = ['username','password','role'] ;
    protected $primaryKey = 'id_akun' ;
    public $timestamps = 'id_akun' ;
}
