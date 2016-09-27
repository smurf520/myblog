;(function($){
	$.fn.extend({
		lightbox:function(){
			this.on('click',function(){
				$bigmask=$('<div class="bigmask"></div>').appendTo(document.body);
				var iWidth=this.getAttribute('data-width')>=400?400:this.getAttribute('data-width');
				$div=$('<div class="lightboximg"><div class="loading">loading</div></div>').css({
					width:iWidth,
					height:this.getAttribute('data-height'),
					left:($(window).width()-this.getAttribute('data-width'))/2,
					top:($(window).height()-this.getAttribute('data-height'))/2
				}).appendTo(document.body);

				$closebtn=$('<div class="closebtn">X</div>').appendTo($div);
				var oImg=new Image();
				oImg.className='lightbox_img';
				oImg.onload=function(){
					$div.children('.loading').hide();
					$div.append(oImg);
					
				};
				oImg.src=this.getAttribute('data-src');
				$closebtn.click(function(){
					$bigmask.remove();
					$div.remove();
				})
				$bigmask.click(function(){
					this.remove();
					$div.remove();
				})
			}); 
			
		}
	});
})(jQuery);