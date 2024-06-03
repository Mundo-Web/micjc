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
    'status'] ; 

    

    public function categories()
    {
        return $this->belongsTo(Category::class, 'categoria_id');
    }

}
