<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Meta Tags-->
<meta name="description" content="A personal website" />
<meta name="keywords" content="yifei sun, yifeisun, peronsal, website, videos, blogs, resume, contact" />
<meta name="author" content="metatags generator">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="3 month">


<title><?php echo $title_for_layout?></title>
	
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $scripts_for_layout ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
    <!-- Bootstrap -->
<?php
	echo $this->Html->css('bootstrap.min.css');
	echo $this->Html->script('bootstrap.min.js');
	echo $this->Html->css('default.css');
?>



<style type="text/css">
</style>	
<!-- Google Analytics -->
<script type="text/javascript">
	$(document).ready(function(){
		$('.light-button-container').hide();
	});

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37545937-2']);
  _gaq.push(['_setDomainName', 'yifeisun.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body>
	<!-- Shadow for light effect -->
	<div id="shadow"></div>
	<!-- Header -->
	<div id="header">
		<div class="light-button-container">
	<img src="<?php echo $this->webroot; ?>img/bulb.png" id="bulb"></img>
	<div class="slider-frame">
		<span class="light-button">ON</span>
	</div>
</div>
		<div id="header_container">
			<div class="nav-wrapper">
	
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<div class="container">	
						<a class="brand" href="#">
							<table><tr>
							<td>
								<div id="potrait">
									<?php echo $this->Html->image('potrait.png', array('alt' => ''));  ?>
								</div>						
							</td>
							<td>YiFei Sun</td>
							</tr></table>
						</a>
						<ul class="nav">
							<?php
							// Home Tab
							echo $this->Tab->isActive("Homes");
							echo $this->Html->link('Home', array('controller'=>'Homes', 'action'=>'index'));
							echo "</li><li class=\"divider-vertical\"></li>";							
							// Blogs Tab
							echo $this->Tab->isActive("Posts");
							echo $this->Html->link('Blogs', array('controller'=>'Posts', 'action'=>'index'));
							echo "</li><li class=\"divider-vertical\"></li>";
							
							// Video Tab
							echo $this->Tab->isActive("Videos");
							echo $this->Html->link('Video', array('controller'=>'Videos', 'action'=>'index'));
							echo "</li><li class=\"divider-vertical\"></li>";
							
							// Projects Tab
							echo $this->Tab->isActive("Projects");
							echo $this->Html->link('Project', array('controller'=>'Projects', 'action'=>'index'));
							echo "</li><li class=\"divider-vertical\"></li>";

							?>
						</ul>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	
	
	<div id="body_container">
		<?php 
		if (isset ($page_header)){
			echo "<div>";
			echo "<h3> ".$page_header."</h3>";
			echo "</div>";
		}
		echo $content_for_layout;
		
	 	?>
		
		<!-- Footer -->	
		<div id="footer">
			Copyright &copy 2013 YiFeiSun All rights reserved
		</div>
	</div>

	

</body>
</html>