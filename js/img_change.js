jQuery(function() {
    jQuery(window).setBreakpoints({
        distinct: true,
        breakpoints: [ 1, 640 ]
    });
    jQuery(window).bind('enterBreakpoint640',function() {
        jQuery('.sp-img').each(function() {
            jQuery(this).attr('src', jQuery(this).attr('src').replace('_sp', '_pc'));
        });
    });
    jQuery(window).bind('enterBreakpoint1',function() {
        jQuery('.sp-img').each(function() {
            jQuery(this).attr('src', jQuery(this).attr('src').replace('_pc', '_sp'));
        });
    });
});