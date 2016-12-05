<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;
use Validator;
use Input;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function login(){
		if ('POST' === Input::server('REQUEST_METHOD')) {
			if ($this->_getLoginValidator()->passes()) {
				if (Auth::attempt($this->_getLoginCredentials())) {
					// echo 'yes-------------------';
					return redirect()->route('student.home');
				}else{
					return redirect()->back()
						->withInput()
						->withErrors([
							'loginErrors' => '账号或密码错误！',
						]);
				}
			}else{
				return redirect()->back()
					->withInput()
					->withErrors([
						'loginErrors' => '账号和密码不能为空！',
					]);
				// echo 'no====================';
			}

			return redirect()->intended('home');
		}

		return view('login');
	}

	public function logout(){
		Auth::logout();
		return redirect()->route('home');
	}

	protected function _getLoginValidator(){
		return Validator::make(Input::all(), [
				'username' => 'required',
				'password' => 'required',
				// 'job' => 'required',
			]);
	}

	protected function _getLoginCredentials(){
		return [
			'username' => Input::get('username'),
			'password' => Input::get('password'),
			// 'role' => strtoupper(Input::get('role')),
		];
	}

}
