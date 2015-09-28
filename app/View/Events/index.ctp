	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<?php echo $this->Html->script('bootstrap'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-5">
        <?php foreach($Event as $event): ?>
				<p class="text-right">更新日時：
				<?php echo date("Y/m/d H:i",strtotime($event['Event']['EDITDATE'])); ?>
				</p>
				<table class="table table-bordered table-condensed ">
				<th class="warning" colspan="2">基本情報</th>

				<tr>
					<th class="col-md-2 info">タスクID</th>
					<td class="text-left info"><?php echo h($event['Event']['TASKID']); ?></td>
				</tr>
				<tr>
					<th class="info">タスク名</th>
					<td class="text-left info"><?php echo h($event['Event']['TASKNAME']); ?></td>
				</tr>
				<tr>
					<th class="info">ステータス</th>
					<td class="text-left info"><?php echo '配信完了' ?></td>
				</tr>
				<tr>
					<th class="info">送信開始日時</th>
					<td class="text-left info"><?php echo date("Y/m/d H:i",strtotime($event['Event']['STARTDATE'])); ?></td>
				</tr>
				<tr>
					<th class="info">送信終了日時</th>
					<td class="text-left info"><?php echo date("Y/m/d H:i",strtotime($event['Event']['ENDDATE'])); ?></td>
				</tr>
				<tr>
					<th class="info">配信件数</th>
					<td class="text-left info"><?php echo h(number_format($event['Event']['SENDNUM'])); ?></td>
				</tr>
				<tr>
					<th class="info">配信条件</th>
					<td class="text-left info"><?php echo h($event['Event']['CONDITION']); ?></td>
				</tr>
				</table>
				<table class="table table-bordered table-condensed ">
				<th class="warning" colspan="2">メール情報</th>
				<tr>
					<th class="info">送信者名</th>
					<td class="text-left info"><?php echo h($event['Event']['FROM_NAME']); ?></td>
				</tr>
				<tr>
					<th class="info">送信者メールアドレス</th>
					<td class="text-left info"><?php echo h($event['Event']['FROM_ADDRESS']); ?></td>
				</tr>
				<tr>
					<th class="info">返信者メールアドレス</th>
					<td class="text-left info"><?php echo h($event['Event']['REPLY_TO']); ?></td>
				</tr>
				<tr>
					<th class="info">件名</th>
					<td class="text-left info"><?php echo h($event['Event']['SUBJECT']); ?></td>
				</tr>
        <?php endforeach; ?>
		</table>
		</div>
		<div class="col-md-7">
		<ul class="nav nav-tabs nav-justified">
			<li class="active"><a href="#tab1" data-toggle="tab">テキストメール</a></li>
			<li><a href="#tab2" data-toggle="tab">HTMLメール</a></li>
		</ul>

		<!-- / タブ-->
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade in active" id="tab1">
				<div class="scr">
        <?php foreach($Event as $event): ?>
				<?php echo nl2br($event['Event']['MAIL_TXT']); ?>
  <?php endforeach; ?>
				</div>
			</div>
			<div class="tab-pane fade" id="tab2">
				<div class="scr">
					<table class="table table-bordered table-condensed">
						<tbody>
        <?php foreach($Event as $event): ?>
							<tr>
								<td><?php echo $event['Event']['MAIL_HTML']; ?></td>
							</tr>
  <?php endforeach; ?>
			</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>