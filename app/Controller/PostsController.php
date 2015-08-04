<?php
class PostsController extends AppController {
	public $components = array (
			'Search.Prg'
	);
	public $presetVars = array (
			array (
					'field' => 'title',
					'type' => 'value'
			)
	);
	function index() {
		$this->Post->recursive = 0;
		$this->set ( 'posts', $this->paginate () );
	}
	function find() {
		$this->Prg->commonProcess ();
		$this->paginate ['conditions'] = $this->Post->parseCriteria ( $this->passedArgs );
		$this->set ( 'posts', $this->paginate () );
	}
}