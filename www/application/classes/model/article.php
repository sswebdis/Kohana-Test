<?php defined('SYSPATH') or die('No direct script access.');

class Model_Article extends Model
{
	protected $_tableArticles = 'articles';

	/**
	 * Get all articles
	 * @return array
	 */
	public function get_all()
	{
		$sql = "SELECT * FROM ". $this->_tableArticles;

		return DB::query(Database::SELECT, $sql)
			->execute();
	}

	/**
	 * Get article
	 * @return array
	 */
	public function get_article($id = '')
	{
		$sql = "SELECT * FROM ". $this->_tableArticles ." WHERE `id` = :id";

		$query = DB::query(Database::SELECT, $sql, FALSE)
			->param(':id', (int)$id)
			->execute();

		$result = $query->as_array();

		if($result)
			return $result[0];
		else
			return FALSE;
	}
}