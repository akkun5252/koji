<?php
class Search extends AppModel {
	public $order = array (
			'Search.id DESC'
	);
	public $actsAs = array (
			'Search.Searchable'
	);
	public $filterArgs = array (
			// 例
			'TASKID' => array (
					'type' => 'value'
			),
			'TASKNAME' => array (
					'type' => 'like'
			)
	)
	;
	// $validate プロパティ等は省略
}
?>