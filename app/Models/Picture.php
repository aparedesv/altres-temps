<?php

namespace App\Models;

use Carbon\Carbon;
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

    protected $appends = ['carbonDate'];

    public function user()
    {
        return $this->belongsTo(Coordinate::class, 'id', 'id_user');
    }

    public function coordinate()
    {
        return $this->belongsTo(Coordinate::class, 'id', 'id_coordinate');
    }

    public function getCarbonDateAttribute()
    {
        return Carbon::parse($this->attributes['date']);
    }
}
