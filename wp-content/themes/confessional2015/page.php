<?php 
global $post;
get_header();
?>
<script>
jQuery(document).ready(function(){
	jQuery("form").keypress(function(event) {
	    if (event.which == 13) {
	        event.preventDefault();
	        jQuery("#submit").click();
	    }
	});
});
</script>
<?php
if(have_posts()) : while(have_posts()) : the_post();

echo '<article>';
	the_content();
echo '</article>';

endwhile; endif;

get_footer();
?>