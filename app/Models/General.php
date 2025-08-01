<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'inside', 'district', 'city', 'country', 'cellphone','office_phone', 'email', 'facebook', 'instagram','youtube', 'twitter', 'whatsapp',  'form_email', 'business_hours', 'schedule', 'mensaje_whatsapp', 'aboutus', 'titulo_liquidacion', 'titulo_destacados', 'meta_title', 'meta_description', 'meta_keywords', 'og_title', 'og_description', 'og_image', 'canonical_url'];

}
