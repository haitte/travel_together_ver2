<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //Table name
    protected $table ='trips';
    
    //Primary Key
    public $primaryKey ='trip_id';
    
    //Timestamps
    public $timestamps = true;
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function survey(){
        return $this->hasOne('App\Survey');
    }
}
