<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chanel;
class ChanelController extends Controller
{
    public function index()
    {
    	// $chanels = Chanel::all();

    	return view('chanel.index');
    }
}
