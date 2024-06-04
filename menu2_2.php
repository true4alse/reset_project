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
                    <li class="on"><a href="menu2_2.php">하체 패키지</a></li>
                    <li><a href="menu2_3.php">전신리셋</a></li>
                    <li><a href="menu2_4.php">one-day 패키지</a></li>
                    <li><a href="menu2_5.php">5주 패키지</a></li>
                    <li><a href="menu2_6.php">100days 패키지</a></li>
                    <li><a href="menu2_7.php">리셋 웨딩플래너</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>하체 패키지</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="flex_wrap m1_1 m2_1">
                        <div class="img_wrap">
                            <img src="./img/m22_1.png" alt="하체 패키지">
                        </div>
                        <div class="txt_wrap">
                            <b data-aos="fade-up">탄력있는 <i>내 다리 </i>찾고 싶다면 <br>지금 당장  <i>리셋하라!</i></b>
                            <div class="pinkpoint" data-aos="fade-up" data-aos-delay="100"></div>
                            <p data-aos="fade-up" data-aos-delay="200">
                                <i>허벅지 </i> - 미니스커트도 자신있게<br>
                                <i>종아리 </i> - 날씬한 각선미 & 울퉁불퉁 근육 제거<br>
                                <i>발목 </i> - 코끼리 발목은 이제 그만
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
            <div class="m21_3 page">
                <div class="content innertop innerbot">
                    <h3>
                        <span>RESET CLINIC</span>
                        <i>
                            <em ><b>일상이 달라지는 리셋만의 패키지</b></em>
                        </i>
                    </h3>
                    <ul class="m21_3_ul">
                        <li>
                            <div>
                                <img src="./img/m21_3_1.png" alt="BIA, 체성분 분석">
                                <p>BIA, 체성분 분석</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="./img/m21_3_2.png" alt="초음파 진피, 지방, 근육 분석">
                                <p>초음파 진피, 지방, 근육 분석</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="./img/m21_3_3.png" alt="호르몬 밸런스 검사">
                                <p>호르몬 밸런스 검사</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="./img/m21_3_4.png" alt="지방 분해 SPL주사">
                                <p>지방 분해 SPL주사</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="./img/m21_3_5.png" alt="체외충격파 고주파 복합기계치료">
                                <p>체외충격파 고주파 복합기계치료</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="./img/m21_3_6.png" alt="식이,운동,생활습관 교정">
                                <p>식이, 운동, 생활습관 교정</p>
                            </div> 
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m21_4 page">
                <div class="content  ">
                    <div class="flex_wrap">
                        <div class="txt_wrap innertop innerbot">
                            <h3>
                                <spa data-aos="fade-up"n>RESET CLINIC</spa>
                                <i data-aos="fade-up">
                                    <em ><b>감추고 싶은 다리,
                                        고민에서 탈출하고 싶다면?</b></em>
                                </i>
                            </h3>
                            <div class="m21_4_tit" data-aos="fade-up">리셋하라!</div>
                        </div>
                        <div class="img_wrap">
                            <img src="./img/m22_4.png" alt="체형과 체질을 파악하여
                            적합한 솔루션 제시">
                        </div>
                    </div>
                </div>
            </div>
            <div class="m21_5 page">
                <div class="content   innertop innerbot">
                    <div class="pinkbox" data-aos="fade-up">
                        <div class="pink">리셋만의 체계적인 하체관리 시스템</div>
                        <div>1:1 맞춤 다이어트로 통증 / 피로 / 노화 / 비만의 전체 치료 플랜을 제시합니다.</div>
                    </div>
                </div>
            </div>
        </main>
</div>
<script>

    

</script>

<?php
include_once(G5_PATH.'/tail.php');