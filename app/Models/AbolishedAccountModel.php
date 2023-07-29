<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbolishedAccountModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'accountNum';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;
}
