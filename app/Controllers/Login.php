<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		return view('pages/login');
	}

	public function register()
	{
		return view('pages/register');
	}

	public function forgot()
	{
		return view('pages/forgot_password');
	}

	//--------------------------------------------------------------------

}
