<?php

class Questions_Controller extends BaseController{

	public function index(){
		return View::make('questions.index')
		->with('title','Our Dummy Website Ask.fm');
	}
}
