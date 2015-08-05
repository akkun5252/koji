<div class="posts index">
    <h2><?php __('Posts');?></h2>
    <?php echo $this->Form->create('Post', array('url' => array_merge(array('action' => 'index'), $this->params['pass']))); ?>
    <?php echo $this->Form->input('title', array('type' => 'text')); ?>
    <?php echo $this->Form->submit(__('Search',true)); ?>
    <?php echo $this->Form->end(); ?>