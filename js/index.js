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
	$('.port_content li').each(function(){
		this.left = this.offsetLeft;//$(this).position().left;
		this.top = this.offsetTop;
		$(this).css({
			left: this.offsetLeft,
			top: this.offsetTop
		});
	})
	.css('position', 'absolute');
	$('.port_content li').hover(function(){
		$(this).children('img').stop().animate({
			width: 305,
			height: 199,
			left: -10,
			top: -10

		});

		$(this).children('.mask').show().stop().animate({
				opacity:0.84
			},1000);
		
	},function(){
		$(this).children('img').stop().animate({
			width: 285,
			height:179,
			left: 0,
			top:0
		});
		$(this).children('.mask').stop().animate({
				opacity:0
			},1000,function(){
				$(this).hide();
		});
	})
	$('.port_content li').lightbox();
})
	
	






	
