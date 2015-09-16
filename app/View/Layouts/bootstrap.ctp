<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
		<?php echo __('WEBCASカレンダー'); ?>
	</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
	<?php echo $this->Html->css('bootstrap'); ?>
	<style>
body {
	padding-top: 60px;
	/* 60px to make the container go all the way to the bottom of the topbar */
}
</style>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- Le fav and touch icons -->
<!--
	<link rel="shortcut icon" href="/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
	-->

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target=".nav-collapse">
					 <span class="sr-only">Toggle navigation</span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					WEBCASカレンダー </a>
			</div>
			<div class="collapse navbar-collapse" id=".nav-collapse">
				<ul class="nav navbar-nav">
					<li><?php echo $this->Html->link('一覧', array(
							'controller' => 'Fullcalendars',
							'action' => 'index',
						)); ?></li>
					<li><?php echo $this->Html->link('検索', array(
							'controller' => 'Searches',
							'action' => 'index',
						)); ?></li>
					</ul>
			</div>
			<!--/.nav-collapse -->
	</nav>
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>

</body>
</html>
