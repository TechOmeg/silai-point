<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FabricCategory extends Model
{
    protected $table = 'fabric_category';

    protected $fillable = [
        'name',
        'description',
        'image',
        'status',
    ];

    public function fabrics()
    {
        return $this->hasMany(Fabric::class, 'fabric_category_id');
    }
}