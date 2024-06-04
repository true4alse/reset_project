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
        <!-- <div id="header-placeholder"></div> -->
        <!-- quick -->
        <!-- <div id="quick-placeholder"></div> -->
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
                    <li class="on"><a href="menu1_1.php">왜 리셋인가</a></li>
                    <li><a href="menu1_2.php">의료진 소개</a></li>
                    <li><a href="menu1_3.php">둘러보기</a></li>
                    <li><a href="menu1_4.php">오시는 길 / 진료시간</a></li>
                </ul>
            </div>
            <div class="content">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>왜 리셋인가?</b></em>
                    </i>
                </h3>
                <div class="flex_wrap m1_1">
                    <div class="img_wrap">
                        <img src="./img/m11_1.png" alt="왜 리셋인가?">
                    </div>
                    <div class="txt_wrap">
                        <div class="tit" data-aos="fade-up">지금 당장 리셋 하라!</div>
                        <b data-aos="fade-up" data-aos-delay="100"><i>대한비만학회 비만전문인정의</i>와 함께 <br>건강하고 아름답게, </b>
                        <em data-aos="fade-up" data-aos-delay="200"><i>RESET YOUR BODY!</i></em>
                    </div>
                </div>
            </div>
            <section class="s5 page" >
                <div class="content innertop  innerbot">
                    <h3>
                        <span>RESET CLINIC</span>
                        <i>
                            리셋이기에 가능한 <br class="mo"> 
                            <em class="pink_line"><b>Before & After</b></em>
                        </i>
                    </h3>
                    <ul class="s5_ul">
                        <li>
                            <a href="menu9_2.php">
                                <img src="./img/s5_1.png" alt="복부 허벅지 4부위 8회 + 8회 추가">
                                <p>복부 허벅지 4부위 8회 + 8회 추가</p>
                            </a>
                        </li>
                        <li>
                            <a href="menu9_2.php">
                                <img src="./img/s5_2.png" alt="SPL 6부위 12회">
                                <p>SPL 6부위 12회</p>
                            </a>
                        </li>
                        <li>
                            <a href="menu9_2.php">
                                <img src="./img/s5_3.png" alt="복부 SPL 12회">
                                <p>복부 SPL 12회</p>
                            </a>
                        </li>
                        <li>
                            <a href="menu9_2.php">
                                <img src="./img/s5_4.png" alt="SPL 리셋">
                                <p>SPL 리셋</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="s7 page sub" >
                <div class="content innertop  innerbot">
                    <h3>
                        <span>RESET CLINIC</span>
                        <i>
                            1:1 맞춤 다이어트 프로그램 <br>
                            <em class="pink_line"><b>RESET SOLUTION</b></em>
                        </i>
                    </h3>
                    <div class="s7_wrap">
                        <!-- 슬라이더 -->
                        <div class="s7_slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="./img/s7_1.png" alt="체형 파악"></div>
                                <div class="swiper-slide"><img src="./img/s7_2.png" alt="기능 의학검사"></div>
                                <div class="swiper-slide"><img src="./img/s7_3.png" alt="원인 분석"></div>
                                <div class="swiper-slide"><img src="./img/s7_4.png" alt="맞춤 솔루션"></div>
                                <div class="swiper-slide"><img src="./img/s7_5.png" alt="유지관리"></div>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <i>체계적인 유지관리</i>
                                <em>SUPER 상체 슬림 패키지</em>
                            </li>
                            <li>
                                <i>비만 원인 파악</i>
                                <em>FAST 하체 슬림 패키지</em>
                            </li>
                            <li>
                                <i>개개인에 맞춘 솔루션 수립</i>
                                <em>TOTAL 전신 패키지</em>
                            </li>
                        </ul>
                    </div>
                    <ul class="step_ul ">
                        <li class="on"><i>STEP 1</i><b>체형 파악</b></li>
                        <li><i>STEP 2</i><b>기능 의학검사</b></li>
                        <li><i>STEP 3</i><b>원인 분석</b></li>
                        <li><i>STEP 4</i><b>맞춤 솔루션</b></li>
                        <li><i>STEP 5</i><b>유지관리</b></li>
                    </ul>
                </div>
            </section>
        </main>
        <!-- <div id="footer-placeholder"></div> -->
    </div>

<?php
include_once(G5_PATH.'/tail.php');