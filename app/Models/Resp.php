<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resp extends Model
{
    use HasFactory;
    protected $fillable = ['email', 'respon'];
}
