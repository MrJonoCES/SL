<!-- header bg image -->
<div class="big-title shrill hero-slide pa5 mt5 lh-solid" id="post_title" style="<?php if (get_field('secondary_page_colour') ): ?> color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
	<?php the_title(); ?>
</div>
<div class="hero-screen hero-slide" style="<?php if( get_field('page_colour') ): ?>background-color: <?php the_field('page_colour'); ?>; <?php endif; ?>">
</div>
<div class="hero w-100 mb4 flex items-center justify-center" style="<?php if( get_field('hero_image') ): ?>background-image: url(<?php the_field('hero_image'); ?>); <?php endif; ?>">
	
</div>

<div class="container mx-auto mb3 ph3 pv2 pv3-ns">
	
	<!-- title content -->

	<h1 class="w-100 w-40-ns mint-bold proj-title mt0 mb3 lh-solid" style="<?php if( get_field('page_colour') ): ?>color: <?php the_field('page_colour'); ?>; <?php endif; ?>">
		<?php the_title(); ?>
	</h1>
	<p class="mint-bold w-100 mt0 mb3" style="<?php if( get_field('page_colour') ): ?>color: <?php the_field('page_colour'); ?>; <?php endif; ?>">
		<?php the_field('location'); ?>
	</p>
	<div class="flex container two-col" style="justify-content:space-between;">
		<p class="measure col col-12 md-col-3 mint mt0 mb3 pr0 pr6-ns" style="<?php if( get_field('page_colour') ): ?>color: <?php the_field('page_colour'); ?>; <?php endif; ?>">
			<?php the_field('subhead'); ?>
		</p>
		<p class="mint col col-12 md-col-8 mt0 mb3 pr3">
			<?php the_field('intro'); ?>
		</p>
	</div>

</div>