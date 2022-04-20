<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeoLoc extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $table = 'geo_locations';

    protected $casts = [
        'request' => 'array',
        'response' => 'array',
    ];

    public function message()
    {
        return $this->belongsTo(Message::class, 'id','geo_loc_id');
    }
}
