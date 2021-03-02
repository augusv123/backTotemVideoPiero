<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablet extends Model
{
    use HasFactory;

    protected $fillable = [
        'identificacion',
        'descripcion',
        'descripcion2',
        'video1',
        'video2',
        'qr1',
        'qr2',
        'qr1video2',
        'qr2video2',
    ];
}
