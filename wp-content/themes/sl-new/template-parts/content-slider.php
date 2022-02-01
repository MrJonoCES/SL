<section class="slideshow-holder">

  <?php if( have_rows('slides') ): ?>

    <div class="slideshow">

      <div class="holder">

        <?php while(have_rows('slides') ): the_row();?>

          <div style="<?php if (get_sub_field('image') ): ?> background-image: url(<?php the_sub_field('image'); ?>);<?php endif; ?>"></div>

        <?php endwhile; ?>

      </div>

    </div>

  <?php endif; ?>

  <div class="slider-controls">
  <a href="#" class="prev" id="sliderbutton">Prev</a>
  <a class="steps"></a>
  <a href="#" class="next" id="sliderbutton2">Next</a>
  </div>

</section>