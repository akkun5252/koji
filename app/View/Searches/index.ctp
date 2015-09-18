<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<?php echo $this->Html->script('bootstrap'); ?>

	<?php echo $this->Html->css('bootstrap-datepicker3.min.css'); ?>
	<?php echo $this->Html->script('bootstrap-datepicker.min.js'); ?>
	<?php echo $this->Html->script('bootstrap-datepicker.ja.min.js'); ?>

	<?php echo $this->Form->create('Search', array('action'=>'index')); ?>
	<table class="table table-hover table-condensed">
	<tr>
	<th class="text-right col-md-3">タスク名：</th>
    <td><?php echo $this->Form->input('TASKNAME', array('label' => false, 'class' => 'col-md-6', 'placeholder' =>'タスク名を対象に検索')); ?></td>
	</tr>
	<tr>
	<th class="text-right col-md-3">件名：</th>
    <td><?php echo $this->Form->input('SUBJECT', array('label' => false, 'class' => 'col-md-6', 'placeholder' =>'件名を対象に検索')); ?></td>
	</tr>
	<tr>
	<th class="text-right col-md-3">メール本文：</th>
   	<td><?php echo $this->Form->input('MAIL_TXT', array('label' => false, 'class' => 'span6', 'placeholder' =>'メール本文を対象に検索')); ?></td>
	</tr>
	<tr>
	<th class="text-right col-md-3">期間：</th>
	<td>
	<div id="dateArea">
        <?php echo $this->Form->text('FROM', array('class' => 'col-md-3')); ?>
        <?php echo $this->Form->text('TO', array('class' => 'col-md-3')); ?>

        <script type="text/javascript">
			$(function(){
   		 // オプション
    	var options = {
        language : "ja", // 日本語のフォーマットを指定
        clearBtn : true,  // 日付のクリアボタンを表示
        todayHighlight: true
   		 }

    	// datepickerを使用する要素を指定
   	 $("#dateArea input").datepicker(options);

		});
		</script>
    </div>
    </td>
    </tr>
    <tr>
    <th class="text-right col-md-3"></th>
    <td>
    <?php echo $this->Form->button('リセット', array('type'=>'reset','class' => 'col-md-3')); ?>
    <?php echo $this->Form->end('　　検索　　',array('class' => 'col-md-3')); ?>
    </td>
	</tr>
</table>


</div>
        <div class="col-md-12">
	<table class="table table-hover table-condensed table-striped">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('TASKID', 'タスクID');?></th>
				<th><?php echo $this->Paginator->sort('TASKNAME', 'タスク名');?></th>
				<th><?php echo $this->Paginator->sort('STATUS', 'ステータス');?></th>
				<th><?php echo $this->Paginator->sort('SENDNUM', '配信件数');?></th>
				<th><?php echo $this->Paginator->sort('SUBJECT', '件名');?></th>
				<th><?php echo $this->Paginator->sort('STARTDATE', '送信開始日時');?></th>
				<th><?php echo $this->Paginator->sort('ENDDATE', '送信終了日時');?></th>
			</tr>
		</thead>
		<tbody>
        <?php foreach ((array)$searches as $search): ?>
            <tr>
				<td><?php echo $this->Html->link($search['Search']['TASKID'], array('controller' => 'Events','action' => 'index', $search['Search']['TASKID'])); ?></td>
				<td><?php echo h($search['Search']['TASKNAME']); ?></td>
				<td><?php echo '配信完了' ?></td>
				<td><?php echo h(number_format($search['Search']['SENDNUM'])); ?></td>
				<td><?php echo h($search['Search']['SUBJECT']); ?></td>
				<td><?php echo date("Y/m/d H:i",strtotime($search['Search']['STARTDATE'])); ?></td>
				<td><?php echo date("Y/m/d H:i",strtotime($search['Search']['ENDDATE'])); ?></td>
			</tr>
        <?php endforeach; ?>
			</tbody>
	</table>
<ul class="pagination">
<?php
  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
?>
</ul>
</div>
</div>