<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostPlan extends Model
{
    //
    // protected $fillable=['des'];
        public function user()
    {
        return $this->belongsTo(User::class);
    }

            public function location()
    {
        return $this->hasOne(Location::class);
    }

}
