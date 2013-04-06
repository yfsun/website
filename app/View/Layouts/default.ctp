<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $scripts_for_layout ?>

    <!-- Bootstrap -->
<?php
	echo $this->Html->css('bootstrap.min.css');
?>
<style>
body 
{
	background-image: url('/img/dark_grey.png');
}
</style>

</head>
<body>
	<!-- Header -->
	<div id="header">
	    <div id="menu">
			<div class="navbar">
			  <div class="navbar-inner">
			<a class="brand" href="#">YiFei Sun</a>
			<ul class="nav">
			  <li class="active"><?php echo $this->Html->link('Home', array('controller'=>'Homes', 'action'=>'index')); ?></li>
			  <li><?php echo $this->Html->link('Add', array('controller'=>'Posts', 'action'=>'index')); ?></li>
			  <li><a href="#">Link</a></li>
			</ul>
			  </div>
			</div>
	    </div>
	</div>
	
	<?php echo $content_for_layout ?>

	<!-- Footer -->	
	<div id="footer">...</div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>