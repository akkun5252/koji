<h2>詳細</h2>
<table class="table">

<?php
     echo $this->Html->link($event['Event']['TASKNAME'],'/events/view/'.$event['Event']['TASKID']);
?>

        <?php foreach($Event as $event): ?>
	<tr>
		<td><?php echo h($event['Event']['TASKID']); ?></td>
		<td><?php echo h($event['Event']['TASKNAME']); ?></td>
		<td><?php echo h($event['Event']['STATUS']); ?></td>
		<td><?php echo h($event['Event']['SENDNUM']); ?></td>
		<td><?php echo h($event['Event']['SUBJECT']); ?></td>
		<td><?php echo h($event['Event']['FROM_NAME']); ?></td>
		<td><?php echo h($event['Event']['FROM_ADDRESS']); ?></td>
		<td><?php echo h($event['Event']['REPLY_TO']); ?></td>
		<td><?php echo h($event['Event']['STARTDATE']); ?></td>
		<td><?php echo h($event['Event']['ENDDATE']); ?></td>
		<td><?php echo h($event['Event']['CONDITION']); ?></td>
	</tr>
        <?php endforeach; ?>
</table>
