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
                        <p class="mint" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            RESET YOUR BODY
                        </p>
                        <h2 class="mint">RESET CLINIC</h2>
                    </div>
                </div>
            </div>
            <div class="tab_content page">
                <ul class="sub_tab tab7 innertop innerbot">
                    <li><a href="menu2_1.php">상체 패키지</a></li>
                    <li><a href="menu2_2.php">하체 패키지</a></li>
                    <li><a href="menu2_3.php">전신리셋</a></li>
                    <li><a href="menu2_4.php">one-day 패키지</a></li>
                    <li><a href="menu2_5.php">5주 패키지</a></li>
                    <li class="on"><a href="menu2_6.php">100days 패키지</a></li>
                    <li><a href="menu2_7.php">리셋 웨딩플래너</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>100days 패키지</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="flex_wrap m1_1 m2_1">
                        <div class="img_wrap">
                            <img src="./img/m26_1.png" alt="100days 패키지">
                        </div>
                        <div class="txt_wrap">
                            <b data-aos="fade-up"><i>100일 뒤가</i> 궁금해?<br>지금 당장 <i>리셋!</i></b>
                            <div class="pinkpoint" data-aos="fade-up" data-aos-delay="100"></div>
                            <p data-aos="fade-up" data-aos-delay="200">
                                <i>리셋만의 100day 패키지 프로그램<br>
                                    드라마 각인으로 맞춤형 리셋 각인</i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m21_2 page">
                <div class="content innertop ">
                    <div class="flex_wrap">
                        <div class="txt_wrap innerbot">
                            <h3>
                                <span>RESET CLINIC</span>
                                <i>
                                    <em ><b>리셋에서 일상이 달라지는 과정</b></em>
                                </i>
                            </h3>
                            <ul>
                                <li>
                                    <p><i>STEP 1 </i>1:1 개인맞춤 최적화</p>
                                </li>
                                <li>
                                    <p><i>STEP 2 </i>개인별 니즈 파악</p>
                                </li>
                                <li>
                                    <p><i>STEP 3 </i>맞춤형 플래닝 진행</p>
                                </li>
                                <li>
                                    <p><i>STEP 4 </i>예뻐지는 과정 프리뷰</p>
                                </li>
                                <li>
                                    <p><i>STEP 5 </i>아름다운 리셋 각인 완성!</p>
                                </li>
                            </ul>
                        </div>
                        <div class="img_wrap">
                            <img src="./img/m21_2.png" alt="리셋에서 일상이 달라지는 과정">
                        </div>
                    </div>
                </div>
            </div>
            <div class="m24_4 page">
                <div class="content innertop ">
                    <h3>
                        <span>RESET CLINIC</span>
                        <i>
                            <em ><b>100days 패키지 프로그램</b></em>
                        </i>
                    </h3>
                    <div class="flex_wrap">
                        <div class="img_wrap">
                            <img src="./img/m25_4.png" alt="5주 패키지 프로그램">
                        </div>
                        <div class="txt_wrap">
                            <ul>
                                <li data-aos="fade-up">
                                    <div class="tit">상체 리셋</div>
                                    <p>매끄러운 11자 팔뚝과 아름답고 여성스러운 허리라인</p>
                                </li>
                                <li data-aos="fade-up">
                                    <div class="tit">하체 리셋</div>
                                    <p>터질듯한 허벅지 / 무릎비만 / 종아리 근육 / 코끼리발목</p>
                                </li>
                                <li data-aos="fade-up">
                                    <div class="tit">전신 리셋</div>
                                    <p>머리부터 발끝까지 전신 리셋!</p>
                                </li>
                                <li data-aos="fade-up">
                                    <div class="tit">무한 DRAMA</div>
                                    <p>부위별 무제한</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page">
                <div class="content  innertop  innerbot">
                    <div class="pinkbox" data-aos="fade-up">
                        <div class="pink">다이어트의 정석, <i>원인 분석부터 의학적 치료까지</i></div>
                        <div>차분히 내 몸을<i class="pi">건강하게 </i>만들어 가는 과정</div>
                    </div>
                </div>
            </div>
        </main>
</div>
<script>

    

</script>

<?php
include_once(G5_PATH.'/tail.php');