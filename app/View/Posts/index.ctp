<?php
echo $this->Form->create ( 'Post', array (
		'url' => array_merge ( array (
				'action' => 'find' 
		), $this->params ['pass'] ) 
) );
echo $this->Form->label ( 'title' );
echo $this->Form->text ( 'title' );
echo $this->Form->checkbox ( 'title' );
echo $this->Form->submit ( __ ( 'Search', true ), array (
		'div' => false 
) );
echo $this->Form->end ();
