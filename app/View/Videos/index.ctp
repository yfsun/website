<div class="light-button-container">
	<img src="<?php echo $this->webroot; ?>img/bulb.png" id="bulb"></img>
	<div class="slider-frame">
		<span class="light-button">ON</span>
	</div>
</div>


<div id="cinema">
	<div id="player">
	</div>	
</div>


<div id="thumbnail-wrap">

	<div id="prev">
    	<img src="<?php echo $this->webroot; ?>img/leftArrow.png" alt="" />
	</div>
	
	    <a href="#" id="next"><img src="<?php echo $this->webroot; ?>img/rightArrow.png" alt="" /></a>
	
	
	<div id="gallery-wrap">
		<ul class="thumbnails">
		<?php foreach ($videos as $video): ?>
		<li class="span4">
			<a onclick="loadVideo('<?php echo $video['Video']['vidid'] ?>')" class="thumbnail">
				<img src="http://img.youtube.com/vi/<?php echo $video['Video']['vidid'] ?>/0.jpg" width= "400 	" height ="100"  />
			</a>
			<h3><?php echo $video['Video']['name']; ?></h3>
			<p><?php echo $video['Video']['description']; ?></p>
		</li>
		
		<?php endforeach; ?>
		<?php unset($video); ?>
		</ul>
	</div>
</div>

<style>
/* Thumbnail styles start*/

#thumbnail-wrap{height: 400px;  border: 1px solid; margin-top: 10px;
-moz-border-radius: 22px;
-webkit-border-radius: 22px;
border-radius: 22px;
/*IE 7 AND 8 DO NOT SUPPORT BORDER RADIUS*/
-moz-box-shadow: 0px 0px 13px #000000;
-webkit-box-shadow: 0px 0px 13px #000000;
box-shadow: 0px 0px 13px #000000;
/*IE 7 AND 8 DO NOT SUPPORT BLUR PROPERTY OF SHADOWS*/

}



#gallery-wrap{margin: 0 auto; overflow: hidden; width: 800px; position: relative}
 
.thumbnails {position: relative;}


#prev,#next {position: relative; float: left; width: 100px; height: 100%; margin: auto}
#next{float: right}	


#prev img {
	width: 70px;
	height: 70px;
	margin-top: -20px;
	position:absolute;
	top: 50%;
}


#next img {
	width: 70px;
	height:70px;
	margin-top: -20px;
	position:absolute;
	top: 50%;
}






/* Thumbnail styles end*/
.light-button-container {
  position: fixed;
  margin-left: 0px;
  margin-top: 200px;
	
}
.slider-frame {
  position: relative;
  display: block;
  margin: 0 auto;
  width: 84px;
  height: 27px;
  background-color: rgb(246, 249, 251);
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0px 0px 4px 0 rgba(0, 0, 0, 0.25);
  -moz-box-shadow: inset 0px 0px 4px 0 rgba(0, 0, 0, 0.25);
  box-shadow: inset 0px 0px 4px 0 rgba(0, 0, 0, 0.25);
}
.light-button {
  display: block;
  width: 43px;
  height: 27px;
  line-height: 27px;
  background: #EDF2F7;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-transition: all 0.25s ease-in-out;
  -moz-transition: all 0.25s ease-in-out;
  transition: all 0.25s ease-in-out;
  color: #000;
  font-family:sans-serif;
  font-size:11px;
  font-weight:bold;
  text-align: center;
  cursor: pointer;
  -webkit-box-shadow: inset 0px 0px 4px 0 rgba(0, 0, 0, 0.25);
  -moz-box-shadow: inset 0px 0px 4px 0 rgba(0, 0, 0, 0.25);
  box-shadow: inset 0px 0px 4px 0 rgba(0, 0, 0, 0.25);
}
.light-button.off {
  margin-left: 40px;
  background: #EDF2F7;
}

#player.show{
	position: relative;
	z-index: 200;
}

html, body {
    margin: 0;
    padding: 0
}

body {
    position: relative
}

