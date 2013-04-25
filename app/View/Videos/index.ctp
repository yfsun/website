<h3>Some cool videos...</h3>
<?php foreach ($videos as $video): ?>
<div class="media">
  <a class="pull-left" href="#">
  <?php echo $this->Youtube->video($video['Video']['link'],array(), array('width' => '312', 'height' => '184')); ?>
  </a>
  <div class="media-body">
    <h4 class="media-heading"><?php echo $video['Video']['name']; ?></h4>
    <?php echo $video['Video']['description']; ?>
  </div>

</div>
<div class="divider">
</div>

<?php endforeach; ?>
<?php unset($video); ?>

