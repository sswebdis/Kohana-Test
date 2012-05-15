<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Articles extends Controller_Common {

	public function action_index()
	{
	}

	public function action_article()
	{
		$id = $this->request->param('id');

		$content = View::factory('/pages/article')
			->bind('article', $article)
			->bind('comments', $comments);

		$article = Model::factory('Article')->get_article($id);

		$comments_url = 'comments/' . $id;
		$comments = Request::factory($comments_url)->execute();

		$this->template->content = $content;

	}

} // Articles