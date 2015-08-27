<?php
/*
Plugin Name: Front End Posting
Plugin URI: http://gabesimagination.com
Description: Really simple way of posting from the front end for WordPress
Author: Gabe Shaughnessy
Version: 0.1
Author URI: gabesimagination.com
*/
 
function simple_fep($content = null) {
	global $post;

 
	// We're outputing a lot of html and the easiest way 
	// to do it is with output buffering from php.
	ob_start();
 
?>
<style>

</style>
<div id="simple-fep-postbox" class="<?php if(is_user_logged_in()) echo 'closed'; else echo 'loggedout'?>">
		<?php 

		do_action( 'simple-fep-notice' ); ?>
		<div class="simple-fep-inputarea">
			<form id="fep-new-post" name="new_post" method="post" action="<?php the_permalink(); ?>">
				<textarea class="fep-content" name="posttext" id="fep-post-text" tabindex="1" rows="4" cols="60"></textarea>
				
				<input id="submit" type="submit" tabindex="3" value="<?php esc_attr_e( 'Submit', 'simple-fep' ); ?>" />					
				<input type="hidden" name="action" value="post" />
				<input type="hidden" name="empty-description" id="empty-description" value="1"/>
				<?php wp_nonce_field( 'new-post' ); ?>
			</form>
		</div>
 
</div> <!-- #simple-fep-postbox -->
<?php
	// Output the content.
	$output = ob_get_contents();
	ob_end_clean();
 
	// return only if we're inside a page. This won't list anything on a post or archive page. 
	if (is_page()) return  $output;
}
 
// Add the shortcode to WordPress. 
add_shortcode('simple-fep', 'simple_fep');
 
 
function simple_fep_errors(){
?>

<?php
	global $error_array;
	foreach($error_array as $error){
		echo '<p class="simple-fep-error">' . $error . '</p>';
	}
}
 
function simple_fep_notices(){
?>

<?php
 
	global $notice_array;

	foreach($notice_array as $notice){
					

		echo '<p class="simple-fep-notice">' . $notice . '</p>';
	}
}
function validPost($post_content){
	$valid = false;
	if($post_content == true || $post_content == 1){
		$valid = true;
	}

	return $valid;
}
 
function simple_fep_add_post(){
	if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'post' ){

		global $current_user;

 
		$user_id		= $current_user->ID;
		$post_content	= $_POST['posttext'];
		$post_title     = strip_tags($post_content);

		global $error_array;
		$error_array = array();

		 $error_message = get_field('gi_error_message', 'option');

		if (!validPost($post_content)) $error_array[]= $error_message;
 
		if (count($error_array) == 0){
 
			$post_id = wp_insert_post( array(
				'post_title'	=> $post_title,
				'post_type'     => 'post',
				'post_content'	=> $post_content,
				'post_status'	=> 'publish'
				) );			
 
			global $notice_array;
			$notice_array = array();

			 $confirmation_message = get_field('gi_confirmation_message', 'option');	
			$notice_array[] = $confirmation_message;
			add_action('simple-fep-notice', 'simple_fep_notices');
		} else {
			add_action('simple-fep-notice', 'simple_fep_errors');
		}
	}
}
 
add_action('init','simple_fep_add_post');