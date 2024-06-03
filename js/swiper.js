$(function(){

    
    const swiper = new Swiper('.main_station.swiper', {
        // Optional parameters
        // direction: 'vertical',
        speed: 1000,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        effect: 'fade',
        crossFade:true,
    
        // If we need pagination
        pagination: {
        el: '.swiper-pagination',
        clickable: true,
        },
    
        // Navigation arrows
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        }
    
        // And if we need scrollbar
        // scrollbar: {
        // el: '.swiper-scrollbar',
        // },
    });

    
    const swiper2 = new Swiper('.s7_slider.swiper', {
        loop: true,   
        autoplay: true,
        speed: 1500,
        on: {
            slideChange: function () {
                const activeIndex = this.realIndex; // 현재 활성화된 슬라이드의 실제 인덱스
                const stepListItems = document.querySelectorAll('.step_ul li'); // 단계 목록 항목들을 가져옴
                
                // 이전에 활성화되었던 항목에서 'on' 클래스 제거
                document.querySelector('.step_ul li.on').classList.remove('on');
                
                // 현재 활성화된 슬라이드의 인덱스에 해당하는 단계 목록 항목에 'on' 클래스 추가
                stepListItems[activeIndex].classList.add('on');
            }
        }
        
    });
    
    
        setFlowBanner();
    
        
        
        
        
    })
    
    function setFlowBanner() {
        const $wrap = $('.flow_banner');
        const $list = $('.flow_banner .list');
        let wrapWidth = ''; //$wrap의 가로 크기
        let listWidth = ''; //$list의 가로 크기
        const speed = 92; //1초에 몇픽셀 이동하는지 설정
    
        //리스트 복제
        let $clone = $list.clone();
        $wrap.append($clone);
        flowBannerAct()
    
        //반응형 :: 디바이스가 변경 될 때마다 배너 롤링 초기화
        let oldWChk = window.innerWidth > 1279 ? 'pc' : window.innerWidth > 767 ? 'ta' : 'mo';
        $(window).on('resize', function() {
            let newWChk = window.innerWidth > 1279 ? 'pc' : window.innerWidth > 767 ? 'ta' : 'mo';
            if (newWChk != oldWChk) {
                oldWChk = newWChk;
                flowBannerAct();
            }
        });
    
        //배너 실행 함수
        function flowBannerAct() {
            //배너 롤링 초기화
            if (wrapWidth != '') {
                $wrap.find('.list').css({
                    'animation': 'none'
                });
                $wrap.find('.list').slice(2).remove();
            }
            wrapWidth = $wrap.width();
            listWidth = $list.width();
    
            //무한 반복을 위해 리스트를 복제 후 배너에 추가
            if (listWidth < wrapWidth) {
                const listCount = Math.ceil(wrapWidth * 2 / listWidth);
                for (let i = 2; i < listCount; i++) {
                    $clone = $clone.clone();
                    $wrap.append($clone);
                }
            }
            $wrap.find('.list').css({
                'animation': `${listWidth / speed}s linear infinite flowRolling`
            });
        }
    
        // 마우스가 요소 위로 진입했을 때 일시정지
        $wrap.on('mouseenter', function () {
            $wrap.find('.list').css('animation-play-state', 'paused');
        });
    
        // 마우스가 요소에서 빠져나갈 때 재생
        $wrap.on('mouseleave', function () {
            $wrap.find('.list').css('animation-play-state', 'running');
        });
    }