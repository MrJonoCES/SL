<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomadsun
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<!-- if we have some flexible content, let’s loop through it -->
		<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();
			// if it’s a header, go through the data
			if( get_row_layout() == 'header' ): ?>

			<?php get_template_part( 'template-parts/content-header' ); ?>

			<!-- if it’s a text component, show us the data -->
			<?php elseif( get_row_layout() == 'text_block' ): ?>

			<?php get_template_part( 'template-parts/content-text' ); ?>

			<?php elseif( get_row_layout() == 'slider' ): ?>

			<?php get_template_part( 'template-parts/content-slider' ); ?>

			<?php elseif( get_row_layout() == 'gallery' ): ?>

			<?php get_template_part( 'template-parts/content-gallery' ); ?>
				
			<?php endif; 
		endwhile; endif; ?>

	</div><!-- .entry-content -->

<?php if( have_rows('process_content') ): ?>
	<section class="process" style="<?php if (get_field('page_colour') ): ?>background-image: linear-gradient(to right, <?php the_field('page_colour'); ?> 1px, transparent 1px), linear-gradient(to bottom, <?php the_field('page_colour'); ?> 1px, transparent 1px);<?php endif; ?>">
    <?php while( have_rows('process_content') ): the_row(); ?>
	    <?php if( get_row_layout() == 'process_gallery' ): ?>
            <?php get_template_part( 'template-parts/content-process' ); ?>
        <?php endif; ?>
	<?php endwhile; ?>
	</section>
<?php endif; ?>

	<footer class="entry-footer">
		<?php //entry_footer(); ?>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->