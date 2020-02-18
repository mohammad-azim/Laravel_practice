<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sublist extends Model
{
    protected $fillable = [

    	'name', 'details', 'priority','memolist_id',
    ];
    public function memolist(){
    	return $this->belongsTo(Memolist::class,"memolist_id","id");
    }
}
