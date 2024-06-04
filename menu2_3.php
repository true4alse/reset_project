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
                <li class="on"><a href="menu2_3.php">전신리셋</a></li>
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
                    <em ><b>전신리셋</b></em>
                </i>
            </h3>
            <div class="innerbot">
                <div class="flex_wrap m1_1 m2_1">
                    <div class="img_wrap">
                        <img src="./img/m23_1.png" alt="전신리셋">
                    </div>
                    <div class="txt_wrap">
                        <b data-aos="fade-up"><i>리셋 전신관리 </i>받으면서 <br>리즈시절 몸매로 <i>리셋하라!</i></b>
                        <div class="pinkpoint" data-aos="fade-up" data-aos-delay="100"></div>
                        <p data-aos="fade-up" data-aos-delay="200">
                            <i>#머리부터 발끝까지 전신리셋</i><br>
                            <i>#어깨 / 쇄골 라인 되찾기</i><br>
                            <i>#뱃살 순삭</i>   
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
                <ul class="m21_3_ul m23_3_ul">
                    <li>
                        <div>
                            <img src="./img/m23_3_1.png" alt="토르 고주파">
                            <p>토르 고주파</p>
                        </div>
                        <b data-aos="fade-up">
                            근막 내 염증을 정확히 타겟팅하여
                            섬유부종의 원인인 근막염증을 제거합니다.
                        </b>
                    </li>
                    <li>
                        <div>
                            <img src="./img/m23_3_2.png" alt="바디 슈링크, HIFU ">
                            <p>바디 슈링크, HIFU </p>
                        </div>
                        <b data-aos="fade-up">고강도집속초음파 리프팅으로 바디 지방 분해와 탄력, 리프팅을 시켜줍니다.</b>
                    </li>
                    <li>
                        <div>
                            <img src="./img/m23_3_3..png" alt="걸그룹 DRAMA 주사">
                            <p>걸그룹 DRAMA 주사</p>
                        </div>
                        <b data-aos="fade-up">지방을 분해하고 군살을 제거해 줍니다.</b>
                    </li>
                    <li>
                        <div>
                            <img src="./img/m23_3_4.png" alt="엔더몰로지">
                            <p>엔더몰로지</p>
                        </div>
                        <b data-aos="fade-up">
                            음압과 롤링을 이용해 즉각적인 부종제거 및 셀룰라이트를 개선해 지방배출을 촉진합니다.
                        </b>
                    </li>
                    <li>
                        <div>
                            <img src="./img/m23_3_5.png" alt="방사형 충격파">
                            <p>방사형 충격파</p>
                        </div>
                        <b data-aos="fade-up">지방형 셀룰라이트를 감소시키고 림프 및 혈류 순환을 증가시킵니다.</b>
                    </li>
                    <li>
                        <div>
                            <img src="./img/m23_3_6.png" alt="트리플바디">
                            <p>트리플바디</p>
                        </div>
                        <b data-aos="fade-up">
                            고/중/저주파 복합레이저로 지방을 융해하여 분해된 지방이 림프로 배출되는 것을 도와줍니다.
                        </b>
                    </li>
                    <li>
                        <div>
                            <img src="./img/m23_3_7.png" alt="오토힐링">
                            <p>오토힐링</p>
                        </div>
                        <b data-aos="fade-up">
                            세동맥순환 촉진 효과, 지방세포와 셀룰라이트의 분해를 촉진하고 림프기능과 신진대사 기능을 극대화시킵니다.
                        </b>
                    </li>
                    <li>
                        <div>
                            <img src="./img/m23_3_5.png" alt="집중형 충격파">
                            <p>집중형 충격파</p>
                        </div>
                        <b data-aos="fade-up">
                            균일하고 강력한 고주파 에너지로 스킨타이트닝과 바디라인개선 효과를 봅니다.
                        </b>
                    </li>
                </ul>
            </div>
        </div>
        <div class="page">
            <div class="content    innerbot">
                <div class="pinkbox" data-aos="fade-up">
                    <div class="pink">리셋만의 체계적인 관리 시스템</div>
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