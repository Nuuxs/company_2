<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class informasiblog extends Model
{
    protected $fillable = [
        'gambar',
        'name_folder',
        'judul',
        'deskripsi',
        'text_button',
    ];
}
