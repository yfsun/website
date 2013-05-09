<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<div class="row-fluid">
	<div class="span6">
	
	  	<table class="table table-striped">
	    <tr>
	        <th>Title</th>
	        <th>Created</th>
	    </tr>
	    <?php foreach ($posts as $post): ?>
	    <tr>
	        <td>
	            <?php echo $this->Html->link($post['Post']['title'],array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
	        </td>
	        <td>Date: <?php echo $post['Post']['created']; ?></td>
	    </tr>
	    <?php endforeach; ?>
	    <?php unset($post); ?>
		</table>
	</div>
	<div class="span6" id = "a">

	</div>

</div>



