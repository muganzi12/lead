<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'biography';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
