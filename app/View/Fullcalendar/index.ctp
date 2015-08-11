<style>
body {
	margin: 0;
	padding: 0;
	font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
	font-size: 14px;
}

#script-warning {
	display: none;
	background: #eee;
	border-bottom: 1px solid #ddd;
	padding: 0 10px;
	line-height: 40px;
	text-align: center;
	font-weight: bold;
	font-size: 12px;
	color: red;
}

#loading {
	display: none;
	position: absolute;
	top: 10px;
	right: 10px;
}

#calendar {
	max-width: 900px;
	margin: 40px auto;
	padding: 0 10px;
}
</style>
</head>
<body>
	<div id='script-warning'>
		<code>php/get-events.php</code>
		must be running.
	</div>

	<div id='loading'>loading...</div>

	<div id='calendar'></div>
	<script type="text/javascript">
plgFcRoot = '<?php echo $this->Html->url('/'); ?>' + "fullcalendar";
</script>

<?php
echo $this->Html->css ( 'fullcalendar.css' );
// echo $this->Html->css ( 'fullcalendar.print.css' );
echo $this->Html->script ( 'jquery.min.js' );
echo $this->Html->script ( 'moment.min.js' );
echo $this->Html->script ( 'fullcalendar.min.js' );
?>

<script>
$(document).ready(function() {
	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		editable: false,
		eventLimit:true,
		events: "/events/feed"
	});

});
</script>
</body>