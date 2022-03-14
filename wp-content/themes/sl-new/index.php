<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomadsun
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

	<div class="main-title absolute pt2 w-100">
		<h1 class="tc mv0">
		Smith & Lewarne
		</h1>
	</div>

		<div class="homepage">

				<section class="introduction">
					<div class="intro-para tc">
						<h1 class="mint-bold lh-title">
							A collaborative illustration and design studio based in the South West of the UK
						</h1>
					</div>
				</section>

			<section class="proj1">
				<div class="project flex items-center min-vh-90">				
					<div class="project-details relative mx-auto justify-between" id="project" style="background-image:url('http://localhost:8888/wp-content/uploads/2022/02/DSCF5284.jpg');" class="photo-desktop">
						<a href="http://localhost:8888/fosse-park/">
							<div class="project-title-home absolute justify-between-ns">
								<h2 class="col col-12 md-col-6 mv0 mint-bold title f2 f1-ns">Fosse Park</h2>
								<p class="col col-12 md-col-5 mv0 mint blurb">The UK’s first vertical play wall</p>
							</div>
						</a>
					</div>
				</div>
			</section>

			<section class="proj2">
				<div class="project flex items-center min-vh-90">
					<div class="project-details relative mx-auto justify-between" id="project" style="background-image:url('http://localhost:8888/wp-content/uploads/2020/10/dm-2020-bath-uni-edge-300dpi-0428.jpg');" class="photo-desktop">
						<div class="project-title-home absolute justify-between-ns">
							<h2 class="col col-12 md-col-6 mv0 mint-bold title f2 f1-ns">Art, Research & Adventure</h2>
							<p class="col col-12 md-col-5 mv0 mint blurb">Site specific installation</p>
						</div>
					</div>
				</div>
			</section>

			<section class="proj3">
				<div class="project flex items-center min-vh-90">
					<div class="project-details relative mx-auto justify-between" id="project" style="background-image:url('http://localhost:8888/wp-content/uploads/2022/02/Box-3.jpg');" class="photo-desktop">
						<div class="project-title-home absolute justify-between-ns">
							<h2 class="col col-12 md-col-6 mv0 mint-bold title f2 f1-ns">The Box Guides</h2>
							<p class="col col-12 md-col-5 mv0 mint blurb">Activity guides for children</p>
						</div>
					</div>
				</div>
			</section>

		<section class="process" style="background-image:linear-gradient(to right, #FB5954 1px, transparent 1px),linear-gradient(to bottom, #FB5954 1px, transparent 1px);">
		
		<div class="process-title mx-auto shrill process-heading tc">
			<h1 class="shrill process-heading tc w-100 mt0 mb3" style="color:blue;">Our Process</h1>
		</div>
	
		<div class="process-home mx-auto">

			<div class="sizeA" style="background-image:url('http://localhost:8888/wp-content/uploads/2020/01/WJ_Fosse-040220-145-scaled.jpg');grid-row: 1/3;"></div>

			<div class="sizeB" style="background-image:url('http://localhost:8888/wp-content/uploads/2020/01/WJ_Fosse-040220-229-scaled.jpg');grid-column: 2/3;"></div>
			
			<div class="process-text f4" style="background-color: blue;height:80px;">
			<a href="http://localhost:8888/process/"><p style="color:#fff !important;">Find out how we approach our work</p></a>
			</div>

		</div>

		<div class="scribbles">
		</div>
	
		</section>
		
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
