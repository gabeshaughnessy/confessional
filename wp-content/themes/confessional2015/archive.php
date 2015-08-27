<?php
global $post;
get_header();
$classes = array('confession');
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

if($_GET['particles'] != true){
	
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
}
else{//$_Get['particles']

$i = 0;
if(have_posts()) : while(have_posts()) : the_post();
	if($i < 1){
error_log('only this happened once');

		?>
	<div class="particles">
 <canvas id="canv" onmousemove="canv_mousemove(event);" onmouseout="mx=-1;my=-1;">
    you need a canvas-enabled browser, such as Google Chrome
  </canvas>
  <canvas id="wordCanv" width="100vw" height="100vh" style="border:1px solid black;display:none;">
  </canvas>
  <textarea id="wordsTxt" style="position:absolute;left:-100;top:-100;" onblur="init();" onkeyup="init();" onclick="init();"></textarea>
</div>
<?php get_template_part('template-parts/particle-text'); ?>
  <?php
}
$i++;



endwhile; endif;

?>

  <?php
}
get_footer();
?>