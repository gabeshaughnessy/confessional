<?php global $post, $fields; 
if(isset($fields) && !empty($fields['carousel'])){
	$carousel_slides = $fields['carousel'];
}
if(isset($carousel_slides) && !empty($carousel_slides)){
?>
<div class="hero-wrapper">
	<div class="hero flexslider">
		<ul class="slides">
			<?php 
			$firstslide = true;
			foreach ($carousel_slides as $slide) {
				if(isset( $slide['caption'])&&!empty( $slide['caption'])){
					$caption = $slide['caption'][0];
				}
				echo 
				'<li class="slide">';
				if(isset($caption) && !empty($caption)){
					if($caption['title'] != '' && $caption['description'] != ''){
						echo '<div class="slide-caption">'.($firstslide ? '<h1>' : '<h2>').(isset($caption['title']) && !empty($caption['title']) ? $caption['title'] : '').($firstslide ? '</h1>' : '</h2>').'<div class="caption-content">'.(isset($caption['description']) && !empty($caption['description']) ? $caption['description'] : '').'</div></div>';
					}
				}
				if(isset($slide['image']) && !empty($slide['image']['url'])){

					echo '<div style="background-image:url(\''.$slide['image']['url'].'\')" class="bg-image"  ></div>';
				}		
					
				echo '</li>';
				$firstslide = false;
				$caption = false;
			}
			?>

		</ul>
	</div>
</div>
<?php } ?>