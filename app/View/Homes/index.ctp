<div class ="header">
	<h3>
		About myself...
	</h3>
</div>
I am currently a 4<sup>th</sup> year Computer Science Student at University of Waterloo. I am currently learning webdevlopement. This website will be the start of my learning experience.  
<div class ="header">
	<h3>
		My work experiences...77
	</h3>
</div>
<div class="layer1">
	<div class="heading">
		<div id="parent">
		    <div class="right">
				<?php echo $this->Html->image('plus.png', array('alt' => '', 'class' => 'plus'));  ?>
	    		<?php echo $this->Html->image('minus.png', array('alt' => '', 'class' => 'minus'));  ?>
		    </div> 
		    <div class="left"><b><p>Teradata Corporation  (Programmer / Analyst Intern)</p></b><small>(May 2012 – Jan 2013)</small></div>
		</div>
	</div>	
	
	<div class="content">
		<ul>
			<li>Developed Stored Procedure from business requirements</li>
			<li>Modified Installation Package using Java class</li>
			<li>Developed installation framework enhancement using Perl and Korn shell</li>
			<li>Developed Migration Scripts for customer upgrade</li>
		</ul>
	</div>
	
	<div class="heading">
		<div id="parent">
		    <div class="right">
				<?php echo $this->Html->image('plus.png', array('alt' => '', 'class' => 'plus'));  ?>
	    		<?php echo $this->Html->image('minus.png', array('alt' => '', 'class' => 'minus'));  ?>
		    </div> 
		    <div class="left"><p>Genesys Telecommunications  (Quality Assurance Intern)</p><small>(2011 Jan-April, Sept-Dec)</small></div>
		</div>
	</div>	
	
	<div class="content">
		<ul>
			<li>Developed automation scripts for automation test</li>
			<li>Conducted functional testing as well as performance testing</li>
			<li>Contributed to developing web interface integration on automation testing using PHP</li>
			<li>Developed real time testing output monitor on web interface using PHP and AJAX</li>
		</ul>
	</div>
	
	
	<div class="heading">
		<div id="parent">
		    <div class="right">
				<?php echo $this->Html->image('plus.png', array('alt' => '', 'class' => 'plus'));  ?>
	    		<?php echo $this->Html->image('minus.png', array('alt' => '', 'class' => 'minus'));  ?>
		    </div> 
		    <div class="left"><p>Impulse Technologies Ltd. (IT Support/Network administrator)</p><small>(May 2010 - August 2010)</small></div>
		</div>
	</div>	
	
	<div class="content">
		<ul>
			<li>DTroubleshot computer software/hardware problems</li>
			<li>Maintained company server</li>
			<li>Provided general support for all computer related issues</li>
			<li>Created tutorials for staff training</li>
		</ul>	
	</div>
	
	
</div>

<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery(".content").hide();
	jQuery(".right").children("img.minus").hide();

	//toggle the componenet with class msg_body
	jQuery(".heading").click(function() {
		jQuery(this).next(".content").slideToggle(100, function() {    	
			if (jQuery(this).is(':hidden')) {
				jQuery(this).prev(".heading").find("img.minus").hide();
				jQuery(this).prev(".heading").find("img.plus").show();
			} else {
				jQuery(this).prev(".heading").find("img.minus").show();
				jQuery(this).prev(".heading").find("img.plus").hide();
			}
			console.log (jQuery(this).prev(".heading").children("img.minus"));
			
			
		});
	});
});
</script>


<style>
.layer1 {
margin: 0;
padding: 0;
}


.plus { width: 20px; height: 20px; }
.minus { width: 20px; height: 20px; }


.heading {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
	background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
	background-color:#ededed;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	color:#000000;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:1px 1px 0px #ffffff;
	width: 90%;

}.heading:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
	background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
	background-color:#dfdfdf;
}.

.header { border-bottom: 10px solid #dfdfdf; background-color:#003BB3 }
.content { padding: 5px 30px; }
#parent {
    overflow: hidden;
}
.right {
    float: right;
}
.left {
    overflow: hidden;
    width: 90%;
}


</style>
