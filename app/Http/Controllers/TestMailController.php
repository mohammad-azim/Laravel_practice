<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\Test;

use Illuminate\Http\Request;

class TestMailController extends Controller
{
    public function TestMail()
    {
    	$name = 'Krunal';
	    Mail::to('krunal@appdividend.com')->send(new Test($name)); 
	    return 'Email was sent';
    }
}
