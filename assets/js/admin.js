

;(function($){
	$(document).on('change', 'select[id*="post-format"]',function(){ 
		if(this.value == "image"){
		$('#_alpha_image_information').show();
	}else{
		$('#_alpha_image_information').hide();
	}
 });
})(jQuery);


