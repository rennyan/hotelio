<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Hotel extends Model
{
    protected $table = "hotel";
    protected $primarykey = "id";
    protected $fillable = [
        'name',
        'location',
        'price',
        'image',
        'facilitate',
        'synopsis'
    ];

    protected $hidden;
}