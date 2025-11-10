<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul','subjudul','gambar','deskripsi','text_button','icon',
        'no_hp','ket_no_hp','judul_team','subjudul_team'
    ];
}
