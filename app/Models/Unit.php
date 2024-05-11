<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];
    use HasFactory;
    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
