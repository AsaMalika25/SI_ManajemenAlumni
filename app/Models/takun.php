<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class takun extends Authenticatable
{
    use HasFactory;

    protected $table = "takun";
    protected $fillable = ['username','password','role','profile'] ;
    protected $primaryKey = 'id_akun' ;
    public $timestamps = false ;
    
    public function alumni(){
        
        return $this->hasMany(talumni::class, 'id_akun');
    }
}
