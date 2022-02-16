<?php
/*
Template Name: Information Page
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

<section class="contact">
  <div class="project">
    <div class="project-details">
      <div class="email-form">
      <h2 class="shrill title blue f1">Contact</h2>
          <form action="" method="post" id="subForm" class="sign-up">
          <input placeholder="Enter your email" id="fieldEmail" name="" type="email" required class="mint-bold email-input">
          <input type="submit" value="Submit" class="mint-bold submit blue">
        </form>
      <p class="mint-bold blue">Join our mailing list</p>
    </div>
      <p style="margin-bottom: 20px;" class="mint-bold blue">The Ladies' Room <br>
          Spike Island <br>
          133 Cumberland Road<br> 
          Bristol, BS1 6UX<br>
      </p>
      <p class="mint-bold blue">
        Email: studio@smithandlewarne.com <br>
        @smith_and_lewarne 
      </p>
    </div>
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
    </div>
  </div>
</section>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>