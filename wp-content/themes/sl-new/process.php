<?php
/*
Template Name: Process Page
*/

?>


<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CES
 */

get_header();
?>

<section class="process" style="padding-top: 80px; <?php if (get_field('page_colour') ): ?>background-image: linear-gradient(to right, <?php the_field('page_colour'); ?> 1px, transparent 1px), linear-gradient(to bottom, <?php the_field('page_colour'); ?> 1px, transparent 1px);<?php endif; ?>">


    <div class="process-title mx-auto shrill process-heading tc lh-solid">

        <h1 class="shrill process-heading tc w-100 mt0 mb3 lh-solid" style="<?php if (get_field('secondary_page_colour') ): ?> color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
            About Us
        </h1>
    </div>

    <div class="prb process-container mx-auto">

        <div class="sizeD" style="margin-top: 0; background-image:url('http://localhost:8888/wp-content/uploads/2020/01/dm_2020_bath_uni_edge_300dpi-0696.jpg');"></div>

    </div>

    <div class="prb process-container mx-auto">

        <div class="sizeB" style="margin-top: 0; background-image:url('http://localhost:8888/wp-content/uploads/2020/01/WJ_Fosse-040220-145-scaled.jpg');"></div>

        <div class="rptr process-text <?php the_field('process_text_location', $image['id']); ?>" style="<?php if (get_field('secondary_page_colour') ): ?> background-color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
            <p class="pp">
            Smith & Lewarne is a collaborative graphic design and illustration practice based in the South West of the UK with studios in Bristol and Plymouth.
            </p>
        </div>

    </div>

    <div class="prb process-container mx-auto">

        <div class="sizeB" style="margin-top: 0; background-image:url('http://localhost:8888/wp-content/uploads/2022/03/dm21_nudge_neasden_x_luz_mural_72dpi-6617.jpg');"></div>

        <div class="rptr process-text text-first" style="<?php if (get_field('secondary_page_colour') ): ?> background-color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
            <p class="pp">
            The practice was founded by Jono Lewarne (City Edition Studio) and Stephen Smith (Neasden Control Centre). Jono Lewarne established City Edition Studio as graphic design and typography practice. Stephen Smith, who works under the name of Neasden Control Centre, is an illustrator and graphic artist.
            </p>
        </div>

    </div>

    <div class="prb process-container mx-auto">

        <div class="sizeB" style="margin-top: 0; background-image:url('http://localhost:8888/wp-content/uploads/2022/03/WJ_Fosse-040220-215-scaled.jpg');"></div>

        <div class="rptr process-text <?php the_field('process_text_location', $image['id']); ?>" style="<?php if (get_field('secondary_page_colour') ): ?> background-color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
            <p class="pp">
            We began working together informally a number of years ago and decided to formalise our collaboration in 2018. We work across our studios in Bristol and Plymouth, frequently together in one place during intense phases of projects.
            </p>
        </div>

    </div>

    <div class="animation-bar">
        <div class="bar-dot-box" id="bar-dot">
            <div class="bar-dot">
                <div class="svg">
                    <svg width="320" height="97" viewBox="0 0 320 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0V90.2L320 96.1V0H0Z" fill="#E65F45"/>
                    </svg>
                </div>
                <div class="dot" id="dot">
                    <svg width="138" height="130" viewBox="0 0 138 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M132 102.1C108.3 135.6 95.2 129.4 58.3 127C7.6 131.1 -11 68.9 7.8 29.9C28.5 -3.00001 56.2 -0.700014 90.3 0.999986C137.4 11.1 144.4 62.3 132 102.1Z" fill="#1C62F4"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="prb process-container mx-auto">

        <div class="sizeD" style="margin-top: 0; background-image:url('http://localhost:8888/wp-content/uploads/2022/03/写真-H30-06-26-13-59-26.jpg');"></div>

        <div class="process-title mx-auto shrill process-heading tc lh-solid" style="grid-column: 1 /3; padding-top: 94px;">

            <h1 class="shrill process-heading tc w-100 mt0 mb3 lh-solid" style="<?php if (get_field('secondary_page_colour') ): ?> color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
                Services We Offer
            </h1>
        </div>

        <div class="sizeA" style="margin-top: 80px; background-image:url('http://localhost:8888/wp-content/uploads/2022/03/gsix_tokyo-001.jpg');"></div>

        <div class="rptr process-text <?php the_field('process_text_location', $image['id']); ?>" style="<?php if (get_field('secondary_page_colour') ): ?> background-color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
            <p class="pp">
            We offer a wide range of services, including but not limited to; <br><br>
            Installations<br>
            Book and publication design<br>
            Branding and identities<br>
            Web design and development<br>
            Wordpress and Shopify theme development<br>
            Animation.<br>
            <br>
            We regularly project manage our installations and we're comfortable managing the fine details, from printed matter to production specifications for the three-dimensional objects that make up our installations.
            </p>
        </div>

    </div>

    <div class="prb process-container mx-auto">

    <div class="sizeB" style="margin-top: 0; background-position-x:100%; background-image:url('http://localhost:8888/wp-content/uploads/2020/01/20200715-_DSF6547.jpg');"></div>

    <div class="rptr process-text text-first" style="<?php if (get_field('secondary_page_colour') ): ?> background-color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
        <p class="pp">
        We have close ties with several collaborators who we work with to realise our projects, including printers, production teams, photographers. We love working as part of an interdisciplinary team alongside other dedicated professionals. 
        </p>
    </div>

    </div>

    <div class="prb process-container mx-auto">

        <div class="sizeB" style="margin-top: 0; background-image:url('http://localhost:8888/wp-content/uploads/2022/03/2682975623.jpg');"></div>

        <div class="rptr process-text <?php the_field('process_text_location', $image['id']); ?>" style="<?php if (get_field('secondary_page_colour') ): ?> background-color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
            <p class="pp">
            Community engagement and workshops are also something that we enjoy organising as part of our work, having done so in the UK and abroad. 
            </p>
        </div>

    </div>

    <div class="animation-bar">

            <div class="triangle-box" id="triangle">
                <div class="triangle">
                    <div class="svg">
                        <svg width="240" height="220" viewBox="0 0 240 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M147.8 0C267.9 68 252.3 135.9 150.1 211.1C148.7 212.7 141.5 217.2 138.8 220H240V0H147.8ZM92.5 0H0V220H91.6C58.6 193.8 26.7 161.7 10.6 123C-12.3 68.4 50 28.3 92.5 0Z" fill="#1C62F4"/>
                        </svg>
                    </div>
                    <div class="circles">
                        <div class="circle">
                            <svg width="158" height="150" viewBox="0 0 158 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.3 53.1C40.3 -40.4 183.1 0 153.8 101.3C131.4 191.1 -29 144.7 5.3 53.1Z" fill="#E65F45"/>
                            </svg>
                        </div>
                        <div class="circle">
                            <svg width="158" height="150" viewBox="0 0 158 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.3 53.1C40.3 -40.4 183.1 0 153.8 101.3C131.4 191.1 -29 144.7 5.3 53.1Z" fill="#E65F45"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
   
        </div>

    </div>


</section>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>