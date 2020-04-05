<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chanel;

class PostControlle extends Controller
{
  	public function create()
  	{
  		// $chanels = Chanel::orderBy('name')->get();

  		return view('post.create');
  	}
}
