jQuery(document).on('scroll',function () {
	if(jQuery(window).scrollTop() > 0) {
		jQuery('.smanone').css('position', 'fixed');
		jQuery('.smanone').css('top', '0px');
		jQuery('.smanone').css('z-index', '999');
		jQuery('.smanone').css('width', '100%');
		jQuery('.smanone').addClass('fixed');
	}else{
		jQuery('.smanone').css('position', 'relative');
		jQuery('.smanone').removeClass('fixed');
	}
});