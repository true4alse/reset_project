<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

// if (G5_IS_MOBILE) {
//     include_once(G5_MOBILE_PATH.'/index.php');
//     return;
// }

include_once(G5_PATH.'/head.php');
?>

<div class="wrap">
<main>
            <div class="sub_banner">
                <div class="sub_bg"></div>
                <div class="sub_banner_inner">
                    <div class="sub_banner_name">
                        <p data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            PREMIUM SKINCARE
                        </p>
                        <h2>RESET CLINIC</h2>
                    </div>
                </div>
            </div>
            <div class="tab_content page">
                <ul class="sub_tab innertop innerbot">
                    <li><a href="menu1_1.php">왜 리셋인가</a></li>
                    <li><a href="menu1_2.php">의료진 소개</a></li>
                    <li class="on"><a href="menu1_3.php">둘러보기</a></li>
                    <li><a href="menu1_4.php">오시는 길 / 진료시간</a></li>
                </ul>
            </div>
            <section class="tour page" >
                <div class="content   innerbot">
                    <h3>
                        <span>RESET CLINIC</span>
                        <i>
                            <em ><b>둘러보기</b></em>
                        </i>
                    </h3>
                    <div class="gallery-slider" >
                        <div class="gallery-single">
                            <div><img src="./img/tour/gall_01.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_02.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_03.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_04.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_05.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_06.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_07.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_08.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_09.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_10.jpg" alt="갤러리 이미지"></div>
                        </div>
                        <div class="gallery-nav">
                            <div><img src="./img/tour/gall_01.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_02.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_03.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_04.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_05.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_06.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_07.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_08.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_09.jpg" alt="갤러리 이미지"></div>
                            <div><img src="./img/tour/gall_10.jpg" alt="갤러리 이미지"></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
</div>
<script>

    $(function(){

         // 둘러보기
         $('.gallery-single').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.gallery-nav',
            autoplay: true,
            autoplaySpeed: 2000,
            draggable: true,
        });

        $('.gallery-nav').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.gallery-single',
            dots: false,
            arrows: false,
            centerMode: false,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                    }

                }
            ],
            
        });

    })

</script>

<?php
include_once(G5_PATH.'/tail.php');