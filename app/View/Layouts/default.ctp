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

<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--style>
body 
{
	
	background-image: url('/img/dark_grey.png');
}
</style-->

<style type="text/css">

body
{
	background-image: url('/img/binding_light.png');
}


/* Header CSS*/
#header{ top: 0; margin-left: auto; position:fixed; width:100%; text-align:center; background-color:#005580; z-index: 100;}
#header_container {height:180px; margin-left:auto; margin-right:auto; position:relative; width: 500px ; top:0;}


/* Body CSS*/
#body_container
{ position:relative; left: ; right: 0; bottom: 0; top: 200px; margin-left:auto; margin-right:auto; width: 700px; border-left:1px solid; border-right:1px solid; border-radius:10px; padding-top: 30px; padding-bottom: 30px ;padding-left: 10px;}
 
#potrait
{
	width:100px;
	height:80px;
	margin-bottom:40px;
}

</style>	
</head>
<body>
	<!-- Header -->
	<div id="header">
		
		<div id="header_container">
			<div id="potrait">
			<?php echo $this->Html->image('potrait	.png', array('alt' => ''));  ?>
			</div>
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container">	
						<a class="brand" href="#">YiFei Sun</a>
						<ul class="nav">
							<?php
							// Home Tab
							echo $this->Tab->isActive("Homes");
							echo $this->Html->link('Home', array('controller'=>'Homes', 'action'=>'index'));
							echo "</li>";
							
							// Blogs Tab
							echo $this->Tab->isActive("Posts");
							echo $this->Html->link('Blogs', array('controller'=>'Posts', 'action'=>'index'));
							echo "</li>";
							
							// Video Tab
							echo $this->Tab->isActive("Videos");
							echo $this->Html->link('Video', array('controller'=>'Videos', 'action'=>'index'));
							echo "</li>";
							
							// Projects Tab
							echo $this->Tab->isActive("Projects");
							echo $this->Html->link('Project', array('controller'=>'Projects', 'action'=>'index'));
							echo "</li>";
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="body_container">
		<?php echo $content_for_layout ?>
	</div>

	<!-- Footer -->	
	<div id="footer">
		
	</div>

</body>
</html>