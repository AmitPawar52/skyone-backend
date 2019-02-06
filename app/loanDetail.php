<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loanDetail extends Model
{
    protected $fillable = [ 'loanType', 
                            'whatIsLType', 
                            'whyChooseTitle', 
                            'whyChoosePoints', 
                            'whyChooseFooter', 
                            'ptcTitle', 
                            'ptcPoints'
                        ];
}
