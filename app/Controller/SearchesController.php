<?php
class SearchesController extends AppController {
	public $components = array (
			'Search.Prg'
	);
	public $presetVars = true;
	public $paginate = array ();
	public function index() {
		$this->Search->recursive = 0;
		$this->paginate = array (
				'limit' => 3
		);
		$this->Prg->commonProcess ();
		$this->paginate ['conditions'] = $this->Search->parseCriteria ( $this->passedArgs );
		$searches = $this->paginate ();
		$this->set ( compact ( 'searches' ) );
	}
}
?>