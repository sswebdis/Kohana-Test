<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Articles extends Controller_Common {

	public function action_index()
	{
		$id = $this->request->param('id');

		if($id)
		{
			$content = View::factory('/pages/article');
			$content->article = $id;
		}
		else
			$content = View::factory('/pages/articles');

		$this->template->content = $content;
	}

} // Articles