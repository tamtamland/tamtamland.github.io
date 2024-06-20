
$(function(){
    let top=$('#top');
    // #topの変数定義
    top.hide();
    // topを最初、隠しておく

    let bgr=$('#burger');
    // #burgerの変数定義
    
    let nav=$('#nav');
    // navの変数定義

    bgr.on('click',function(){
        $(this).toggleClass('active');
        nav.toggleClass('drawer');
    });


    top.on('click',function(){
        $('html,body').animate({scrollTop:0});
        if(bgr.hasClass('active')){
            bgr.toggleClass('active');
            nav.toggleClass('drawer');
        }
    });

    $(window).on('scroll',function(){
        let scl=$(this).scrollTop();

        if(scl>300){
            top.fadeIn()
        }else{
            top.fadeOut();
        }
    });


});
