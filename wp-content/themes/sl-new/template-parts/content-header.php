<div class="big-title absolute shrill hero-slide pa3 pa5-ns mt5 lh-solid" id="post_title" style="<?php if (get_field('secondary_page_colour') ): ?> color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
	<?php the_title(); ?>
</div>
<div class="hero-screen h-100 w-100 hero-slide absolute" style="<?php if( get_field('page_colour') ): ?>background-color: <?php the_field('page_colour'); ?>; <?php endif; ?>">
</div>
<div class="hero relative w-100 mb4 flex items-center justify-center" style="<?php if( get_field('hero_image') ): ?>background-image: url(<?php the_field('hero_image'); ?>); <?php endif; ?>">
	
</div>

<div class="container mx-auto mb3 ph3 pv2 pv3-ns">
	
	<h1 class="w-100 w-70-ns mint-bold proj-title mt0 mb3 lh-solid" style="<?php if( get_field('page_colour') ): ?>color: <?php the_field('page_colour'); ?>; <?php endif; ?>">
		<?php the_title(); ?>
	</h1>
	<p class="mint-bold w-100 mt0 mb3" style="<?php if( get_field('page_colour') ): ?>color: <?php the_field('page_colour'); ?>; <?php endif; ?>">
		<?php the_field('location'); ?>
	</p>
	<div class="proj-intro container" style="justify-content:space-between;">
		<p class="measure mint mt0 mb3 pr0 pr6-ns" style="<?php if( get_field('page_colour') ): ?>color: <?php the_field('page_colour'); ?>; <?php endif; ?>">
			<?php the_field('subhead'); ?>
		</p>
		<p class="mint mt0 mb3 pr3">
			<?php the_field('intro'); ?>
		</p>
	</div>

</div>