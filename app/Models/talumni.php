<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class talumni extends Model
{
    use HasFactory;

    protected $table= 'talumni' ;
    protected $fillable= ['id_akun','id_kelas','id_angkatan','nama','tgl_lahir','alamat','email','no_telp','jenkel','sosmed','ijazah'] ;

    protected $primaryKey= 'id_alumni';
    public $timestamps= false ;

    public function kuliah()
    {
        return $this->hasMany(tkuliah::class, 'id_kuliah');
    }

    public function kerja()
    {
        return $this->hasMany(tkerja::class, 'id_kerja');
    }

    public function kelas()
    {
        return $this->belongsTo(tkelas::class);
    }
    public function angkatan()
    {
        return $this->belongsTo(tangkatan::class);
    }

    // One to Many
    public function akun()
    {
        return $this->belongsTo(takun::class);
    }

    // Get Attribute column
    public function getKelasAttribute()
    {
        return tkelas::find($this->attributes['id_kelas'])->nama_kelas;
    }

    public function getAkunAttribute()
    {
        return takun::find($this->attributes['id_akun'])->username;
    }
    public function getAngkatanAttribute()
    {
        return tangkatan::find($this->attributes['id_angkatan'])->no_angkatan;
    }
}
