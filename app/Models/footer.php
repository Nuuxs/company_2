<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class footer extends Model
{
    protected $fillable = ['nama_company', 'deskripsi', 'alamat', 'no_hp', 'email', 'link_ig', 'link_fb', 'link_twitter', 'link_in', 'nama_website', 'teks_copyright'];
}
