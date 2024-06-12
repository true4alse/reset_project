$(function(){
    // 스크롤 이벤트 리스너를 추가합니다.
    $(window).scroll(function() {
        // 현재 스크롤 값 가져오기
        var scrollValue = $(this).scrollTop();

        // 스크롤 값이 1 이상이면 동작하는 부분
        if (scrollValue > 1) {
            // 여기에 실행하고자 하는 코드를 추가합니다.
            $("header").addClass("scroll");
        } else {
            // 스크롤 값이 1 이하이면 클래스를 제거합니다.
            $("header").removeClass("scroll");
        }
    });
    // html에 입력해야할코드
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

    // quick
    // $(function() {
        $('.top_btn').click( function() {
            var htmloffset = $('html').offset();
            $('html, body').animate( { scrollTop : htmloffset.top }, 400 );
        });
    // })


});

document.querySelectorAll('.scroll-link').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        const targetId = this.getAttribute('href').split('#')[1];
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop,
                behavior: 'smooth'
            });
        }
    });
});