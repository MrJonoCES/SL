<section class="process">

<div class="process-title center shrill process-heading tc lh-solid">
    <?php $process_title = the_sub_field('process_title'); ?>

    <?php if(!empty($process_title)) : ?>
        <h1 class="shrill process-heading tc w-100 mt0 mb3 lh-solid">
            <?php echo $process_title; ?>
        </h1>
    <?php endif; ?>

</div>

<div class="process-container">
    <?php $images = get_sub_field('process_gallery'); ?>
    <?php foreach($images as $image) : ?>

    <div class="<?php the_field('process_image_size', $image['id']); ?>">

        <?php echo wp_get_attachment_image($image['id'], 'full'); ?>

    </div>

    <div class="process-text f4 ph3 <?php the_field('process_text_height', $image['id']); ?>">
        <?php $process_text = the_sub_field('process_text'); ?>

        <?php if(!empty($process_text)) : ?>
        <p>
        <?php echo $process_text; ?>
        </p>
        <?php endif; ?>
    
    </div>

  <?php endforeach; ?>
</div>

</section>