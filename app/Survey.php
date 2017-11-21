<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    //Table name
    protected $table ='surveys';
    
    //Primary Key
    public $primaryKey ='survey_id';
    
    //Timestamps
    public $timestamps = true;
}
