<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewUserNotify;
use App\User;

class NotificationController extends Controller
{
	public function store()
	   {
	   		$user = User::find(1);

			foreach ($user->unreadNotifications as $notification) {
			    return $notification->type;
}
	   }   
}
