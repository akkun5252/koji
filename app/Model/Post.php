<?php
class Post extends AppModel {
	public $actsAs = array('Search.Searchable');
	public $belongsTo = array('User');
	public $filterArgs = array(array('name' => 'title', 'type' => 'like'),
	);
}