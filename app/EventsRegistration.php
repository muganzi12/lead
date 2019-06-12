<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventsRegistration extends Model
{
    //
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'registrations';
    
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
