<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    use HasFactory;
    protected $table = 'logs';
    protected $fillable = ['logs'];
    protected $primaryKey = 'id_log'; 
    public $timestamps = false;
}
