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
        <div class="flex items-center" id="wheelbox">
            <div class="wheelbox">
                <div class="wheel" id="wheel">
                    <svg width="127" height="125" viewBox="0 0 127 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M45.6473 2.36024L54.8788 44.59L58.3407 0.624769C58.3407 0.624769 71.034 -1.1107 75.0728 1.20326L68.1491 37.0696L86.0352 2.93873C86.0352 2.93873 99.3055 8.72362 104.498 15.087L71.034 51.5318L118.345 28.9708C118.345 28.9708 122.961 37.6481 122.961 48.0609L76.2267 60.7877L127 70.0435C127 70.0435 126.423 82.1918 122.384 89.1337L79.6885 73.5144L113.73 100.125C113.73 100.125 109.114 108.802 96.9976 112.273L66.9952 76.9854L83.7273 116.901L68.1491 122.108L57.7637 79.8778L50.2631 125C50.2631 125 35.2619 123.843 27.7613 115.166L47.9552 76.9854L17.3758 108.224C17.3758 108.224 8.14433 103.017 5.83645 90.8691L43.3395 69.465L1.2207 78.7208C1.2207 78.7208 -1.08718 71.779 0.643726 56.7382L42.7625 59.6307L2.37463 42.276C2.37463 42.276 8.14433 27.2353 15.068 23.1859L48.5322 52.6888L25.4534 9.8806C25.4534 9.8806 34.1079 2.93873 45.6473 2.36024Z" fill="#1C62F4"/>
                    </svg>
                </div>
                <div class="dotgrid">  
                    <svg width="159" height="100" viewBox="0 0 159 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M53.0825 40.7913C43.8672 54.0469 38.7735 51.5936 24.4256 50.6439C4.71179 52.2663 -2.5205 27.6545 4.78955 12.2227C12.8384 -0.795444 23.609 0.114638 36.8682 0.787307C55.1822 4.78375 57.9041 25.043 53.0825 40.7913Z" fill="#E65F45"/>
                        <path d="M104.846 40.7913C95.6309 54.0468 90.5372 51.5936 76.1893 50.6439C56.4755 52.2662 49.2432 27.6545 56.5532 12.2227C64.6021 -0.795459 75.3727 0.114623 88.6319 0.787292C106.946 4.78374 109.668 25.0429 104.846 40.7913Z" fill="#E65F45"/>
                        <path d="M155.901 40.7913C146.685 54.0468 141.592 51.5936 127.244 50.6439C107.53 52.2662 100.298 27.6545 107.608 12.2227C115.657 -0.795459 126.427 0.114623 139.686 0.787292C158 4.78374 160.722 25.0429 155.901 40.7913Z" fill="#E65F45"/>
                        <path d="M107.253 59.6663C116.588 46.4107 121.748 48.864 136.283 49.8137C156.253 48.1913 163.579 72.8031 156.174 88.2349C148.021 101.253 137.11 100.343 123.678 99.6703C105.126 95.6738 102.369 75.4146 107.253 59.6663Z" fill="#E65F45"/>
                        <path d="M54.8168 59.6662C64.152 46.4107 69.3119 48.864 83.8463 49.8136C103.816 48.1913 111.143 72.803 103.738 88.2349C95.5842 101.253 84.6735 100.343 71.2419 99.6702C52.6898 95.6738 49.9326 75.4146 54.8168 59.6662Z" fill="#E65F45"/>
                        <path d="M3.09869 59.6662C12.4338 46.4107 17.5938 48.8639 32.1282 49.8136C52.0983 48.1913 59.4246 72.803 52.0195 88.2348C43.866 101.253 32.9554 100.343 19.5238 99.6702C0.971696 95.6738 -1.78551 75.4146 3.09869 59.6662Z" fill="#E65F45"/>
                    </svg>
                </div>
            </div>
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