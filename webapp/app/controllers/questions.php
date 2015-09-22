<?php

class questions extends BaseController{

	public function index(){
		return View::make('questions.index')
		->with('title','Our Dummy Website Ask.fm');
	}
}
