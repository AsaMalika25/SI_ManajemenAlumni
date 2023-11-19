<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tkuliah extends Model
{
    use HasFactory;
    protected $table= 'tkuliah' ;
    protected $fillable= ['id_alumni', 'nama_lembaga', 'jurusan_kuliah'] ;

    protected $primaryKey= 'id_kuliah';
    public $timestamps= false ;

    public function kuliah()
    {
        return $this->belongsTo(talumni::class);
    }
    public function getKuliahiAttribute()
    {
        return talumni::find($this->attributes['id_alumni'])->nama;
    }
    public function alumni(){
        return $this->belongsTo(talumni::class, 't_alumni');
    }
}
