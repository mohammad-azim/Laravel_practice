<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memolist extends Model
{
    protected $fillable = [
    	'name'
    ];
    public function sublist(){
    	return $this->hasMany(Sublist::class,"memolist_id","id");
    }
}
