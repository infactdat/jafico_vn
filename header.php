<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
        jQuery(function(){
        // setViewport
        spView = 'width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0';
        tbView = 'width=1200px,maximum-scale=2.0,user-scalable=1';
     
        if(navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('iPod') > 0 || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') > 0)){
            jQuery('head').prepend('<meta name="viewport" content="' + spView + '" id="viewport">');
        } else if(navigator.userAgent.indexOf('iPad') > 0 || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') == -1) || navigator.userAgent.indexOf('A1_07') > 0 || navigator.userAgent.indexOf('SC-01C') > 0){
            jQuery('head').prepend('<meta name="viewport" content="' + tbView + '" id="viewport">');
        } 
     
        // iPhone6 Plus Landscape Viewport
        if(navigator.userAgent.indexOf('iPhone') > 0){
            if(window.devicePixelRatio == 3) {
     
                if(window.orientation == 0){
                    jQuery('#viewport').attr('content',spView);
                } else {
                    jQuery('#viewport').attr('content',tbView);
                }
     
                window.onorientationchange = setView;
     
                function setView(){
                    setTimeout(function(){
                        location.reload();
                        return false;
                    },500);
                }
            }
        }
    });
    </script>
    <meta name="description"
          content="Jafico_ Tổ chức pháp nhân uy tín, tin cậy trong lĩnh vực  tuyển dụng, giới thiệu nhân lực chất lượng cao người Việt Nam cho các công ty Nhật Bản. Mang đến cơ hội làm việc ổn định, lâu dài tại Nhật cho các kỹ sư CNTT, kỹ sư xây dựng, biên phiên dịch tiếng Nhật. Miễn phí giới thiệu, hỗ trợ, tư vấn toàn bộ từ khi đăng ký cho đến khi được tuyển dụng, tổ chức đào tạo các kiến thức cơ bản và cần thiết để sống và làm việc tại Nhật Bản cho các ứng viên."/>
    <!--ogp-->
    <meta property="fb:app_id" content="316866455357194">
    <meta property="og:title" content="Tuyển dụng, giới thiệu việc làm miễn phí tại Nhật Bản-Jafico.tokyo "/>
    <meta property="og:type" content="website"/>
    <meta property="og:description"
          content="Jafico_ Tổ chức pháp nhân uy tín, tin cậy trong lĩnh vực  tuyển dụng, giới thiệu nhân lực chất lượng cao người Việt Nam cho các công ty Nhật Bản. Mang đến cơ hội làm việc ổn định, lâu dài tại Nhật cho các kỹ sư CNTT, kỹ sư xây dựng, biên phiên dịch tiếng Nhật. Miễn phí giới thiệu, hỗ trợ, tư vấn toàn bộ từ khi đăng ký cho đến khi được tuyển dụng, tổ chức đào tạo các kiến thức cơ bản và cần thiết để sống và làm việc tại Nhật Bản cho các ứng viên."/>
    <meta property="og:image" content="http://www.jafico.tokyo/ogp.jpg">
    <meta property="og:url" content="http://www.jafico.tokyo/"/>
    <meta name="twitter:card" content="summary_large_image">
    <!--end ogp-->
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="favicon.ico"/>

    <link rel="apple-touch-icon-precomposed" href="images/common/apple-touch-icon-precomposed.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <link hreflang="vi" href="http://www.jafico.tokyo/" rel="alternate"/>
    <!-- ページトップend -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-85030704-2', 'auto');
        ga('send', 'pageview');

    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <?php if(!is_mobile()): ?>
        <?php if(get_field('banner')) : ?>
            <section class="top-banner">
                <img src="<?php $image = get_field('banner'); echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']?>" />
            </section>
        <?php endif;?>
    <?php endif;?>
    <?php if(!is_mobile()): ?>
    	<header id="masthead" class="header smanone" role="banner">

    		<?php if ( has_nav_menu( 'top' ) ) : ?>
    			<div class="nav-wrap">
    				<div class="container">
    					
                            <nav class="top-nav" role="navigation">
                                <?php wp_nav_menu( array(
                                    'theme_location' => 'top',
                                    'menu_id'        => 'top-menu'
                                ) ); ?>
                            </nav><!-- #site-navigation -->
                        
    				</div><!-- .wrap -->
    			</div><!-- .navigation-top -->
    		<?php endif; ?>

    	</header><!-- #masthead -->
    <?php endif;?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
            <?php if(!is_front_page()): ?>
                <div id="breadcrumb">
                    <div class="container">
                        <?php custom_breadcrumbs(); ?>
                    </div>
                </div><!--/breadcrumb-->
            <?php endif; ?>
