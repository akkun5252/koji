<?php
class PostsController extends AppController {
    var $name = 'Posts';
    var $components = array('Search.Prg');
    var $presetVars = array(
                            array('field' => 'title', 'type' => 'value'),
                            );
    function index() {
        $this->Prg->commonProcess();
        $this->paginate['conditions'] = $this->Post->parseCriteria($this->passedArgs);
        $this->set('posts', $this->paginate());
    }
}
