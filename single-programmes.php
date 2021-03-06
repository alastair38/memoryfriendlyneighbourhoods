<?php


add_filter( 'document_title_parts', function( $title_parts_array ) {
    $id = get_the_ID();
		$parent = get_post_ancestors( $id );
    $count = count($parent);

		if(count($parent) == 1) {
			$title_parts_array['title'] = get_the_title($id) . ' - ' . get_the_title($parent[0]);
		} elseif(count($parent) > 1) {
      $title_parts_array['title'] = get_the_title($id) . ' - ' . get_the_title($parent[1]);
    } else {
			$title_parts_array['title'] = get_the_title($id);
		}

    return $title_parts_array;
} );

get_header(); ?>
<?php //get_template_part( 'parts/content', 'breadcrumbs' ); ?>

	<main class="row" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php

							get_template_part( 'parts/loop', 'child-pages' );



					endwhile; endif;
				?>

	</main> <!-- end main -->



<?php

if (comments_open()){
    get_template_part( 'parts/content', 'blog-comments' );
}

get_footer(); ?>
