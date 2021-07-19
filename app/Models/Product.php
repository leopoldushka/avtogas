<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public $timestamps = false;

    use HasFactory;

    protected $fillable = ['name', 'price', 'status_id', 'rank_id', 'term_id', 'producer_id'];
}
