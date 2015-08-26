<?php
global $post;
get_header();

$post_type = get_post_type($post->ID);

if(have_posts()) : while(have_posts()) : the_post();

	echo '<article>';
		the_content();
	echo '</article>';

endwhile; endif;

get_footer();
?>