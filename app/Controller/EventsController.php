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
}
?>
