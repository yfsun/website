
<?php foreach ($projects as $project): ?>
<dl>
  
  <dt>			<?php echo $project['Project']['title']  ?> </dt>
  <dd>			<?php echo $project['Project']['description']; ?> </dd>
  <dd>        <?php  echo   $this->Html->link('view',  $project['Project']['link'], array( 'target' => '_blank')); ?>  <dd>
</dl>

<?php endforeach; ?>
<?php unset($project); ?>