<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package SL-NEW
 */

get_header();
?>

	<main id="primary" class="site-main">

	<section class="contact" style="background-color:pink;">
    <div class="contact-details mx-auto">
      <div class="email-form">
      <p class="mint-bold title lh-title blue"><?php esc_html_e( 'He&rsquo;s looked everywhere but that page can&rsquo;t be found. You can find us here though:', 'sl-new' ); ?></p>
          
    </div>
      <p class="mint-bold blue">The Ladies' Room <br>
          Spike Island <br>
          133 Cumberland Road<br> 
          Bristol, BS1 6UX<br>
      </p>
      <p class="mint blue">
        Email: studio@smithandlewarne.com <br>
        IG: @smith_and_lewarne 
      </p>

      <div class="spy">
        <div class="left-eye">
          <div class="left-mask">
            <div class="iris iris-left">
              <div></div>
            </div>
          </div>
        </div>
        <div class="right-eye">
          <div class="right-mask">
            <div class="iris iris-right">
              <div></div>
            </div>
          </div>
        </div>
        <img src="http://localhost:8888/wp-content/uploads/2022/02/spy-body.svg">
        <div class="shadow"></div>
      </div>

    </div>

</section>



	</main><!-- #main -->

<?php
get_footer();
