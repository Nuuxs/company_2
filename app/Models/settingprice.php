<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class settingprice extends Model
{
    protected $fillable =['nama_halaman','text_price','ket_price','judul_price','text_discount','discount','ket_discount','deskripsi_discount','text_button'];
}
