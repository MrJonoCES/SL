<div class="gallery container flex flex-wrap center">
  <?php $images = get_sub_field('gallery'); ?>
  <?php foreach($images as $image) : ?> 

    <div class="gallery-image mb4 ph3 <?php the_field('image_width', $image['id']); ?> <?php the_field('image_order', $image['id']); ?>">

    <?php echo wp_get_attachment_image($image['id'], 'full'); ?>

    </div>
  <?php endforeach; ?>
  
  <div class="self-center text-block f4 w-50-ns ph3">
		<p class="v-mid"><?php the_sub_field('gallery_text_block'); ?></p>
	</div>
</div>


<!-- <?php if( have_rows('gallery') ): ?>

<div class="self-center text-block f4 w-50-ns ph3">

  <?php while(have_rows('gallery') ): the_row();?>

    <p class="v-mid"><?php the_sub_field('gallery_text_block'); ?></p>

  <?php endwhile; ?>
</div>
<?php endif; ?> -->