<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public function getLevel()
    {
    	return $this->belongsTo('App\Level', 'level');
    }
}
