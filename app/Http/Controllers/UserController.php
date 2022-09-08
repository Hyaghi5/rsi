<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail;
class UserController extends Controller
{
        public function sendEmailReminder()
    {
        $user = "hello123";

        Mail::send('message', ['user' => $user], function ($m) use ($user) {
            $m->from('hamzatestweb@gmail.com', 'Your Application');

            $m->to("hamzayaghi2@gmail.com","hamza")->subject('Your Reminder!');
        });
    }
}
