jQuery(document).ready(function(){
	jQuery('.flexslider').flexslider({
		directionNav : false,
		animation : 'slide',
		controlNav : false,
		animationSpeed : 600,
		slideshowSpeed : 5000, 
		randomize: true,
		start : function(){
			jQuery('.bigtext').bigtext({ minfontsize: 16, maxfontsize: 60});
		},
		after : function(){
			jQuery('.bigtext').bigtext({ minfontsize: 16, maxfontsize: 60});
		},
	});
});