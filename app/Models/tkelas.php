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

    
    public function jurusan()
    {
        return $this->belongsTo(tjurusan::class);
    }
    public function angkatan()
    {
        return $this->belongsTo(tangkatan::class);
    }

    public function getJurusanAttribute()
    {
        return tjurusan::find($this->attributes['id_jurusan'])->nama_jurusan;
    }

    public function getAngkatanAttribute()
    {
        return tangkatan::find($this->attributes['id_angkatan'])->no_angkatan;
    }
   
}
