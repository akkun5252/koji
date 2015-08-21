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
	public $helpers = array('Html','Form');
	var $Event = NULL;
	public function index() {
		// set('送信する変数名',$this->Model名->find('条件'));
		// $this->set ( 'Event', $this->Event->find ( 'all' ) );
		$this->set ( 'Event', $this->Event->find ( 'all', array (
				'conditions' => array (
						'TASKID' => '3431'
				)
		) ) );
	}
	public function view($id = null) {
		$this->Event->id = $id;
		$this->set ( 'event', $this->Event->read () );
	}
}
?>