#shadow {background-color:black; position:absolute; left:0; top:160px; right: 0; bottom: -300px;opacity:0.1; z-index:150}
.light-button-container  {position: fixed; left: 100px; top: 100px; z-index: 200; }

#cinema {position:relative; width: 640px; height: 390px; border: 10px solid; margin:auto}
#cinema iframe {width: 640: height: 390;margin:auto}


#bulb {margin-bottom: 10px;}

</style>
<script src="https://www.youtube.com/iframe_api"></script>
<script>

function loadVideo(vidId){
	$('#player').show();
	console.log (vidId);
	player.loadVideoById(vidId);	
}





	var videos = <?php echo json_encode($videos); ?>;


// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;

function onYouTubePlayerAPIReady() {
    player = new YT.Player('player', {
        height: '390',
        width: '640',
        videoId: '',
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
    
    $('#player').hide();
}

// 4. The API will call this function when the video player is ready.


function onPlayerReady(event) {
    //event.target.playVideo();
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false;

function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING ) {
    	lightOff();
    }
}

function stopVideo() {
    player.stopVideo();
}

// Set shadow height  
$(document).ready(function(){
	// Handle Light effect
	$("#shadow").hide();
	$("#shadow").click(function(event) {
	    if (window.light === "off"){
	    	console.log ('off');
			lightOn();
		}
	});
	
    // Handle thumbnail slideshow
    var totalImages = jQuery(".thumbnails > li").length, 
        imageWidth = jQuery(".span4").outerWidth(true),
        totalWidth = imageWidth * totalImages,
        visibleWidth = jQuery("#gallery-wrap").width(),
        stopPosition = (visibleWidth - totalWidth);
        
    console.log (stopPosition);   
        
    jQuery(".thumbnails").width(totalWidth);
 
        jQuery("#prev").click(function(){
    	var leftMargin = jQuery(".thumbnails").position().left;
		
        if(leftMargin < 0 && !jQuery(".thumbnails").is(":animated")){
        	leftMargin += imageWidth;
        	if (leftMargin > 0) leftMargin = 0;            	
            jQuery(".thumbnails").animate({left :leftMargin  + "px"});
        }
        return false;
    });
    
    jQuery("#next").click(function(){
    	var leftMargin = jQuery(".thumbnails").position().left;      	
        if(leftMargin > stopPosition && !jQuery(".thumbnails").is(":animated")){
        	leftMargin -= imageWidth;
        	if (leftMargin < stopPosition) leftMargin = stopPosition;
            jQuery(".thumbnails").animate({left : leftMargin + "px"});
        }
        return false;
    });
	
	
	hoverEffect('#prev');
	hoverEffect('#next');
	
});

function hoverEffect(divID){
	var overPercent = 120;

	jQuery(divID).hover(function(){
		scaleCenter(jQuery(divID).find('img'), overPercent);
	},
	function(){
		scaleCenter(jQuery(divID).find('img'), (100/overPercent) *100);
	});
	
}

//
function scaleCenter(selector, percent){
	var ow =  selector.width();
	var oh =  selector.height();
	
	var nw = ow * percent/100; 
	var nh = oh * percent/100;
			
    selector.width(nw);
    selector.height(nh);
	    
	var offset = {
        top: - ((nh -oh) /2),
        left: - ((nw -ow) /2)
    };
  
        // Transform to center scale
    selector.css('left', '+=' + offset.left);
	selector.css('top', '+=' + offset.top);  
		
}


var light = "on";

// Light Button
$('.slider-frame').click(function(){
	if (window.light === "off"){
		lightOn();
	}
	else{
		lightOff();
	}

});

function lightOn(){
	$("#player").removeClass('show');
	$("#shadow").fadeTo('slow', 0.1, function() {
		// Animation complete.
	});
	$("#shadow").hide();
	$(".light-button").removeClass('off').html('ON');	
	window.light = "on";
}

function lightOff(){
	$("#player").addClass('show');
	// Turn Light off
	$("#shadow").fadeTo('slow', 1, function() {
		// Animation complete.
	});
	$("#shadow").show();
	$(".light-button").addClass('off').html('OFF');
	window.light = "off";		
}

	
</script>