<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = ['date', 'order_index','order_branch'];

    public $incrementing = false;

    public $timestamps = false;
}
