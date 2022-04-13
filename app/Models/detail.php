<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    use HasFactory;
    protected $fillable=['tanggal','waktu','lokasi','suhu_tubuh'];
    protected $table='detail_perjalanan';
}
