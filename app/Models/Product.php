<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi (WAJIB untuk factory & seeder)
    protected $fillable = [
        'name',
        'price',
        'description'
    ];
}