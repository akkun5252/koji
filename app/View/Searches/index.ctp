<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="well" style="margin-top: 20px;">
					</fieldset>
    <?php echo $this->Form->create('Search', array('action'=>'index')); ?>
    <?php echo $this->Form->input('TASKNAME', array('label' => 'タスク名', 'class' => 'span12', 'placeholder' => 'タスク名を対象に検索')); ?>
	
	<?php echo$this->Html->script ('jquery-ui-1.9.2.custom.js', array ('inline' => false) );?>
	<?php echo $this->Html->script ('jquery.ui.datepicker-ja.js', array ('inline' => false) );?>
	<?php echo$this->Html->css ('jquery-ui-1.9.2.custom.min.css', null, array ('inline' => false) );?>
	<?php

$this->Html->scriptStart ( array (
		'inline' => false
) );
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

	<table class="table table-hover table-condensed table-striped">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('TASKID', 'タスクID');?></th>
				<th><?php echo $this->Paginator->sort('TASKNAME', 'タスク名');?></th>
				<th><?php echo $this->Paginator->sort('STATUS', 'ステータス');?></th>
				<th><?php echo $this->Paginator->sort('SENDNUM', '配信件数');?></th>
				<th><?php echo $this->Paginator->sort('FROM_NAME', '送信者名');?></th>
				<th><?php echo $this->Paginator->sort('STARTDATE', '送信開始日時');?></th>
				<th><?php echo $this->Paginator->sort('ENDDATE', '送信終了日時');?></th>
			</tr>
		</thead>
		<tbody>
        <?php foreach ((array)$searches as $search): ?>
            <tr>
				<td><?php echo $this->Html->link($search['Search']['TASKID'], array('controller' => 'Events','action' => 'index', $search['Search']['TASKID'])); ?></td>
				<td><?php echo h($search['Search']['TASKNAME']); ?></td>
				<td><?php echo h($search['Search']['STATUS']); ?></td>
				<td><?php echo h(number_format($search['Search']['SENDNUM'])); ?></td>
				<td><?php echo h($search['Search']['FROM_NAME']); ?></td>
				<td><?php echo date("Y-m-d H:i",strtotime($search['Search']['STARTDATE'])); ?></td>
				<td><?php echo date("Y-m-d H:i",strtotime($search['Search']['ENDDATE'])); ?></td>
			</tr>
        <?php endforeach; ?>
			</tbody>
	</table>
</div>
<div class="pagination">
	<ul>
    <?php echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
    <?php echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1, 'ellipsis' => '<li class="disabled"><a>...</a></li>')); ?>
    <?php echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
  </ul>
</div>
