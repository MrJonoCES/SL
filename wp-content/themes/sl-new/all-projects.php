<?php
/* Template Name: All Projects */
 
get_header(); ?> 
 
<section id="primary" class="site-content">

<div id="content" role="main">
 
    <?php 
    // the query
    $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
    
    <?php if ( $wpb_all_query->have_posts() ) : ?>
    
        <div class="projects-grid mt5 mx-auto ph3">
            <canvas class="canvas"></canvas>
        
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            <div class="">
            
            <div>
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'category-thumb', array('class' => 'post-thumb')); ?></a>
            </div>

                <h2 class="mint-bold"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            
            </div>
            <?php endwhile; ?>
            <!-- end of the loop -->
        
        </div>
    
        <?php wp_reset_postdata(); ?>
    
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>

</section>
 
 
<?php get_footer(); ?>