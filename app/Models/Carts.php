<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    protected $table = 'cart';

    protected $fillable = [
        'user_id', 'total_qty', 'grand_total'
    ];
}
