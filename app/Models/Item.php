<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'dagangan', 'kontak', 'latitude', 'longitude']; // Tambahkan kolom yang ada di tabel `items`
}

