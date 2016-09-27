require.config({
	shim:{
		'jquery.lightbox':['jquery']
	}
});
require(['jquery','jquery.lightbox'], function($){
	$('.open_btn').on('click',function(){
		$('.top_mask').animate({
			top:0
		},1000)
	});
	$('.mask_list .close_btn').on('click',function(){
		$('.top_mask').animate({
			top:-192
		},1000,function(){
			$(this).hide();
		})
	});
})