<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    
    public function image()
    {	
    	return $this->morphOne(Image::class, 'imageable');
    }

    public function comment()
    {
    	return $this->morphMany(Comment::class, 'commentable');
    }

    public function comments()
    {
    	return $this->morphedMany(Tag::class, 'taggable');
    }


}
