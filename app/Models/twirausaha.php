<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class twirausaha extends Model
{
    use HasFactory;
    protected $table = "twirausaha";
    protected $fillable = ['nama_usaha','bidang', 'gambar_usaha'] ;
    protected $primaryKey = 'id_wirausaha' ;
    public $timestamps = false ;
}
