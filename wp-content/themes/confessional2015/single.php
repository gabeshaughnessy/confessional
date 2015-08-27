<?php 
global $post;
get_header();
$classes = array('confession');
if($_GET['typewriter'] == true){
$classes[] = 'typewriter';
}

if(have_posts()) : while(have_posts()) : the_post();

	echo '<article>';
		echo '<div class="'.implode(" ", $classes).'">'.get_the_excerpt().'</div>'; 
	echo '</article>';

echo '<div class="post-nav">';
	$nextPost = get_next_post();
	if(isset($nextPost) && !empty($nextPost)){
		echo '<a href="'.get_permalink($nextPost->ID).(in_array('typewriter', $classes) ? '?typewriter=true' : '').'" class="next-post-link">Next</a>';
	}
	$previousPost = get_previous_post();
	if(isset($previousPost) && !empty($previousPost)){
		echo '<a href="'.get_permalink($previousPost->ID).(in_array('typewriter', $classes) ? '?typewriter=true' : '').'" class="prev-post-link">Previous</a>';
	}
echo '</div>';
endwhile; endif;


get_footer();
?>