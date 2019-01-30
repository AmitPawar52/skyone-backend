<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactus extends Model
{
    protected $fillable = ['name', 'email', 'mobileNo', 'company', 'message'];
}
