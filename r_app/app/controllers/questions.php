<?php 
class QuestionsController extends BaseController {
	//public $restful = true; (msh 3rfa a da)

	//filter to insure that user is logged in before accessing these actions
	public function __construct(){
		$this->filter('before','auth')->only(array('create')); // answer action too
	}

	/*public function get_index() {
		return View::make('questions.index')->with('title', 'Ask Fm - Home')
		->with('questions',Question::unsolved());*/

	}

	public function post_create() {
		//ha call l validate method mn Question model (mktoba fen d!)
		$validation = Question::validate(Input::all());
		if($validation->passes()){
			Question::create(array(
				'question'=>Input::get('question'),
				'user_id'=>Auth::user()->id
				));
			return Redirect::to_route('home')->with('message','Your question has been posted!');
		} else {
			return Redirect::to_route('home')->with_errors($validation)->with_input();
		}
	}

	public function get_view($id=null){
		//questions.view (view file *front-end*) ?
		return View::make('questions.view')->with('title', 'Ask Fm - View Question')->with('question', Question::find('$id'));
	}
}
?>