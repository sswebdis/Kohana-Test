<?php defined('SYSPATH') or die('No direct script access.');

class Model_Comment extends Model
{
	protected $_tableComments = 'comments';

	/**
	 * Get comments for article
	 * @return array
	 */
	public function get_comments($article_id)
	{
		$query = DB::select('user', 'message')
			->from($this->_tableComments)
			->where('article_id', '=', $article_id)
			->execute()
			->as_array();

		if($query)
			return $query;
		else
			return array();
	}

	/**
	 * Create new comment
	 */
	public function create_comment($article_id, $user, $message)
	{
		DB::insert($this->_tableComments, array('article_id', 'user', 'message'))
			->values(array($article_id, $user, $message))
			->execute();

	}
}