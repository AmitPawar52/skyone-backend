<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = ['name', 'email', 'mobileNo', 'company', 'salary', 'requirement'];
}
