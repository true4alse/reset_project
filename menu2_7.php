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
                    <li><a href="menu2_6.php">100days 패키지</a></li>
                    <li class="on"><a href="menu2_7.php">리셋 웨딩플래너</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>리셋 웨딩플래너</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="flex_wrap m1_1 m2_1">
                        <div class="img_wrap">
                            <img src="./img/m27.png" alt="웨딩플래너">
                        </div>
                        <div class="txt_wrap">
                            <b data-aos="fade-up"><i>마법같은 드레스핏</i>을 원해?<br>지금 당장 <i>리셋하라!</i></b>
                            <div class="pinkpoint" data-aos="fade-up" data-aos-delay="100"></div>
                            <p data-aos="fade-up" data-aos-delay="200">
                                <i>한 번 뿐인 결혼사진을 <br>
                                    집안 어딘가에 숨기고 싶은가?</i>
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
                                <img src="./img/m21_3_1.png" alt="3D스캐너 체형 분석">
                                <p>3D스캐너 체형 분석</p>
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
                                <img src="./img/m27_1.png" alt="음식 알레르기 검사">
                                <p>음식 알레르기 검사</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="./img/m27_2.png" alt="에너지대사 / 피로물질 / 유기산검사">
                                <p>에너지대사 / 피로물질 / 유기산검사</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="./img/m27_3.png" alt="활성산소 검사">
                                <p>활성산소 검사</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m24_4 page">
                <div class="content innertop ">
                    <h3>
                        <span>RESET CLINIC</span>
                        <i>
                            <em ><b>리셋 웨딩플래너 프로그램</b></em>
                        </i>
                    </h3>
                    <div class="flex_wrap">
                        <div class="txt_wrap">
                            <ul>
                                <li data-aos="fade-up">
                                    <div class="tit">피부 미백</div>
                                </li>
                                <li data-aos="fade-up">
                                    <div class="tit">팔뚝</div>
                                </li>
                                <li data-aos="fade-up">
                                    <div class="tit">승모근</div>
                                </li>
                                <li data-aos="fade-up">
                                    <div class="tit">윤곽</div>
                                </li>
                                <li data-aos="fade-up">
                                    <div class="tit">스피드 다이어트</div>
                                </li>
                            </ul>
                        </div>
                        <div class="img_wrap">
                            <img src="./img/m27_4.png" alt="리셋 웨딩플래너 프로그램">
                        </div>
                    </div>
                </div>
            </div>
            <div class="page">
                <div class="content  innertop  innerbot">
                    <div class="pinkbox" data-aos="fade-up">
                        <div class="pink">예비신부 다이어트, <i>드레스 사이로 드러나는</i></div>
                        <div>군살 고민 / 상체비만 / 전신통통 마법같은 드레스핏 연출을 <i class="pi">리셋하라!</i></div>
                    </div>
                </div>
            </div>
        </main>
</div>
<script>

    

</script>

<?php
include_once(G5_PATH.'/tail.php');