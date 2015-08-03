<?php
App::uses ( 'AppController', 'Controller' );
App::uses ( 'Sanitize', 'Utility' );
class FullcalendarController extends AppController {
	var $uses = array ();
	var $name = 'Events';
	var $pagenate = array (
			'limit' => 15
	);
	public function index() {
		$this->Event->recursive = 1;
		$this->set ( 'events', $this->paginate () );
	}

	// $this->modelClass = null;
	// $this->layout = "Sample";
	// $this->set ( "header_for_layout", "Sample Application" );
	// $this->set ( "footer_for_layout", "kojima" );
	// $this->set ( "msg", "Welcome to my layout!" );
}
?>