<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // table name where this model is stored
    protected $table = 'products';
    protected $guarded = [];
}
