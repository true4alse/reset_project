$(function(){

    // 페이지 공통기능 js 추가 - 바른웹디자인 추가

    AOS.init({ 
        duration: 1000
    });
// 헤더를 불러온 후에 실행되어야 하는 JavaScript 코드 추가
    // 예시: 메뉴 토글 등의 기능 초기화
    // 모바일 메뉴 열기
    $('.header_menu').mouseenter(function(){
        $('.gnbinfo').addClass('active');
    });
    $('.header_menu').mouseleave(function(){
        $('.gnbinfo').removeClass('active');
    });
    // 모바일 메뉴 열기
    $(".open_menu").click(function(event){
        event.stopPropagation();
        $(".hidden_bg").addClass("on");
    });
    // 모바일 메뉴 닫기
    $(".close_menu").click(function(event){
        event.stopPropagation();
        $(".hidden_bg").removeClass("on");
    });
    // 모바일 메뉴 토글
    $(".hidden_gnb>li").click(function(event) {
        event.stopPropagation();
        // 클릭된 메뉴의 하위 메뉴 토글
        $(this).find('.top_0').slideToggle();

        // 다른 메뉴의 하위 메뉴 닫기
        $(".hidden_gnb>li").not(this).find('.top_0').slideUp();
        
        // 현재 메뉴 활성화 표시
        $(".hidden_gnb>li>a").removeClass("on");
        $(this).children('a').addClass("on");
    });




    $('.top_btn').click( function() {
        var htmloffset = $('html').offset();
        $('html, body').animate( { scrollTop : htmloffset.top }, 400 );
    });


})