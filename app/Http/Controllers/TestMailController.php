<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\Test;

use Illuminate\Http\Request;

class TestMailController extends Controller
{
    public function TestMail()
    {
    	$name = 'hussain';
	    Mail::to('hussain@email.com')->send(new Test($name)); 
	    return 'Email was sent! please check your mailtrap inbox';
    }
}
