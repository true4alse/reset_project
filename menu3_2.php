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
                <ul class="sub_tab tab6 innertop innerbot">
                    <li><a href="menu3_1.php">SPL</a></li>
                    <li class="on"><a href="menu3_2.php">지방분해주사</a></li>
                    <li><a href="menu3_3.php">트리플바디</a></li>
                    <li><a href="menu3_4.php">토르고주파</a></li>
                    <li><a href="menu3_5.php">오토힐링</a></li>
                    <li><a href="menu3_6.php">체외충격파</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>지방분해주사</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="flex_wrap m1_1 m2_1">
                        <div class="img_wrap">
                            <img src="./img/m32_1.png" alt="지방분해주사">
                        </div>
                        <div class="txt_wrap">
                            <b data-aos="fade-up">원하는 부분만 <i>확실하게,</i><br>수술 없이 <i>슬림하게!</i></b>
                            <div class="pinkpoint" data-aos="fade-up" data-aos-delay="100"></div>
                            <p data-aos="fade-up" data-aos-delay="200">
                                Reset Your Body
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page">
                <div class="content innerbot">
                    <div class="con_wrap right_img">
                        <div class="img_conwrap">
                            <img src="./img/m32_2.png" alt="리셋의 지방분해주사">
                        </div>
                        <div class="txt_conwrap">
                            <h6>리셋의 지방분해주사</h6>
                            <p>
                                다이어트 또는 운동을 통해 지방이 잘 안빠지는 부위에 지방분해 약물을 직접 주입하여 지방세포 크기, 수를 제거 및 파괴하여 지방 감량을 촉진시키는 시술입니다.
                            </p>
                            <ul class="m31_ul">
                                <li data-aos="fade-up">지방분해</li>
                                <li data-aos="fade-up" data-aos-delay="100">부기 감소</li>
                                <li data-aos="fade-up" data-aos-delay="200">셀룰라이트<br>개선</li>
                            </ul>
                            <p>[ RESET 지방분해주사의 효과 ]</p>
                        </div>
                    </div>
                </div>
                <div class="content innerbot">
                    <div class="con_wrap">
                        <div class="img_conwrap">
                            <img src="./img/m32_3.png" alt="체중감량을 방해하는 셀룰라이트">
                        </div>
                        <div class="txt_conwrap">
                            <h6>체중감량을 방해하는 셀룰라이트</h6>
                            <p>
                                여성의 85% 이상 겪는 피부질환으로 주로 엉덩이, 복부, 허벅지에 발생합니다. <br>셀룰라이트는 매끈한 바디 라인을 방해하는 요인이 될 뿐만 아니라 체중 감량 효과를 저해하는 요인이 됩니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="content innerbot">
                    <div class="con_wrap right_img">
                        <div class="txt_conwrap">
                            <h6>체중감량을 방해하는 셀룰라이트</h6>
                            <ul class="m32_5_ul">
                                <li data-aos="fade-up">
                                    <div class="img_wrap">
                                        <img src="./img/m32_5_1.png" alt="시술 간격">
                                    </div>
                                    <p>
                                        <i>시술 간격</i><br>
                                        격일 시술
                                    </p>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <div class="img_wrap">
                                        <img src="./img/m32_5_2.png" alt="시술 시간">
                                    </div>
                                    <p>
                                        <i>시술 시간</i><br>
                                        10~15분
                                    </p>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="200">
                                    <div class="img_wrap">
                                        <img src="./img/m32_5_3.png" alt="스테로이드 NO!">
                                    </div>
                                    <p>
                                        스테로이드 NO!
                                    </p>
                                </li>
                                <li  data-aos="fade-up" data-aos-delay="300">
                                    <div class="img_wrap">
                                        <img src="./img/m32_5_4.png" alt="원하는 부위만 골라 집중적 시술 가능">
                                    </div>
                                    <p>
                                        원하는 부위만 골라<br>집중적 시술 가능
                                    </p>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="400">
                                    <div class="img_wrap">
                                        <img src="./img/m32_5_5.png" alt="시술 후 빠른 일상 복귀">
                                    </div>
                                    <p>
                                        시술 후<br>빠른 일상 복귀
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m21_4 m31_4 m32_4 page">
                <div class="content  ">
                    <div class="flex_wrap">
                        <div class="txt_wrap innertop innerbot">
                            <h3>
                                <span>RESET CLINIC</span>
                                <i>
                                    <em ><b>리셋의원 지방분해주사 추천 대상</b></em>
                                </i>
                            </h3>
                            <ul>
                                <li data-aos="fade-up">빠지지 않는 부분지방 제거를 원하시는 분</li>
                                <li data-aos="fade-up">울퉁불퉁한 셀룰라이트로 고민이신 분</li>
                                <li data-aos="fade-up">피부가 쉽게 붓고 부종이 심하신 분</li>
                                <li data-aos="fade-up">긴 시술에 대한 부담이 있으신 분</li>
                            </ul>
                        </div>
                        <div class="img_wrap">
                            <img src="./img/m25_4.png" alt="체형과 체질을 파악하여
                            적합한 솔루션 제시">
                        </div>
                    </div>
                </div>
            </div>
            <div class="m21_5 page">
                <div class="content   innertop innerbot">
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