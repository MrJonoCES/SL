<?php $process_title = get_sub_field('process_title'); ?>

<?php if(!empty($process_title)) : ?>
    <div class="process-title mx-auto shrill process-heading tc lh-solid">

        <h1 class="shrill process-heading tc w-100 mt0 mb3 lh-solid" style="<?php if (get_field('secondary_page_colour') ): ?> color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
            <?php echo $process_title; ?>
        </h1>
    </div>
<?php endif; ?>

<div class="prb process-container mx-auto">
    <?php $images = get_sub_field('process_gallery'); ?>
    <?php foreach($images as $image) : ?>

     
    <?php if(!empty($image)) : ?>
    <div class="<?php the_field('process_image_size', $image['id']); ?>" style="background-image:url('<?php echo $image['url']; ?>');"></div>
    <?php endif; ?>

        <?php $process_text = get_sub_field('process_text'); ?>

        <?php if(!empty($process_text)) : ?>
        <div class="rptr process-text <?php the_field('process_text_location', $image['id']); ?>" style="<?php if (get_field('secondary_page_colour') ): ?> background-color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
            <p class="pp">
            <?php echo $process_text; ?>
            </p>
        </div>
        <?php endif; ?>
    
    

  <?php endforeach; ?>
</div>