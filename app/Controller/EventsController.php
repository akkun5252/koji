<?php
/*
 * Controller/EventsController.php
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
class EventsController extends AppController {
	public function index($pass1 = null) {
		// $this->set ( 'Event', $this->Event->find ( 'all' ) );
		$this->set ( 'Event', $this->Event->find ( 'all', array (
				'conditions' => array (
				'TASKID' => $pass1
				)
		) ) );
	}
	function feed() {
		// 1. Transform request parameters to MySQL datetime format.
		$mysqlstart = date ( 'Y-m-d H:i:s', $this->params ['url'] ['start'] );
		$mysqlend = date ( 'Y-m-d H:i:s', $this->params ['url'] ['end'] );

		// 2. Get the events corresponding to the time range
		$conditions = array (
				'Event.start BETWEEN ? AND ?' => array (
						$mysqlstart,
						$mysqlend
				)
		);
		$events = $this->Fullcalendar->find ( 'all', array (
				'conditions' => $conditions
		) );
		// 3. Create the json array
		$rows = array ();
		for($a = 0; count ( $events ) > $a; $a ++) {

			// Is it an all day event?
			$all = ($events [$a] ['Event'] ['allday'] == 1);

			// Create an event entry
			$rows [] = array (
					'id' => $events [$a] ['Event'] ['TASKID'],
					'title' => $events [$a] ['Event'] ['TASKNAME'],
					'start' => date ( 'Y-m-d H:i', strtotime ( $events [$a] ['Event'] ['STARTDATE'] ) ),
					'end' => date ( 'Y-m-d H:i', strtotime ( $events [$a] ['Event'] ['ENDDATE'] ) ),
					'allDay' => 1
			);
		}

		// 4. Return as a json array
		Configure::write ( 'debug', 0 );
		$this->autoRender = false;
		$this->autoLayout = false;
		$this->header ( 'Content-Type: application/json' );
		echo json_encode ( $rows );
	}
}
?>
