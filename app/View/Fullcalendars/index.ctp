<head>
<?php
echo $this->Html->script ( 'jquery.min.js' );
echo $this->Html->css ( 'fullcalendar.min.css' );
echo $this->Html->script ( 'moment.min.js' );
echo $this->Html->script ( 'fullcalendar.js' );
?>

<script type="text/javascript">
$(document).ready(function() {

	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		editable: false,
		//ヘッダーの書式
		columnFormat: {
		month: 'ddd',
		week: 'D[(]ddd[)]',
		day: 'D[(]ddd[)]'
		},
		// タイトルの書式
		titleFormat: {
		month: 'YYYY年 M月',
		week: 'YYYY年 M月 D日',
		day: 'YYYY年 M月 D日[(]ddd[)]',
		},
		//more表示の書式
		dayPopoverFormat:'YYYY年 M月 D日[(]ddd[)]',
		// 月名称
		monthNames: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
		// 月略称
		monthNamesShort: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
		// 曜日名称
		dayNames: ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'],
		// 曜日略称
		dayNamesShort: ['日', '月', '火', '水', '木', '金', '土'],
		// スロットの時間の書式
		axisFormat: 'H:mm',
		// 時間の書式
		timeFormat: 'H:mm',
		// ボタン文字列
		buttonText: {
		prev: '前',
		next: '次',
		prevYear: '前年',
		nextYear: '翌年',
		today: '今日',
		month: '月',
		week: '週',
		day: '日'
		},
		 // 高さ(px)
        height: 700,
        // コンテンツの高さ(px)
        contentHeight: 600,
        // カレンダーの縦横比(比率が大きくなると高さが縮む)
        aspectRatio: 1.35,
		events: "posts/index"
	})
});

</script>
</head>
<body>
	<div id='calendar'></div>
</body>
</html>