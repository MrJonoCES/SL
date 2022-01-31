<section class="slideshow-holder">

<?php if( have_rows('slides') ): ?>
  <div class="flexslider">
    <ul class="slides">
    <?php while(have_rows('slides') ): the_row();

    // vars
    $image = get_sub_field('images');
    $imageurl = $image['sizes']['slider'];
    $title = get_sub_field('title');
    ?>

    <li><img src="<?php echo $imageurl;?>" alt="<?php echo $title;?>"/></li>

    <?php endwhile; ?>
    </ul>
  </div>
<?php endif; ?>

      <div class="custom-navigation">
        <a href="#" class="flex-prev">Prev</a>
        <div class="custom-controls-container"></div>
        <a href="#" class="flex-next">Next</a>
      </div>

</section>


