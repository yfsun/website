<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>	
	<title>
<link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php echo $scripts_for_layout; ?>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('generic');
		echo $this->Html->css('tab');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script('jq');
		echo $this->Html->script('jqui');
		echo $this->Html->script('tab');
	?>
</head>
<body>
<div id="container">
	<div id="header">
		<div id="navigation">
			<div id="navbar">
				 <div class="tabs">
     			 	<ul>
        				<li id="tabHeader_1">Home</li>
    				    <li id="tabHeader_2">About Me</li>
  	   			        <li id="tabHeader_3">Profile</li>
  					    <li id="tabHeader_4">Videos</li>
    				</ul>
  			  </div>
			</div>
		</div>
	</div>

  <div id="tabContainer">

    <div class="tabscontent">
      <div class="tabpage" id="tabpage_1">
        <h2>Page 1</h2>
        <p>Pellentesque habitant morbi tristique senectus...</p>
      </div>
      <div class="tabpage" id="tabpage_2">
        <h2>Page 2</h2>
        <p>Pellentesque habitant morbi tristique senectus...</p>
      </div>
      <div class="tabpage" id="tabpage_3">
        <h2>Page 3</h2>
        <p>Pellentesque habitant morbi tristique senectus...</p>
      </div>
      <div class="tabpage" id="tabpage_4">
        <h2>Page 4</h2>
        <p>Pellentesque habitant morbi tristique senectus...</p>
      </div>
    </div>
    </div>
    <div id="footer">
 	 </div>
  </div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
