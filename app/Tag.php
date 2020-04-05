<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     protected $guarded = [];

     public function posts()
     {
     	return $this->morphByMany(Post::class, 'taggable');
     }
}
