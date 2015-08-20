<script type="text/javascript">
plgFcRoot = '<?php echo $this->Html->url('/'); ?>' + "full_calendar";
</script>

<?php
echo $this->Html->css ( 'fullcalendar.css' );
//echo $this->Html->css ( 'fullcalendar.print.css' );
echo $this->Html->script ( 'jquery.min.js' );
echo $this->Html->script ( 'moment.min.js' );
echo $this->Html->script ( 'fullcalendar.min.js' );
?>

<div class="Calendar index">

<script type="text/javascript">
$(document).ready(function() {
    $('#calendar').fullCalendar({
    	header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
         },
         events: 'json-events.php'


        })
});
</script>
<div id="calendar"></div>