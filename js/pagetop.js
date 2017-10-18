
jQuery(function(){
    if (jQuery(window).width() > 640 ) {
       // ★　任意のズレ高さピクセル数を入力　↓
        var headerHight = 76;
        // #で始まるアンカーをクリックした場合に処理
        jQuery('a[href^=#]').click(function() {
            // スクロールの速度
            var speed = 500; // ミリ秒
            // アンカーの値取得
            var href= jQuery(this).attr("href");
            // 移動先を取得
            var target = jQuery(href == "#" || href == "" ? 'html' : href);
            // 移動先を数値で取得
            if(jQuery('.smanone').hasClass('fixed')) {
                  var position = target.offset().top-headerHight; 
            }else {
                 var position = target.offset().top-headerHight*2;
            }
           
            // スムーズスクロール
            jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
            return false;
        }); 
    }
});
if(!navigator.userAgent.match(/(iPhone|iPad|Android)/)){
    //ここから以下へ実行するJavascriptを記述

    jQuery(function() {
        var topBtn = jQuery('.backtotop');    
        //最初はボタンを隠す
        topBtn.hide();
        //スクロールが300に達したらボタンを表示させる
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 300) {
                topBtn.fadeIn();
            } else {
                topBtn.fadeOut();
            }
        });
        //スクロールしてトップに戻る
        //500の数字を大きくするとスクロール速度が遅くなる
        topBtn.click(function () {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    });
}
