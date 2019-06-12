<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'institution_membership';
    
        /**
        * The attributes that aren't mass assignable.
        *
        * @var array
        */
        protected $guarded = [];
    }
    