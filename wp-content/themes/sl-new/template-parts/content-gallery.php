<div class="gallery container mx-auto">
  <?php $images = get_sub_field('gallery'); ?>
  <?php foreach($images as $image) : ?> 

    <div class="gallery-image mb3 ph3 col col-12 <?php the_field('image_width', $image['id']); ?> <?php the_field('image_order', $image['id']); ?>">

    <?php echo wp_get_attachment_image($image['id'], 'full'); ?>

    </div>
  <?php endforeach; ?>
  
  <div class="self-center text-block f4 col col-12 md-col-6 ph3">
  <?php $gallerytext = get_sub_field('gallery_text_block'); ?>

    <?php if(!empty($gallerytext)) : ?>
    <p class="mint measure pr3-ns mt0 mb3 mv0-ns">
    <?php echo $gallerytext; ?>
    </p>
    <?php endif; ?>
    
  </div>
</div>