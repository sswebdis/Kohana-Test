<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Common {

	// Главная страница
	public function action_index()
	{
		$articles = array();

		$content = View::factory('/pages/show')
			->bind('articles', $articles);

		$articles = Model::factory('Article')->get_all();

		$this->template->content = $content;
	}

} // End Page