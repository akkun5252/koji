<?php
class PostsController extends AppController {
	public $components = array (
			'Search.Prg'
	);
	public $presetVars = true;
	public $paginate = array ();
	public function index() {
		$this->paginate = array (
				'limit' => 2
		);

		$this->Prg->commonProcess ();
		$this->paginate ['conditions'] = $this->Post->parseCriteria ( $this->passedArgs );

		$shopList = $this->paginate ();
		$this->set ( compact ( 'shopList' ) );
	}
}