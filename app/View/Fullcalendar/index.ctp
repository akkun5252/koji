<?php
echo $this->Html->css ( 'fullcalendar.css' );
// echo $this->Html->css('jquery-ui.min.css');
echo $this->Html->script ( 'jquery.min.js' );
// echo $this->Html->script('jquery-ui.custom.min.js');
echo $this->Html->script ( 'moment.min.js' );
echo $this->Html->script ( 'fullcalendar.js' );
?>

<script type="text/javascript">
$(document).ready(function() {
    $('#calendar').fullCalendar({

            // ヘッダーのタイトルとボタン
        header: {
            // title, prev, next, prevYear, nextYear, today
            left: 'prev,next today',
            center: 'title',
            right: 'month agendaWeek agendaDay'
        },
 events: [
        {
            title: 'ああい',
            start: '2015-07-21 12:30:00',
            end: '2015-07-29 18:30:00',
            url: 'http://google.com/',
            color: 'yellow',   // an option!
            textColor: 'black' // an option!
        },
        {
            title: 'ままま',
            start: '2015-07-21 12:30:00'

        },
        {
            title: 'おおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお',
            start: '2015-07-05'
        },
        {
            title: 'kokoko',
            start: '2015-07-16 10:00:00'

        }
    ],

    color: 'yellow',   // an option!
    textColor: 'black', // an option!

	eventClick: function(event) {
        if (event.url) {
            window.open(event.url);
            return false;
        }
	}

    })
});
</script>
<style type='text/css'>
#calendar {
	width: 1200px;
	margin: 0 auto;
}
</style>

<div id='calendar'></div>
<div class="Calendar index">
	<div id="calendar"></div>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('New Event', true), array('plugin' => 'full_calendar', 'controller' => 'events', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Manage Events', true), array('plugin' => 'full_calendar', 'controller' => 'events')); ?></li>
		<li><?php echo $this->Html->link(__('Manage Events Types', true), array('plugin' => 'full_calendar', 'controller' => 'event_types')); ?></li>
	</ul>
</div>