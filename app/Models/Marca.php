<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'name',
        'status', 
        'visible'
    ];

    public function productos()
    {
        return $this->hasMany(Products::class);
    }

    public function subcategoria()
    {
        return $this->belongsToMany(Marca::class, 'subcategories_x_marcas', 'subcat_id', 'marca_id');
    }
}
