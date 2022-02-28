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

	<div class="main-title main-title-onn pt2">
		<h1 class="tc mv0">
		Smith & Lewarne
		</h1>
	</div>

		<div class="homepage">

			<section class="introduction">
				<div class="intro-para">
					<div class="marquee h1-mint mm6" id="myDivId">
					<span class="text-wrapper">
						<span class="strap letters">A collaborative illustration and design studio based in the South West of the UK</span>
					</span>
					</div>
				</div>

				<!-- <span class="shape circle"></span>
				<span class="shape circle"></span>
				<span class="shape circle"></span>
				<span class="shape circle"></span>
				<span class="shape circle"></span>
				<span class="shape circle"></span>
				<span class="shape circle"></span>
				<span class="shape circle"></span> -->
			</section>

			<section class="proj1" data-parallax="#FB5954">
				<div class="project">
				
				<div class="project-details" id="project" style="background-image:url('http://localhost:8888/wp-content/uploads/2022/02/DSCF5284.jpg');" class="photo-desktop">
					<a href="http://localhost:8888/fosse-park/">
						<div class="project-title-home">
							<h2 class="col col-12 md-col-6 mv0 mint-bold title f2 f1-ns">Fosse Park</h2>
							<p class="col col-12 md-col-5 mv0 mint blurb">The UK’s first vertical play wall</p>
						</div>
					</a>
				</div>
				</div>
				<div class="arrow" id="arrow">
				<a href="http://localhost:8888/fosse-park/"><img src="http://localhost:8888/wp-content/uploads/2022/02/right-arrow.svg"></a>
				</div>
			</section>

			<section class="proj2" data-parallax="#FFE500">
				<div class="project">
					<div class="project-details" id="project" style="background-image:url('http://localhost:8888/wp-content/uploads/2020/10/dm-2020-bath-uni-edge-300dpi-0428.jpg');" class="photo-desktop">
					<!-- <img src="http://localhost:8888/wp-content/uploads/2020/10/dm-2020-bath-uni-edge-300dpi-0428.jpg" class="photo-desktop">
					<img src="edge-portrait.jpg" class="photo-mobile"> -->
						<div class="project-title-home">
							<h2 class="col col-12 md-col-6 mv0 mint-bold title f1">Art, Research & Adventure</h2>
							<p class="col col-12 md-col-5 mv0 mint blurb">Site specific installation</p>
						</div>
					</div>
				</div>
				<div class="arrow" id="arrow">
					<img src="http://localhost:8888/wp-content/uploads/2022/02/right-arrow-red.svg">
				</div>
			</section>

			<section class="proj3" data-parallax="#9086F9">
				<div class="project">
					<div class="project-details" id="project" style="background-image:url('http://localhost:8888/wp-content/uploads/2022/02/Box-3.jpg');" class="photo-desktop">
					<!-- <img src="http://localhost:8888/wp-content/uploads/2022/02/Box-3.jpg" >
					<img src="box-portrait.jpg" class="photo-mobile"> -->
						<div class="project-title-home">
							<h2 class="col col-12 md-col-6 mv0 mint-bold title f1">The Box Guides</h2>
							<p class="col col-12 md-col-5 mv0 mint blurb">Activity guides for children</p>
						</div>
					</div>
				</div>
				<div class="arrow" id="arrow">
					<img src="http://localhost:8888/wp-content/uploads/2022/02/right-arrow.svg">
				</div>
			</section>

		<section class="process" style="background-image:linear-gradient(to right, #FB5954 1px, transparent 1px),linear-gradient(to bottom, #FB5954 1px, transparent 1px);">
		
		<div class="process-title mx-auto shrill process-heading tc lh-solid">
			<h1 class="shrill process-heading tc w-100 mt0 mb3 lh-solid" style="color:blue;">Our Process</h1>
		</div>
	
		<div class="process-home mx-auto">

			<div class="sizeA" style="background-image:url('http://localhost:8888/wp-content/uploads/2020/01/WJ_Fosse-040220-145-scaled.jpg');grid-row: 1/3;"></div>

			<div class="sizeB" style="background-image:url('http://localhost:8888/wp-content/uploads/2020/01/WJ_Fosse-040220-229-scaled.jpg');grid-column: 2/3;"></div>
			
			<div class="process-text f4 ph3" style="background-color: blue;height:80px;">
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
