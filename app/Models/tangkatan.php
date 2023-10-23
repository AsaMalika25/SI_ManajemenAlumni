<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tangkatan extends Model
{
    use HasFactory;
    protected $table= 'tangkatan' ;
    protected $fillable= ['no_angkatan','tahun_masuk','tahun_keluar'] ;

    protected $primaryKey= 'id_angkatan';
    public $timestamps= false ;


    public function angkatan(){
        
        return $this->hasMany(talumni::class, 'id_angkatan');
    }
    public function kelasangkatan(){
        
        return $this->hasMany(tkelas::class, 'id_angkatan');
    }
}
