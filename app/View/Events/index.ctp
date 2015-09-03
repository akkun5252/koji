<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-condensed ">
        <?php foreach($Event as $event): ?>
        <br>
				<br>
				<br>
				<tr>
					<th class="col-md-2">タスクID</th>
					<td><?php echo h($event['Event']['TASKID']); ?></td>
				</tr>
				<tr>
					<th>タスク名</th>
					<td><?php echo h($event['Event']['TASKNAME']); ?></td>
				</tr>
				<tr>
					<th>ステータス</th>
					<td><?php echo h($event['Event']['STATUS']); ?></td>
				</tr>
				<tr>
					<th>配信件数</th>
					<td><?php echo h(number_format($event['Event']['SENDNUM'])); ?></td>
				</tr>

				<tr>
					<th>件名</th>
					<td><?php echo h($event['Event']['SUBJECT']); ?></td>
				</tr>
				<tr>
					<th>送信者名</th>
					<td><?php echo h($event['Event']['FROM_NAME']); ?></td>
				</tr>
				<tr>
					<th>送信者メールアドレス</th>
					<td><?php echo h($event['Event']['FROM_ADDRESS']); ?></td>
				</tr>
				<tr>
					<th>返信者メールアドレス</th>
					<td><?php echo h($event['Event']['REPLY_TO']); ?></td>
				</tr>
				<tr>
					<th>送信開始日時</th>
					<td><?php echo date("Y-m-d H:i",strtotime($event['Event']['STARTDATE'])); ?></td>
				</tr>
				<tr>
					<th>送信終了日時</th>
					<td><?php echo date("Y-m-d H:i",strtotime($event['Event']['ENDDATE'])); ?></td>

				</tr>
				<tr>
					<th>配信条件</th>
					<td><?php echo h($event['Event']['CONDITION']); ?></td>
				</tr>
				<tr>
					<th>更新日時</th>
					<td><?php echo date("Y-m-d H:i",strtotime($event['Event']['EDITDATE'])); ?></td>
				</tr>
        <?php endforeach; ?>
		</table>
		</div>

		<ul class="nav nav-tabs nav-justified">
			<li class="active"><a href="#tab1" data-toggle="tab">テキストメール</a></li>
			<li><a href="#tab2" data-toggle="tab">HTMLメール</a></li>
		</ul>
		<!-- / タブ-->
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade in active" id="tab1">
				<div class="scr">
					<table class="table table-bordered table-condensed">
						<tbody>
        <?php foreach($Event as $event): ?>
							<tr>
								<td><?php echo nl2br($event['Event']['MAIL_TXT']); ?></td>
							</tr>
  <?php endforeach; ?>
			</tbody>
					</table>
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
</div>