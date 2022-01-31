<section class="slideshow-holder">
  <div class="slideshow">


    <div class="holder">
      <div class="slide1" style="<?php if (get_field('slide1') ): ?> background-image: url(<?php the_field('slide1'); ?>);<?php endif; ?>"></div>
      <div class="slide2" style="<?php if (get_field('slide1') ): ?> background-image: url(<?php the_field('slide2'); ?>);<?php endif; ?>"></div>
      <div class="slide3" style="<?php if (get_field('slide1') ): ?> background-image: url(<?php the_field('slide3'); ?>);<?php endif; ?>"></div>
      <div class="slide4" style="<?php if (get_field('slide1') ): ?> background-image: url(<?php the_field('slide4'); ?>);<?php endif; ?>"></div>
    </div>
  </div>

  <div class="slider-buttons">
      <a href="#" class="prev">Prev</a>
      <a class="steps">
      </a>
      <a href="#" class="next">Next</a>
  </div>

</section>


