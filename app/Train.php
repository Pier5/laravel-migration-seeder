<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'company',
        'departure_station',
        'arrival_station',
        'departure_time',
        'arrival_time',
        'train_code',
        'train_carriage',
        'on_time',
        'deleated',
    ];
}
