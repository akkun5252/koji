<div class="row-fluid">
	<div class="span9">
		<h2><?php echo $this->Html->link('検索', array('action' => 'index')); ?></h2>
		<p><?php echo $this->Paginator->counter(array('format' => __('total: {:count}, page: {:page}/{:pages}')));?></p>
		<table class="table">
			<tr>
				<th><?php echo $this->Paginator->sort('TASKID', 'タスクID');?></th>
				<th><?php echo $this->Paginator->sort('TASKNAME', 'タスク名');?></th>
				<th><?php echo $this->Paginator->sort('STATUS', 'ステータス');?></th>
				<th><?php echo $this->Paginator->sort('SENDNUM', '配信件数');?></th>
				<th><?php echo $this->Paginator->sort('SUBJECT', '件名');?></th>
				<th><?php echo $this->Paginator->sort('FROM_NAME', '送信者名');?></th>
				<th><?php echo $this->Paginator->sort('FROM_ADDRESS', '送信者メールアドレス');?></th>
				<th><?php echo $this->Paginator->sort('REPLY_TO', '返信先メールアドレス');?></th>
				<th><?php echo $this->Paginator->sort('STARTDATE', '送信開始日時');?></th>
				<th><?php echo $this->Paginator->sort('ENDDATE', '送信終了日時');?></th>
				<th><?php echo $this->Paginator->sort('CONDITION', '配信条件');?></th>
				<th><?php echo $this->Paginator->sort('EDITDATE', '更新日時');?></th>
			</tr>
        <?php foreach ((array)$searches as $search): ?>
            <tr>
				<td><?php echo $this->Html->link($search['Search']['TASKID'], array('controller' => 'Events','action' => 'index', $search['Search']['TASKID'])); ?></td>
				<td><?php echo h($search['Search']['TASKNAME']); ?></td>
				<td><?php echo h($search['Search']['STATUS']); ?></td>
				<td><?php echo h($search['Search']['SENDNUM']); ?></td>
				<td><?php echo h($search['Search']['SUBJECT']); ?></td>
				<td><?php echo h($search['Search']['FROM_NAME']); ?></td>
				<td><?php echo h($search['Search']['FROM_ADDRESS']); ?></td>
				<td><?php echo h($search['Search']['REPLY_TO']); ?></td>
				<td><?php echo h($search['Search']['STARTDATE']); ?></td>
				<td><?php echo h($search['Search']['ENDDATE']); ?></td>
				<td><?php echo h($search['Search']['CONDITION']); ?></td>
				<td><?php echo h($search['Search']['EDITDATE']); ?></td>
			</tr>
        <?php endforeach; ?>

    </table>
    <?php echo $this->Paginator->prev(); ?>&nbsp;
	<?php echo $this->Paginator->numbers(); ?>&nbsp;
	<?php echo $this->Paginator->next(); ?>
    </div>
	<div class="span3">
		<div class="well" style="margin-top: 20px;">
        <?php echo $this->Form->create('Search', array('action'=>'index')); ?>
        <fieldset>
				<legend>検索</legend>
    <?php echo $this->Form->input('TASKNAME', array('label' => 'タスク名', 'class' => 'span12', 'placeholder' => 'タスク名を対象に検索')); ?>
			</fieldset>

<?php echo $this->Html->script ('jquery.min.js', array ('inline' => false) );?>
<?php echo$this->Html->script ('jquery-ui-1.9.2.custom.js', array ('inline' => false) );?>
<?php echo $this->Html->script ('jquery.ui.datepicker-ja.js', array ('inline' => false) );?>
<?php echo$this->Html->css ('jquery-ui-1.9.2.custom.min.css', null, array ('inline' => false) );?>
<?php $this->Html->scriptStart ( array ('inline' => false) );
echo <<< END
$(document).ready( function() {
    $("#FROM").datepicker();
	$("#TO").datepicker();
});
END;

$this->Html->scriptEnd ();

echo "<div>開始日時: <input type='text' id='FROM' /></div>";
echo "<div>終了日時: <input type='text' id='TO' /></div>";
?>

        <?php echo $this->Form->end('検索'); ?>
        </div>
	</div>
</div>