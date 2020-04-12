<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewUserNotify;
use App\Notifications\InvoicePaid;
use App\User;

class NotificationController extends Controller
{
	public function store()
	   {
	   		$user = User::find(1);

	   		$details = [
            'greeting' => 'Hi I‌ come back',
            'body' => 'This one mor time me!',
            'thanks' => 'Thank you!',
    		];
    		$user->notify(new InvoicePaid($details));
    		return dd("Done");
	   }   
}
