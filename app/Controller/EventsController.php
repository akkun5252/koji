<?php
class EventsController extends AppController {

	var $name = 'Events';
	var $helpers = array('Admin','Time','Javascript');
	function feed() {
		// 1. Transform request parameters to MySQL datetime format.
		$psqlstart = date ( 'Y-m-d H:i:s', $this->params ['url'] ['start'] );
		$psqlend = date ( 'Y-m-d H:i:s', $this->params ['url'] ['end'] );

		// 2. Get the events corresponding to the time range
		$conditions = array (
				'Event.start BETWEEN ? AND ?' => array (
						$psqlstart,
						$psqlend
				)
		);
		$events = $this->Event->find ( 'all', array (
				'conditions' => $conditions
		) );
		// 3. Create the json array
		$rows = array ();
		for($a = 0; count ( $events ) > $a; $a ++) {

			// Is it an all day event?
			$all = ($events [$a] ['Event'] ['allday'] == 1);

			// Create an event entry
			$rows [] = array (
					'id' => $events [$a] ['Event'] ['id'],
					'title' => $events [$a] ['Event'] ['title'],
					'start' => date ( 'Y-m-d H:i', strtotime ( $events [$a] ['Event'] ['start'] ) ),
					'end' => date ( 'Y-m-d H:i', strtotime ( $events [$a] ['Event'] ['end'] ) ),
					'allDay' => $all
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