<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    protected $fillable = [

        'seena',
        'teera',
        'bazu_length',
        'kameez_length',
        'collar',
        'armhole',
        'shalwar_length',
        'pancha',
        'instructions',

    ];
}