<!-- header bg image -->
<div class="hero w-100 flex items-center justify-center">
	<?php the_post_thumbnail('hero'); ?>
</div>

<div class="container ph3 pt2 pb6">
	
	<!-- header content -->

	<h1 class="w-100 w-50-ns f1 patrona proj-title mt0 mb3 lh-solid" style="<?php if( get_field('page_colour') ): ?>color: <?php the_field('page_colour'); ?>; <?php endif; ?>">
		<?php the_title(); ?>
	</h1>
	<p class="f2 mint-bold w-100 mt0 mb4" style="<?php if( get_field('page_colour') ): ?>color: <?php the_field('page_colour'); ?>; <?php endif; ?>">
		<?php the_field('location'); ?>
	</p>
	<div class="flex container two-col" style="justify-content:space-between;">
		<p class="mint-bold-italic w-50-ns mt0 mb4 pr6" style="<?php if( get_field('page_colour') ): ?>color: <?php the_field('page_colour'); ?>; <?php endif; ?>">
			<?php the_field('subhead'); ?>
		</p>
		<p class="w-50-ns mt0 mb4 pr3">
			<?php the_field('intro'); ?>
		</p>
	</div>

</div>


<!-- style="<?php if( get_field('hero_image') ): ?>background-image: url(<?php the_field('hero_image'); ?>); <?php endif; ?>" -->