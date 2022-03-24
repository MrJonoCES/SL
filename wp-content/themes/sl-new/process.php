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


    <div class="process-title mx-auto shrill process-heading tc lh-solid" style="height: 80px;">

        <h1 class="shrill process-heading tc w-100 mt0 mb3 lh-solid" style="<?php if (get_field('secondary_page_colour') ): ?> color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
            About Us
        </h1>
    </div>

    <div class="prb process-container mx-auto">

        <div class="sizeD" id="first" style="background-image:url('http://localhost:8888/wp-content/uploads/2020/01/dm_2020_bath_uni_edge_300dpi-0696.jpg');"></div>

    </div>

    <div class="prb process-container mx-auto">

        <div class="sizeB" style="background-image:url('http://localhost:8888/wp-content/uploads/2020/01/WJ_Fosse-040220-145-scaled.jpg');"></div>

        <div class="rptr process-text <?php the_field('process_text_location', $image['id']); ?>" style="<?php if (get_field('secondary_page_colour') ): ?> background-color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
            <p class="pp">
            Smith & Lewarne is a collaborative graphic design and illustration practice based in the South West of the UK with studios in Bristol and Plymouth.
            </p>
        </div>

    </div>

    <div class="prb process-container mx-auto">

        <div class="sizeB" style="background-image:url('http://localhost:8888/wp-content/uploads/2022/03/dm21_nudge_neasden_x_luz_mural_72dpi-6617.jpg');"></div>

        <div class="rptr process-text text-first" style="<?php if (get_field('secondary_page_colour') ): ?> background-color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
            <p class="pp">
            The practice was founded by Jono Lewarne (City Edition Studio) and Stephen Smith (Neasden Control Centre). Jono Lewarne established City Edition Studio as graphic design and typography practice. Stephen Smith, who works under the name of Neasden Control Centre, is an illustrator and graphic artist.
            </p>
        </div>

    </div>

    <div class="prb process-container mx-auto">

        <div class="sizeB" style="background-image:url('http://localhost:8888/wp-content/uploads/2022/03/WJ_Fosse-040220-215-scaled.jpg');"></div>

        <div class="rptr process-text <?php the_field('process_text_location', $image['id']); ?>" style="<?php if (get_field('secondary_page_colour') ): ?> background-color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
            <p class="pp">
            We began working together informally a number of years ago and decided to formalise our collaboration in 2018. We work across our studios in Bristol and Plymouth, frequently together in one place during intense phases of projects.
            </p>
        </div>

    </div>

    <div class="animation-bar">

        <div class="triangle-box">
            <div class="triangle">
                <div class="circles">
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="80" height="80" fill="#6D36FA"/>
                        <rect y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect y="160" width="80" height="80" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="240" width="80" height="80" transform="rotate(90 240 0)" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" transform="rotate(90 160 0)" fill="#6D36FA"/>
                        <rect x="240" y="80" width="80" height="80" transform="rotate(90 240 80)" fill="#6D36FA"/>
                        <rect x="240" y="160" width="80" height="80" transform="rotate(90 240 160)" fill="#6D36FA"/>
                        <rect x="160" y="80" width="80" height="80" transform="rotate(90 160 80)" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" transform="rotate(90 80 0)" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="80" height="80" fill="#6D36FA"/>
                        <rect y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect y="160" width="80" height="80" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="240" width="80" height="80" transform="rotate(90 240 0)" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" transform="rotate(90 160 0)" fill="#6D36FA"/>
                        <rect x="240" y="80" width="80" height="80" transform="rotate(90 240 80)" fill="#6D36FA"/>
                        <rect x="240" y="160" width="80" height="80" transform="rotate(90 240 160)" fill="#6D36FA"/>
                        <rect x="160" y="80" width="80" height="80" transform="rotate(90 160 80)" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" transform="rotate(90 80 0)" fill="#6D36FA"/>
                    </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="triangle-box">
            <div class="triangle">
                <div class="circles">
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="80" height="80" fill="#6D36FA"/>
                        <rect y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect y="160" width="80" height="80" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="240" width="80" height="80" transform="rotate(90 240 0)" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" transform="rotate(90 160 0)" fill="#6D36FA"/>
                        <rect x="240" y="80" width="80" height="80" transform="rotate(90 240 80)" fill="#6D36FA"/>
                        <rect x="240" y="160" width="80" height="80" transform="rotate(90 240 160)" fill="#6D36FA"/>
                        <rect x="160" y="80" width="80" height="80" transform="rotate(90 160 80)" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" transform="rotate(90 80 0)" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="80" height="80" fill="#6D36FA"/>
                        <rect y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect y="160" width="80" height="80" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="240" width="80" height="80" transform="rotate(90 240 0)" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" transform="rotate(90 160 0)" fill="#6D36FA"/>
                        <rect x="240" y="80" width="80" height="80" transform="rotate(90 240 80)" fill="#6D36FA"/>
                        <rect x="240" y="160" width="80" height="80" transform="rotate(90 240 160)" fill="#6D36FA"/>
                        <rect x="160" y="80" width="80" height="80" transform="rotate(90 160 80)" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" transform="rotate(90 80 0)" fill="#6D36FA"/>
                    </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="triangle-box">
            <div class="triangle">
                <div class="circles">
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="80" height="80" fill="#6D36FA"/>
                        <rect y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect y="160" width="80" height="80" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="240" width="80" height="80" transform="rotate(90 240 0)" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" transform="rotate(90 160 0)" fill="#6D36FA"/>
                        <rect x="240" y="80" width="80" height="80" transform="rotate(90 240 80)" fill="#6D36FA"/>
                        <rect x="240" y="160" width="80" height="80" transform="rotate(90 240 160)" fill="#6D36FA"/>
                        <rect x="160" y="80" width="80" height="80" transform="rotate(90 160 80)" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" transform="rotate(90 80 0)" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="80" height="80" fill="#6D36FA"/>
                        <rect y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect y="160" width="80" height="80" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="240" width="80" height="80" transform="rotate(90 240 0)" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" transform="rotate(90 160 0)" fill="#6D36FA"/>
                        <rect x="240" y="80" width="80" height="80" transform="rotate(90 240 80)" fill="#6D36FA"/>
                        <rect x="240" y="160" width="80" height="80" transform="rotate(90 240 160)" fill="#6D36FA"/>
                        <rect x="160" y="80" width="80" height="80" transform="rotate(90 160 80)" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" transform="rotate(90 80 0)" fill="#6D36FA"/>
                    </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="triangle-box">
            <div class="triangle">
                <div class="circles">
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="80" height="80" fill="#6D36FA"/>
                        <rect y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect y="160" width="80" height="80" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="240" width="80" height="80" transform="rotate(90 240 0)" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" transform="rotate(90 160 0)" fill="#6D36FA"/>
                        <rect x="240" y="80" width="80" height="80" transform="rotate(90 240 80)" fill="#6D36FA"/>
                        <rect x="240" y="160" width="80" height="80" transform="rotate(90 240 160)" fill="#6D36FA"/>
                        <rect x="160" y="80" width="80" height="80" transform="rotate(90 160 80)" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" transform="rotate(90 80 0)" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="80" height="80" fill="#6D36FA"/>
                        <rect y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect y="160" width="80" height="80" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="240" width="80" height="80" transform="rotate(90 240 0)" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" transform="rotate(90 160 0)" fill="#6D36FA"/>
                        <rect x="240" y="80" width="80" height="80" transform="rotate(90 240 80)" fill="#6D36FA"/>
                        <rect x="240" y="160" width="80" height="80" transform="rotate(90 240 160)" fill="#6D36FA"/>
                        <rect x="160" y="80" width="80" height="80" transform="rotate(90 160 80)" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" transform="rotate(90 80 0)" fill="#6D36FA"/>
                    </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="triangle-box">
            <div class="triangle">
                <div class="circles">
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="80" height="80" fill="#6D36FA"/>
                        <rect y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect y="160" width="80" height="80" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="240" width="80" height="80" transform="rotate(90 240 0)" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" transform="rotate(90 160 0)" fill="#6D36FA"/>
                        <rect x="240" y="80" width="80" height="80" transform="rotate(90 240 80)" fill="#6D36FA"/>
                        <rect x="240" y="160" width="80" height="80" transform="rotate(90 240 160)" fill="#6D36FA"/>
                        <rect x="160" y="80" width="80" height="80" transform="rotate(90 160 80)" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" transform="rotate(90 80 0)" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="80" height="80" fill="#6D36FA"/>
                        <rect y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect y="160" width="80" height="80" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="240" width="80" height="80" transform="rotate(90 240 0)" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" transform="rotate(90 160 0)" fill="#6D36FA"/>
                        <rect x="240" y="80" width="80" height="80" transform="rotate(90 240 80)" fill="#6D36FA"/>
                        <rect x="240" y="160" width="80" height="80" transform="rotate(90 240 160)" fill="#6D36FA"/>
                        <rect x="160" y="80" width="80" height="80" transform="rotate(90 160 80)" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" transform="rotate(90 80 0)" fill="#6D36FA"/>
                    </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="triangle-box">
            <div class="triangle">
                <div class="circles">
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="80" height="80" fill="#6D36FA"/>
                        <rect y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect y="160" width="80" height="80" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="240" width="80" height="80" transform="rotate(90 240 0)" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" transform="rotate(90 160 0)" fill="#6D36FA"/>
                        <rect x="240" y="80" width="80" height="80" transform="rotate(90 240 80)" fill="#6D36FA"/>
                        <rect x="240" y="160" width="80" height="80" transform="rotate(90 240 160)" fill="#6D36FA"/>
                        <rect x="160" y="80" width="80" height="80" transform="rotate(90 160 80)" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" transform="rotate(90 80 0)" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="80" height="80" fill="#6D36FA"/>
                        <rect y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" fill="#6D36FA"/>
                        <rect x="80" y="80" width="80" height="80" fill="#6D36FA"/>
                        <rect y="160" width="80" height="80" fill="#6D36FA"/>
                    </svg>
                    </div>
                    <div class="circle">
                    <svg width="240" height="240" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="240" width="80" height="80" transform="rotate(90 240 0)" fill="#6D36FA"/>
                        <rect x="160" width="80" height="80" transform="rotate(90 160 0)" fill="#6D36FA"/>
                        <rect x="240" y="80" width="80" height="80" transform="rotate(90 240 80)" fill="#6D36FA"/>
                        <rect x="240" y="160" width="80" height="80" transform="rotate(90 240 160)" fill="#6D36FA"/>
                        <rect x="160" y="80" width="80" height="80" transform="rotate(90 160 80)" fill="#6D36FA"/>
                        <rect x="80" width="80" height="80" transform="rotate(90 80 0)" fill="#6D36FA"/>
                    </svg>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="prb process-container mx-auto">

        <div class="sizeD" style="background-image:url('http://localhost:8888/wp-content/uploads/2022/03/写真-H30-06-26-13-59-26.jpg');"></div>

        <div class="process-title mx-auto shrill process-heading tc lh-solid" id="second">

            <h1 class="shrill process-heading tc w-100 mt0 mb3 lh-solid" style="<?php if (get_field('secondary_page_colour') ): ?> color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
                Services We Offer
            </h1>
        </div>

        <div class="sizeA" style="background-image:url('http://localhost:8888/wp-content/uploads/2022/03/gsix_tokyo-001.jpg');"></div>

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

    <div class="sizeB" style="background-position-x:100%; background-image:url('http://localhost:8888/wp-content/uploads/2020/01/20200715-_DSF6547.jpg');"></div>

    <div class="rptr process-text text-first" style="<?php if (get_field('secondary_page_colour') ): ?> background-color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
        <p class="pp">
        We have close ties with several collaborators who we work with to realise our projects, including printers, production teams, photographers. We love working as part of an interdisciplinary team alongside other dedicated professionals. 
        </p>
    </div>

    </div>

    <div class="prb process-container mx-auto">

        <div class="sizeB" style="background-image:url('http://localhost:8888/wp-content/uploads/2022/03/2682975623.jpg');"></div>

        <div class="rptr process-text <?php the_field('process_text_location', $image['id']); ?>" style="<?php if (get_field('secondary_page_colour') ): ?> background-color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
            <p class="pp">
            Community engagement and workshops are also something that we enjoy organising as part of our work, having done so in the UK and abroad. 
            </p>
        </div>

    </div>

    <div class="animation-bar">

        <div class="triangle-box">
            <div class="triangle">

                <div class="circles">
                    <div class="circle">
                        <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                        </svg>
                    </div>
                    <div class="circle">
                        <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="triangle-box">
            <div class="triangle">

                <div class="circles">
                    <div class="circle">
                        <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                        </svg>
                    </div>
                    <div class="circle">
                        <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="triangle-box">
            <div class="triangle">

                <div class="circles">
                    <div class="circle">
                        <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                        </svg>
                    </div>
                    <div class="circle">
                        <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="triangle-box">
            <div class="triangle">

                <div class="circles">
                    <div class="circle">
                        <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                        </svg>
                    </div>
                    <div class="circle">
                        <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="triangle-box">
            <div class="triangle">

                <div class="circles">
                    <div class="circle">
                        <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                        </svg>
                    </div>
                    <div class="circle">
                        <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="triangle-box">
            <div class="triangle">

                <div class="circles">
                    <div class="circle">
                        <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                        </svg>
                    </div>
                    <div class="circle">
                        <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- <div class="prb process-container mx-auto">

        <div class="sizeA" style="display:flex;flex-direction:column;position:relative;">

            <div class="triangle-box">
                <div class="triangle">
                    <div class="svg">
                        <svg width="240" height="480" viewBox="0 0 240 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 479.5V239.5H240L0 479.5Z" fill="#6D36FA"/>
                            <path d="M0 240V0H240L0 240Z" fill="#6D36FA"/>
                        </svg>
                    </div>
                    <div class="circles">
                        <div class="circle">
                            <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                            </svg>
                        </div>
                        <div class="circle">
                            <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="triangle-box">
                <div class="triangle" style="left:240px;">
                    <div class="svg">
                        <svg width="240" height="480" viewBox="0 0 240 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 479.5V239.5H240L0 479.5Z" fill="#6D36FA"/>
                            <path d="M0 240V0H240L0 240Z" fill="#6D36FA"/>
                        </svg>
                    </div>
                    <div class="circles">
                        <div class="circle">
                            <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                            </svg>
                        </div>
                        <div class="circle">
                            <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="triangle-box">
                <div class="triangle" style="top:240px;">
                    <div class="svg">
                        <svg width="240" height="480" viewBox="0 0 240 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 479.5V239.5H240L0 479.5Z" fill="#6D36FA"/>
                            <path d="M0 240V0H240L0 240Z" fill="#6D36FA"/>
                        </svg>
                    </div>
                    <div class="circles">
                        <div class="circle">
                            <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                            </svg>
                        </div>
                        <div class="circle">
                            <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="triangle-box">
                <div class="triangle" style="top:240px;left:240px;">
                    <div class="svg">
                        <svg width="240" height="480" viewBox="0 0 240 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 479.5V239.5H240L0 479.5Z" fill="#6D36FA"/>
                            <path d="M0 240V0H240L0 240Z" fill="#6D36FA"/>
                        </svg>
                    </div>
                    <div class="circles">
                        <div class="circle">
                            <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                            </svg>
                        </div>
                        <div class="circle">
                            <svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="119" cy="119" r="119" fill="#1fe6cc"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>

        <div class="rptr process-text text-first" style="<?php if (get_field('secondary_page_colour') ): ?> background-color: <?php the_field('secondary_page_colour'); ?>;<?php endif; ?>">
            <p class="pp">
            We have close ties with several collaborators who we work with to realise our projects, including printers, production teams, photographers. We love working as part of an interdisciplinary team alongside other dedicated professionals. 
            </p>
        </div>

    </div> -->


</section>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>