<div class="gallery2 container center">
  <?php $images = get_sub_field('gallery_2'); ?>
  <?php foreach($images as $image) : ?> 

    <div class="gallery-image mb4 ph3 <?php the_field('image_width', $image['id']); ?> <?php the_field('grid_image_position', $image['id']); ?>">

    <?php echo wp_get_attachment_image($image['id'], 'full'); ?>

    </div>
  <?php endforeach; ?>
  
  <div class="text-block f4 ph3" style="align-self:end;">
		<p class="measure"><?php the_sub_field('gallery_text_block'); ?></p>
	</div>
</div>


