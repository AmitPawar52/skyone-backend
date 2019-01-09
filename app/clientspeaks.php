<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientspeaks extends Model
{
    protected $fillable = ['clientName', 'clientPosition', 'clientSays', 'imgPath'];
}
