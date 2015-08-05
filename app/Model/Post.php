<?php
class Post extends AppModel {
    var $name = 'Post';
    var $displayField = 'title';
    var $actsAs = array('Search.Searchable');
    var $filterArgs = array(
                            array('name' => 'title', 'type' => 'like'),
                            );
  }