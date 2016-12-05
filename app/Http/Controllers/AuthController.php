<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AuthController extends Controller {
	public function authenticate(){
		if (Auth::attemp([
			'username' => '1205106131',
			'password' => '1205106131'
		])) {
			return view('index');
		}
	}
}
