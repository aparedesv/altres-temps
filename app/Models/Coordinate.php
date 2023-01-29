<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coordinate extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';

    protected $fillable = [
        'latitude',
        'longitude',
        'created_by'
    ];
}
