<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'member';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
