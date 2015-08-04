<?php
echo $this->Form->create ( 'Post', array (
		'url' => array_merge ( array (
				'action' => 'find'
		), $this->params ['pass'] )
) );
echo $form->label ( 'title' );
echo $form->text ( 'title' );
echo $this->Form->submit ( __ ( 'Search', true ), array (
		'div' => false
) );
echo $this->Form->end ();
