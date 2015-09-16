<?php
class EventsController extends AppController {
	public function index($pass1 = null) {
		// $this->set ( 'Event', $this->Event->find ( 'all' ) );
		$this->set ( 'Event', $this->Event->find ( 'all', array (
				'conditions' => array (
				'TASKID' => $pass1
				)
		) ) );
	}
}
?>
