<section class="process">

<div class="process-title center">
<h1 class="shrill process-heading tc w-100 mt0 mb3 lh-solid">The Process</h1>
</div>

<div class="process-container">

<?php if( have_rows('process_image') ): ?>

<?php while(have_rows('process_image') ): the_row();?>

  <div class="sizeA" style="<?php if (get_sub_field('process_image') ): ?> background-image: url(<?php the_sub_field('process_image'); ?>);<?php endif; ?>"></div>

<?php endwhile; ?>


    <div class="process-text f4 ph3">
        <?php $process_text = the_sub_field('process_text'); ?>

        <?php if(!empty($process_text)) : ?>
        <p>
        <?php echo $process_text; ?>
        </p>
        <?php endif; ?>
    
    </div>
    
</div>
<?php endif; ?>

</section>