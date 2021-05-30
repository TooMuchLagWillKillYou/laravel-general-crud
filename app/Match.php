<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'team1',
        'team2',
        'point1',
        'point2',
        'result'
    ];
}
