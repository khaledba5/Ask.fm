<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	class User extends Basemodel {
		// by another team
		/*public static $rule = array(
			'username'=>'required|unique:user|alpha_dash|min:4',
			'password'=>'required|alpha_num|between:4,8|confirmed',
			'password_confirmation'=>'required|alpha_num|between:4,8'
		);*/

		//relation between user and questions (one to many)
		public function questions() {
			return $this->has_many('Question');
		}
	}

}
