<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tjenis_berita extends Model
{
    use HasFactory;
    protected $table= 'tjenis_berita' ;
    protected $fillable= ['jenis_berita'] ;

    protected $primaryKey= 'id_jenis_berita';
    public $timestamps= false ;

    public function berita(){
        return $this->HasMany(berita::class, 'id_berita');
    }
}
