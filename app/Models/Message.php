<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'phone', 'e-mail', 'motor', 'carmaker', 'comment'];
}
