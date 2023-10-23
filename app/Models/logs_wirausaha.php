<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logs_wirausaha extends Model
{
    use HasFactory;
    protected $table = 'logs_wirausaha';
    protected $fillable = ['log'];
    protected $primaryKey = 'id_logs'; 
    public $timestamps = false;
}
