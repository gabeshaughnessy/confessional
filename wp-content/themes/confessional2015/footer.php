<?php

        echo '</main>'; // #content
                echo '</div>'; // .page-wrapper
?>
<footer>
	<?php
	$copyright = get_field('copyright', 'options');
	    echo '<div class="footer outer container">

	    echo '</div>';

	?>
</footer>

<?
  /*      //if(!is_user_logged_in() && 'SITE_ENVIRONMENT' == "production"){
	       ?>
	      <script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-66163301-1', 'auto');
			  ga('send', 'pageview');

			</script>
	       <?php
	   // }*/

        wp_footer();




?>

    </body>
</html>
