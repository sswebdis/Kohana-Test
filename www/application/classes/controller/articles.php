<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Articles extends Controller_Common {

	public function action_index()
	{
		$id = $this->request->param('id');

		if($id)
		{
			$content = View::factory('/pages/article')
				->set('article', $id)
				->bind('comments', $comments);

			$comments_url = 'comments/' . $id;
			$comments = Request::factory($comments_url)->execute();
		}
		else
		{
			$content = View::factory('/pages/articles');
//			$content->pagination = Pagination::factory(array('total_items' => 100));
		}

		$this->template->content = $content;
	}

} // Articles