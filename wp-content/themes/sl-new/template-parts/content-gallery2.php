<div class="gallery2 container center">
  <?php $images = get_sub_field('gallery_2'); ?>
  <?php foreach($images as $image) : ?> 

    <div class="gallery-image mb4 ph3 <?php the_field('image_width', $image['id']); ?> <?php the_field('grid_image_position', $image['id']); ?>">

    <?php echo wp_get_attachment_image($image['id'], 'full'); ?>

    </div>
  <?php endforeach; ?>

<div class="text-block mb4 f4 ph3" style="align-self:end;">
  <?php $gallerytext = the_sub_field('gallery_text_block'); ?>

    <?php if(!empty($gallerytext)) : ?>
    <p class="measure">
    <?php echo $gallerytext; ?>
    </p>
    <?php endif; ?>
    
  </div>
</div>