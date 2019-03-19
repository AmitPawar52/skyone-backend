<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    protected $fillable = ['loanDetail_id','question', 'answer'];

    public function loanDetail(){
    	return $this->belongsTo(loanDetail::class, 'loanDetail_id');
    }
}
