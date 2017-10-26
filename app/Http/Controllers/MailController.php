<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\MailTrap;

// use Mail;
class MailController extends Controller
{
   // public function send()
   // {
   // 	 Mail::send(['text' => 'mail'],['name', 'umar'],function($message){
   // 	 	$message->to('umarmughal1194@gmail.com','To Umar')->subject('test email');
   // 	 	$message->from('umarmughal1194@gmail.com','umar mughal');
   // 	 });
   // }

	public function sendMail()
	{
		Mail::to('umarmughal1194@gmail.com')->send(new MailTrap());

	}
}
