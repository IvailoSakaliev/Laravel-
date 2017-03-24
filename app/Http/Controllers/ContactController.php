<?php

namespace App\Http\Controllers;
use App\Http\Request\PostViewModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function Index()
	{
		return view('contact');
	}
	public function SendMassage(Request $request)
	{
		$email = $request->get('email');
		$subject = $request->get('sub');
		$mess = $request->get('messege');

		$messege = 
		'from '. $email.'\n'.
		$mess;

		mail('ivo.saklaiev1996@gmial.com', $subject, $messege);
		return 'ok';

	}

}
