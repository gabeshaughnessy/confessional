<?php global $post, $fields;
if(isset($fields) && !empty($fields['announcements'])){

	$announcements = $fields['announcements'];
	$dismiss_text = (isset($fields['dismiss_text']) && !empty($fields['dismiss_text']) ? $fields['dismiss_text'] : 'Dismiss this message');
	echo'<div class="announcement-container"><div class="announcement-banner">';//first slide is blank
		$i = 0;
		foreach ($announcements as $announcement) {
			//get expiration date
			$expires = $announcement['expires'];
			
			if($expires == '' || $expires > date('Ymd',time())){
				?>
				<div class="modal">
				  <label for="modal-<?php echo $i; ?>">
				    <div class="modal-trigger"><?php echo $announcement['announcement_title']; ?></div>
				  </label>
				  <input class="modal-state" id="modal-<?php echo $i; ?>" type="checkbox" />
				  <div class="modal-fade-screen">
				    <div class="modal-inner">
				      <div class="modal-close" for="modal-<?php echo $i; ?>"></div>
				      <h2><?php echo $announcement['announcement_title']; ?></h2>
				      <?php echo $announcement['announcement_text']; ?>
				    </div>
				  </div> 
				</div>
				<a class="dismiss" href="#" title="Dismiss this message"><?php echo (isset($fields['dismiss_text']) && !empty($fields['dismiss_text']) ? $fields['dismiss_text'] : $dismiss_text ); ?></a>
				<?php
				$i++;

			}
			//print announcement title
			//link to modal with announcement content.
		}
	echo '</ul></div></div>';
}
