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
}
