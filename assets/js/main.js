;(function($){
	$(document).ready(function(){
		 var slider = tns({
		     container: '.slider',
		     speed : 1000,
		     autoplayTimeout:2000,
		     items: 1,		     
		     autoHeight: true,
		     controls:false,
		     nav: false,
		     autoplayButtonOutput: false,		     
		     autoplay: true
		});
	});
})(jQuery);