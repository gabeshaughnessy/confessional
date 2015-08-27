<?php
global $post;
get_header();
$classes = ['confession'];
if($_GET['typewriter'] == true){
$classes[] = 'typewriter';
}
if($_GET['bigtext'] == true){
$classes[] = 'bigtext';
}
if($_GET['slidercount']){
	$number_of_sliders = filter_input(INPUT_GET, 'slidercount', FILTER_SANITIZE_NUMBER_INT);
}else{
	$number_of_sliders = 4;

}

if($_GET['postcount']){
	$number_of_posts = filter_input(INPUT_GET, 'postcount', FILTER_SANITIZE_NUMBER_INT);
}else{
	$number_of_posts = 2000;
}

$current_post_num = 1;
if($_GET['flexslider'] == true && $number_of_posts >= $number_of_sliders){
	for ($slider_count=0; $slider_count < $number_of_sliders; $slider_count++) { 
		echo '<div class="flexslider random"><ul class="slides">';
		if(have_posts()) : while(have_posts()) : the_post();
		if($current_post_num <= $number_of_posts){

			echo '<li><article ><div class="'.implode(" ",$classes).'">';
				the_excerpt();
			echo '</div></article></li>';
		}
		$current_post_num ++;
		endwhile; endif;
		echo '</ul></div>';
		wp_reset_query();
		$current_post_num = 1;
	}
	
}
else{
	if(have_posts()) : while(have_posts()) : the_post();
	if($current_post_num <= $number_of_posts){
		echo '<article ><div class="'.implode(" ",$classes).'">';
			the_excerpt();
		echo '</div></article>';
	}
	$current_post_num ++;

	endwhile; endif;
}

get_footer();
?>