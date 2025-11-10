<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
    protected $fillable = ['deskripsi', 'gambar', 'name_client', 'profesi_client'];
}
