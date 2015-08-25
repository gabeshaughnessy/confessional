<?php 
global $post;
get_header();

$post_type = get_post_type($post->ID);

if($post_type == 'post'){
	get_template_part('template-singles/single-post');
	}
	
if(have_posts()) : while(have_posts()) : the_post();

	echo '<article>';
		the_content();
	echo '</article>';

endwhile; endif;

get_footer();
?>