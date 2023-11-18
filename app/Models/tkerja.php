<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tkerja extends Model
{
    use HasFactory;
    protected $table= 'tkerja' ;
    protected $fillable= ['id_alumni', 'instansi', 'jabatan'] ;

    protected $primaryKey= 'id_kerja';
    public $timestamps= false ;

    public function kerja()
    {
        return $this->belongsTo(talumni::class);
    }
    public function getKerjaiAttribute()
    {
        return talumni::find($this->attributes['id_alumni'])->nama;
    }
}
