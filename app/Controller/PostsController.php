<?php
class PostsController extends AppController {
public $uses = "Event";
	function index() {
		$this->layout = '';
		$psqlstart = date ( 'Y-m-d H:i:s', strtotime($this->params ['url'] ['start']) );
		$psqlend = date ( 'Y-m-d H:i:s', strtotime($this->params ['url'] ['end'] ));
		$conditions = array (
				'Event.STARTDATE BETWEEN ? AND ?' => array (
						$psqlstart,
						$psqlend
				)
		);
		$events = $this->Event->find ( 'all', array (
				'conditions' => $conditions
		) );
		$rows = array ();
		for($a = 0; count ( $events ) > $a; $a ++) {
			$rows [] = array (
					'id' => $events [$a] ['Event'] ['TASKID'],
					'title' => $events [$a] ['Event'] ['TASKNAME'],
					'start' => date ( 'Y-m-d H:i', strtotime ( $events [$a] ['Event'] ['STARTDATE'] ) ),
					'end' => date ( 'Y-m-d H:i', strtotime ( $events [$a] ['Event'] ['ENDDATE'] ) )
			);
		}
		echo json_encode($rows);
	}
}
?>