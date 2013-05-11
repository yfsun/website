<!-- File: /app/View/Posts/index.ctp -->

<h3>Blog posts</h3>

<?php foreach ($posts as $post): ?>
<dl>
	<dt> <?php echo $post['Post']['created'];  ?></dt>
	<dt> <?php echo $post['Post']['title']  ?> </dt>
	<dd> <?php echo h($post['Post']['body']); ?> </dd>
</dl>
<div class='divider'>
</div>

<?php endforeach; ?>
<?php unset($post); ?>
