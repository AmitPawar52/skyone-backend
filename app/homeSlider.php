<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homeSlider extends Model
{
    protected $fillable = ['title', 'description', 'imagePath'];
}