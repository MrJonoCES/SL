<section class="slideshow-holder mb4" style="<?php if (get_sub_field('slider_bg') ): ?> background-color: <?php the_sub_field('slider_bg'); ?>;<?php endif; ?>">

  <?php if( have_rows('slides') ): ?>

    <div class="slideshow" id="cont">

      <div class="holder">

        <?php while(have_rows('slides') ): the_row();?>

          <div class="slide" style="<?php if (get_sub_field('image') ): ?> background-image: url(<?php the_sub_field('image'); ?>);<?php endif; ?>"></div>

        <?php endwhile; ?>

      </div>


  <?php endif; ?>

  <div class="slider-controls pt3">
  <a href="#" class="prev" id="sliderbutton" style="<?php if( get_field('page_colour') ): ?>color: <?php the_field('page_colour'); ?>; <?php endif; ?>">Prev</a>
  <a class="steps" style="<?php if( get_field('page_colour') ): ?>color: <?php the_field('page_colour'); ?>; <?php endif; ?>"><span>1/4</span></a>
  <a href="#" class="next" id="sliderbutton2" style="<?php if( get_field('page_colour') ): ?>color: <?php the_field('page_colour'); ?>; <?php endif; ?>">Next</a>
  </div>

  </div>

</section>