<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Trip extends Model
{
    //Table name
    protected $table ='plans';
    
    //Primary Key
    public $primaryKey ='id';
    
    //Timestamps
    public $timestamps = true;
    
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    
    public function survey(){
        return $this->hasOne('App\Survey');
    }
}
