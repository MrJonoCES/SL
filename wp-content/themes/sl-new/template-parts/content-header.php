				<!-- here we have our header -->
				<div class="flex">
					
					<!-- our header background image -->
					<div class="w-60 min-vh-100 cover bg-center" style="<?php if( get_field('hero_image') ): ?>background-image: url(<?php the_field('hero_image'); ?>); <?php endif; ?>"></div>
					
					<!-- our header content -->
					<div class="w-40 flex items-center justify-center ph4">
						<div class="tc">

							<!-- standard wordpress data -->
							<h1 class="f1 archivo mt0 mb3 ttu">
								<?php the_title(); ?>
							</h1>
							<p class="f1 tenor mt0 mb4 ttu">
								<?php the_field('subhead'); ?>
							</p>
							<!-- specific to this component -->
							<p class="f4 cardo i measure center">
								<?php the_sub_field('header_intro'); ?>
							</p>
						</div>
					</div>

				</div>