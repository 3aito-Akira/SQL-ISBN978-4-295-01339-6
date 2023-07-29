<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    use HasFactory;

    protected $primaryKey = 'causeID';

    //public $incrementing = false;

    //protected $keyType = 'string';

    public $timestamps = false;
}
