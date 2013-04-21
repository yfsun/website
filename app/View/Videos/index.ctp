<h1>Blog posts</h1>
<div class="row-fluid">
	<div class="span6">
	
	  	<table class="table table-striped">
	    <tr>
	        <th>Title</th>
	        <th>Created</th>
	    </tr>
	    <tr>
		    <?php foreach ($videos as $video): ?>
	    <tr>
	        <td>
	            <?php
	            echo $this->Youtube->video($video['Video']['link']); ?>
	        </td>
	    </tr>
	    <?php endforeach; ?>
	    <?php unset($video); ?>
	    </tr>
	
		</table>
	</div>
	<div class="span6" id = "a">

	</div>

</div>

 

