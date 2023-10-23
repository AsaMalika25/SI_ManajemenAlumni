<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class tberita extends Model
{
    use HasFactory;

    protected $table= 'tberita' ;
    protected $fillable= ['id_jenis_berita','judul_berita','tgl_post','kode_berita','ket_berita','file'] ;

    protected $primaryKey= 'id_berita';
    public $timestamps= false;

    public function jenis_berita(){
        return $this->belongsTo(jenis_berita::class);
    }
    public function getJenisBeritaAttribute(){
        return tjenis_berita::find($this->attributes['id_jenis_berita'])->jenis_berita;
    }
}
