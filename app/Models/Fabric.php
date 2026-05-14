<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fabric extends Model
{
    protected $fillable = [
        'fabric_category_id',
        'name',
        'code',
        'image',
        'color',
        'fabric_type',
        'price',
        'season',
        'description',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(FabricCategory::class, 'fabric_category_id');
    }
}