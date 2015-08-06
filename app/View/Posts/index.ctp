<?php $dispaly = array( '0' => '非表示', '1' => '表示' ); ?>

<div class="section form_search">
	<h2>検索項目</h2>
	<?php echo $this->Form->create('Post', array( 'novalidate' => true, 'url' => array_merge(array('action' => 'index'), $this->params['pass']) )); ?>
	<h3>タスク名</h3>
	<?php echo $this->Form->input('name', array('placeholder' => '例）タスク名を入力して下さい。　※フリガナ可', 'label' => false)); ?>
	<h3>公開設定</h3>
	<?php echo $this->Form->select('display', $dispaly, array( 'empty' => 'すべて', 'label' => false )); ?>
	<?php echo $this->Form->submit('検索'); ?>
	<?php echo $this->Form->end(); ?>
</div>

<div class="section">
	<h2>タスク一覧</h2>
	<table>
		<tr>
			<th><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
			<th><?php echo $this->Paginator->sort('name', '店舗名'); ?></th>
			<th><?php echo $this->Paginator->sort('display', '公開設定'); ?></th>
		</tr>

		<?php foreach((array)$postList as $post): ?>
		<tr>
			<td><?php echo h($post['Post']['id']); ?></td>
			<td><?php echo h($post['Post']['name']); ?></td>
			<td><?php echo $dispaly[h($post['Post']['display'])]; ?></td>
		</tr>

		<?php endforeach; ?>

	</table>
</div>


<div class="paginateLinks">
	<?php echo $this->Paginator->prev(); ?>&nbsp;
	<?php echo $this->Paginator->numbers(); ?>&nbsp;
	<?php echo $this->Paginator->next(); ?>
</div>

<?php echo $this->Html->css('search_index', null, array( 'inline' => false )); ?>