<div class="gallery2 center">
  <?php $images = get_sub_field('gallery_2'); ?>
  <?php foreach($images as $image) : ?> 

    <div class="full-image mb4">

    <?php echo wp_get_attachment_image($image['id'], 'full'); ?>

    </div>
  <?php endforeach; ?>

</div>

