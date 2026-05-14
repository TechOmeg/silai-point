<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ButtonCategory extends Model
{
    protected $fillable = [
        'name',
        'image',
        'description',
        'status',
    ];
}