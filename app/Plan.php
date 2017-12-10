<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
   public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function survey(){
        return $this->hasOne('App\Survey');
    }
}
