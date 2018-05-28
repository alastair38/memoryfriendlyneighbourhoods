<?php
/*
Template Name: Home Page
*/

get_header(); ?>


	<main id="gettingSarted">
			<div class="row center">
				<div id="homeIntro" style="background: url(<?php the_field('highlights_image');?>) no-repeat; background-size: cover; background-position: center center;" class="col s12">

							<?php get_template_part( 'parts/loop', 'page-home' ); ?>

					<a href="#us" class="waves-effect materialize-red lighten-2 btn waves-circle waves-light btn-floating pulse btn-large tooltipped" data-position="bottom" data-delay="50" data-tooltip="Click here or scroll down the page for more information"><i class="material-icons">keyboard_arrow_down</i></a>

				</div>



					<section id="us" class="col s12 center" itemscope itemtype="http://schema.org/WebPage">
						<div class="row">
							<header>
								<h2 class="page-title"><?php the_field('main_header');?></h2>
							</header> <!-- end article header -->

							<div class="home-entry-content" itemprop="articleBody">
							<p>
								<?php the_field('main_text');?>
							</p>
							</div>
							<?php $help = get_field('help', 'option');
							if ($help) {?>
								<div class="fixed-action-btn hide-on-med-and-down">
						<a class="btn btn-large btn-floating" href="javascript:void(0);" onclick='javascript:introJs().setOption("overlayOpacity", 0.1).start();'><i class="material-icons">help</i></a>
						</div>
							<?php }?>

						</div>




					</section>


			</div>


			<?php
			 if( have_rows('front_page_sections') ):

					while ( have_rows('front_page_sections') ) : the_row();?>
					<div id="<?php the_sub_field('section_title'); ?>" class="row center" style="background: <?php the_sub_field('background_colour'); ?>;"  >
						<div class="col s12 l8 push-l<?php the_sub_field('push_right'); ?>" style="color: <?php the_sub_field('text_colour'); ?>;">
							<h4><?php the_sub_field('section_title'); ?></h4>
								<?php the_sub_field('section_description'); ?>

						</div>

						<div class="col s12 l4 pull-l<?php the_sub_field('pull_left'); ?>" >
								<img src="<?php the_sub_field('section_image'); ?>">
						</div>
						<div class="col s12">
							<a class="btn-large transparent z-depth-0 waves-effect" style="color: <?php the_sub_field('text_colour'); ?>;" href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('button_text'); ?></a>
						</div>

					</div>

				<?php
				 endwhile;
				 else :
						 // no rows found
				 endif;
			 ?>


</main>

<script>
function startIntro(){
	var intro = introJs();
		intro.setOptions({
			steps: [
				{
					element: document.querySelector('#menu-item-28'),
					intro: "This is a tooltip."
				},
				{
					element: document.querySelector('#menu-item-29'),
					intro: "This is a tooltip."
				},
				{
					element: document.querySelector('#menu-item-37'),
					intro: "This is a tooltip."
				},

			]
		});
		intro.start();
}
</script>

<?php get_footer(); ?>