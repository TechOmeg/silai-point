<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    protected $fillable = [

        'name',
        'button_category_id',
        'code',
        'color',
        'size',
        'stock',
        'price',
        'material',
        'image',
        'description',
        'status',

    ];

    // CATEGORY RELATION
    public function category()
    {
        return $this->belongsTo(ButtonCategory::class, 'button_category_id');
    }
}