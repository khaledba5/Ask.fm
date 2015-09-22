<?php

class Users extends BaseController{


	public function neew(){
		return View::make('Users.new')
		->with('title','Our Dummy Website Ask.fm');
	}

	public function create(){
		$validation = User::validate(Input::all());

		if($validation->passes()){
			User::create(array(
				'username'=>Input::get('username'),
				'password'=>Hash::make(Input::get('password'))
				));

			return Redirect::route('home')->with('message','Thanks For Registration');
		}else{
			return Redirect::route('register');
		}
	}
}