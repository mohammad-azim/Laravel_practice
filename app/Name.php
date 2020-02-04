<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name',
    ];

}
