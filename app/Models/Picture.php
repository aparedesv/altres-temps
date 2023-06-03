<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Picture extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'id_coordinate',
        'picture',
        'name',
        'date'
    ];

    public function coordinate()
    {
        return $this->belongsTo(Coordinate::class, 'id', 'id_coordinate');
    }
}
