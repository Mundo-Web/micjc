<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeProductValue extends Model
{
    protected $table = 'attribute_product_values';

    public function attributeValue()
    {
        return $this->belongsTo(AttributesValues::class, 'attribute_value_id');
    }
}
