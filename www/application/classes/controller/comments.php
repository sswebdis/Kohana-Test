<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Comments extends Controller {

	public function action_index()
	{
		if($this->request->is_initial())
			Request::initial()->redirect(URL::site(''));

		$article_id = $this->request->param('id');
		$captcha = Captcha::instance();;
		$content = View::factory('/comments/show')
			->bind('comments', $comments)
			->bind('captcha', $captcha);

		if($_POST && Captcha::valid($_POST['captcha']))
		{
			$user = Arr::get($_POST, 'user');
			$message = Arr::get($_POST, 'message');

			Model::factory('Comment')->create_comment($article_id, $user, $message);
		}elseif($_POST){
		 $alert = 'Не угадал';
		$content -> bind('alert', $alert);
		}

		$comments = Model::factory('Comment')->get_comments($article_id);
		$this->response->body($content);
		$content->message = '';
		if($_POST)
			$content->message = Captcha::valid($_POST['captcha'])? 'Прахади дарагой' : 'Не угадал';


//		$comments->captcha = $captcha->render();
	}

} // Comments