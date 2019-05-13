<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The table associated with the model.
     */
    protected $table = 'contact';
    
    //Indicates if the model should be timestamped.
    public $timestamps = false;
}
