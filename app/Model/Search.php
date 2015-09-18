<?php
class Search extends AppModel {
	public $useTable = 'events';
	public $order = array (
			'Search.TASKID DESC'
	);
	public $actsAs = array (
			'Search.Searchable'
	);
	public $filterArgs = array (
			'TASKID' => array (
					'type' => 'value'
			),
			'TASKNAME' => array (
					'type' => 'like'
			),
			'SUBJECT' => array (
					'type' => 'like'
			),
			'MAIL_TXT' => array (
					'type' => 'like'
			),
			'FROM' => array (
					'type' => 'value',
					'field' => 'Search.STARTDATE >='
			),
			'TO' => array (
					'type' => 'value',
					'field' => 'Search.STARTDATE <='
			),
	)
	;
	// $validate プロパティ等は省略
}
?>
