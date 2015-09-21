<?php //Basemodel should be created by another team
class Question extends Basemodel { 
	public static $rules = array(
		'question'=>'required|min:10|max:255',
		'solved'=>'in:0,1'
	);

	//relation between question and users (one to one)
	public function user() {
		return $this->belongs_to('User');
	}

	public static function unsolved() {
		return static::where('solved','=',0)->order_by('id', 'DESC')->pageinate(3);
	}


}

?>