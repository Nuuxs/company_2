<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class settingcontact extends Model
{
    protected $fillable = [
        'judul',
        'subjudul',
        'text_link',
        'deskripsi',
        'link',
        'text_button',
    ];
}
