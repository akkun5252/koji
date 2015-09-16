<?php
class FullcalendarsController extends AppController {
	//public $uses = "Event";

	function index() {
/* 		$mysqlstart = date ( 'Y-m-d H:i:s', $this->params ['url'] ['start'] );
		$mysqlend = date ( 'Y-m-d H:i:s', $this->params ['url'] ['end'] );
		print_r ( $mysqlstart );
		print_r ( $mysqlend );
		$conditions = array (
				'Event.STARTDATE BETWEEN ? AND ?' => array (
						$mysqlstart,
						$mysqlend
				)
		);
		$events = $this->Event->find ( 'all', array (
				'conditions' => $conditions
		) );
		$events = $this->Event->find ( 'all' );

		$rows = array ();
		for($a = 0; count ( $events ) > $a; $a ++) {

			$rows [] = array (
					'id' => $events [$a] ['Event'] ['TASKID'],
					'title' => $events [$a] ['Event'] ['TASKNAME'],
					'start' => date ( 'Y-m-d H:i', strtotime ( $events [$a] ['Event'] ['STARTDATE'] ) ),
					'end' => date ( 'Y-m-d H:i', strtotime ( $events [$a] ['Event'] ['ENDDATE'] ) )
			);
		}
		$this->set ( 'json', json_encode ( $rows ) ); */
	}

	/*   function feed() {
	 	$mysqlstart = date ( 'Y-m-d H:i:s', $this->params ['url'] ['start'] );
		$mysqlend = date ( 'Y-m-d H:i:s', $this->params ['url'] ['end'] );
		print_r ( $mysqlstart );
		print_r ( $mysqlend );
		$conditions = array (
				'Event.STARTDATE BETWEEN ? AND ?' => array (
						$mysqlstart,
						$mysqlend
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
		$this->set ( 'json', json_encode ( $rows ) );
	} */
}
?>
