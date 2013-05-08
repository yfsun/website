<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- made by www.metatags.org -->
<meta name="description" content="A personal website" />
<meta name="keywords" content="yifei sun, yifeisun, peronsal, website, videos, blogs, resume, contact" />
<meta name="author" content="metatags generator">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="3 month">
<title>YiFei Sun personal website</title>
<!--  -->

<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $scripts_for_layout ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
    <!-- Bootstrap -->
<?php
	echo $this->Html->css('bootstrap.min.css');
?>
<?php
	echo $this->Html->script('bootstrap.min.js');
?>



<style type="text/css">

body
{
	background-image: url("<?php echo $this->webroot; ?>img/bindinglight.png");
}

/* Header CSS*/
#header{ top: 0; margin-left: auto; position:fixed; width:100%; text-align:center; background-image: url("<?php echo $this->webroot; ?>img/blackorchid.png"); z-index: 900; opacity:.97;



 }
#header_container {height:160px; margin-left:auto; margin-right:auto; position:relative; width: 600px ; top:10px; opacity: 1; }

h3{
	border-bottom: 1px solid;
}

/* Body CSS*/
#body_container
{ position:relative; left: ; right: 0; bottom: 0; top: 200px; margin-left:auto; margin-right:auto; width: 1024px; border-left:2px solid; border-right:2px solid; padding-top: 30px; padding-bottom: 30px ;padding-left: 10px; padding-right: 10px;}
 
#potrait
{
	position:relative;
	width:100px;
	height:80px;
	margin-bottom: 13px;
	opacity: 1;
}

.divider{
	border-bottom: 3px solid;
	width: 80%;
	margin-left:auto;
	margin-right:auto;
	margin-top: 20px;
	margin-bottom: 10px;
	
}

.nav-wrapper{
	position: absolute; 	

}

#footer{
	margin-top:50%;
	border-top: 5px solid;
	color: #222;
text-shadow: 0px 2px 3px #555;
text-align: center;
}

</style>	
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37545937-1']);
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
		<div id="header_container">
	
			<div class="nav-wrapper">
	
			<div id="potrait">
			<?php echo $this->Html->image('potrait.png', array('alt' => ''));  ?>
			
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
			echo "<div class=\"page-header\">";
			echo "<h1> ".$page_header."</h1>";
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