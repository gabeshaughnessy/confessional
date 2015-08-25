jQuery(window).load(function(){
	jQuery('.flexslider').flexslider({
	    animation: "fade",
	    controlNav: false,
	    pauseOnHover: true
    });
    jQuery('.announcement-banner').addClass('ready').on('click', '.dismiss', function(){
    	console.log(jQuery(this));
	 	jQuery(this).parent('.announcement-banner').fadeOut('fast');
	});
});