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

<div class="bg-an w-100 h-100 tunnel box" id="tunnel">
    <svg width="100%" height="100%" viewBox="0 0 400 400" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 47.1 (45422) - http://www.bohemiancoding.com/sketch -->
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <!-- when we add stroke/width/fill styles onto the group, they all get shared
    between the children shapes/circles/rectanges -->
    <g id="Page-1" stroke="#FB5954" stroke-width="1" fill="none" fill-rule="evenodd">
        <circle cx="200" cy="200" r="10%" />
        <circle cx="200" cy="200" r="20%" />
        <circle cx="200" cy="200" r="30%" />
        <circle cx="200" cy="200" r="40%" />
        <circle cx="200" cy="200" r="50%" />
        <circle cx="200" cy="200" r="60%" />
        <circle cx="200" cy="200" r="70%" />
        <circle cx="200" cy="200" r="80%" />
        <circle cx="200" cy="200" r="90%" />
        <circle cx="200" cy="200" r="100%" />
        <circle cx="200" cy="200" r="110%" />
        <circle cx="200" cy="200" r="120%" />
    </g>
    </svg>
</div>





</section>
 
 
<?php get_footer(); ?>