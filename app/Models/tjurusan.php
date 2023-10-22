<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tjurusan extends Model
{
    use HasFactory;
    protected $table= 'tjurusan' ;
    protected $fillable= ['nama_jurusan'] ;

    protected $primaryKey= 'id_jurusan';
    public $timestamps= false ;

    public function jurusan(){
        
        return $this->hasMany(tkelas::class, 'id_akun');
    }
}
