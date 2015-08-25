<?php
global $post;
$job_count = 5;
echo '<h3>Current Job Openings</h3>';
	echo '<ul class="job-list">';
		$jobs = get_job_listings();
		$i = 0;
		if($jobs->have_posts()) : while($i < $job_count && $jobs->have_posts()) : $jobs->the_post();
			echo '<li><a href="'.get_permalink().'" title="view job listing">'.get_the_title().'</a></li>';
			$i++;
		endwhile; endif;
		wp_reset_query();

	echo '</ul><a href="/careers/job-listings">View More &rarr;</a>';
?>