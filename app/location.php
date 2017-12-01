<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    //
        public function postPlan()
    {
        return $this->belongsTo(PostPlan::class);
    }
}
