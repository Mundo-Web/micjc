<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'categoria_id',
        'status'
    ];



    public function categories()
    {
        return $this->belongsTo(Category::class, 'categoria_id');
    }

    public function products()
    {
        return $this->hasMany(Products::class, 'sub_cat_id', 'id');
    }

    public function marcas()
    {
        return $this->belongsToMany(Marca::class, 'subcategories_x_marcas', 'subcat_id', 'marca_id');
    }
}
