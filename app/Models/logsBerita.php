<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logsBerita extends Model
{
    use HasFactory;
    protected $table = 'logs_berita';
    protected $fillable = ['log'];
    protected $primaryKey = 'id_logs'; 
    public $timestamps = false;
}
