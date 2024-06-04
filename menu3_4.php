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
                    <li><a href="menu3_2.php">지방분해주사</a></li>
                    <li><a href="menu3_3.php">트리플바디</a></li>
                    <li class="on"><a href="menu3_4.php">토르고주파</a></li>
                    <li><a href="menu3_5.php">오토힐링</a></li>
                    <li><a href="menu3_6.php">체외충격파</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>토르고주파</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="flex_wrap m1_1 m2_1">
                        <div class="img_wrap">
                            <img src="./img/m34_1.png" alt="토르고주파">
                        </div>
                        <div class="txt_wrap">
                            <b data-aos="fade-up"><i>토르리프팅과 리셋이 만나</i>,<br>만개하다.</b>
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
                            <img src="./img/m34_2.png" alt="토르RF란?">
                        </div>
                        <div class="txt_conwrap">
                            <h6>토르RF란?</h6>
                            <p>
                                토르RF는 비침습 고주파 에너지를 이용하여 스킨타이트닝과 바디 컨투어링에 적용하는 의료기기입니다. 특화된 멀티웨이브 고주파 기술은 적은 출력으로도 원하는 깊이에 보다 더 균일하고 강력하며 안전한 고주파 에너지를 전달하여 시술 효과를 극대화할 수 있습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="content innerbot">
                    <div class="con_wrap ">
                        <div class="img_conwrap">
                            <img src="./img/m34_3.png" alt="토르 핸드피스">
                        </div>
                        <div class="txt_conwrap">
                            <h6>토르 핸드피스</h6>
                            <p>
                                3개의 다른 TORR 핸드피스는 시술 부위에 따라 2.5mm에서 10mm까지 다양한 타겟 깊이로 최적의 에너지를 전달하도록 특별히 설계되었습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="content innerbot">
                    <h6>RESET 토르리프팅의 장점</h6>
                    <ul class="m34_ul">
                        <li>
                            <div class="img_wrap">
                                <img src="./img/m34_4_1.png" alt="1. 자동 모션 헤드">
                            </div>
                            <p data-aos="fade-up">
                                <i>1. 자동 모션 헤드</i>
                                특허받은 자동 원형 모션헤드는 넓은 부위를 치료 시 시술자의 편의와 환자의 편안함을 제공합니다.
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap">
                                <img src="./img/m34_4_2.png" alt="2. 실시간 온도 제어">
                            </div>
                            <p data-aos="fade-up">
                                <i>2. 실시간 온도 제어</i>
                                최적의 에너지로 균일하고 안전한 시술이 가능하며, 시술 목적에 알맞는 온도 설정 기능은 최상의 시술 효과와 안전성을 보장합니다.
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap">
                                <img src="./img/m34_4_3.png" alt="3. 선택 가능한 침투 깊이">
                            </div>
                            <p data-aos="fade-up">
                                <i>3. 선택 가능한 침투 깊이</i>
                                두 에너지의 침투 깊이를 다르게 선택하면 적응증과 환자 상태에 따라 최적의 치료효과를 얻을 수 있습니다.
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap">
                                <img src="./img/m34_4_4.png" alt="4. 멀티 펄스 모드">
                            </div>
                            <p data-aos="fade-up">
                                <i>4. 멀티 펄스 모드</i>
                                펄스 간 간격과 상대적으로 낮은 에너지를 기반으로 축적된 열을 통해 목표 영역에 높은 열에너지를 안전하게 전달할 수 있습니다.
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap">
                                <img src="./img/m34_4_5.png" alt="5. 바이브로 컴포트 모드">
                            </div>
                            <p data-aos="fade-up">
                                <i>5. 바이브로 컴포트 모드</i>
                                시술 부위의 직접적인 열감을 줄이고, 시술 중 환자가 편안함을 느낄 수 있도록 도와줍니다.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class=" page">
                <div class="content innerbot innertop">
                    <h6>리셋의원 토르리프팅 QnA</h6>
                    <div class="qna_box">
                        <ul class="qna_wrap">
                            <li>
                                <h5><i data-aos="fade-up">Q</i><p>토르RF란 무엇인가요?</p></h5>
                                <p><i data-aos="fade-up" data-aos-delay="100">A</i>
                                    토르RF는 비침습 고주파 에너지를 이용하여 얼굴, 바디, 눈가 등의 피부탄력을 개선해주는 안티에이징 시술입니다.
                                </p>
                            </li>
                            <li>
                                <h5><i data-aos="fade-up">Q</i><p>시술 시간은 얼마나 걸리나요?</p></h5>
                                <p><i data-aos="fade-up" data-aos-delay="100">A</i>
                                    시술부위와 개인의 상태에 따라 차이는 있으나 별도의 마취 과정 없이 진행되어 보통 10~30분 이내 정도 소요됩니다.
                                </p>
                            </li>
                            <li>
                                <h5><i data-aos="fade-up">Q</i><p>시술 부위는 어떻게 되나요?</p></h5>
                                <p><i data-aos="fade-up" data-aos-delay="100">A</i>
                                    전문의와 상의 후 고객의 피부 상태에 따라 얼굴, 바디, 눈가 등 부위별 시술이 가능합니다.
                                </p>
                            </li>
                            <li>
                                <h5><i data-aos="fade-up">Q</i><p>시술 시 통증은 없나요?</p></h5>
                                <p><i data-aos="fade-up" data-aos-delay="100">A</i>
                                    개인에 따라 차이는 있으나 통증은 거의 없습니다.
                                </p>
                            </li>
                            <li>
                                <h5><i data-aos="fade-up">Q</i><p>일상생활은 언제 가능한가요?</p></h5>
                                <p><i data-aos="fade-up" data-aos-delay="100">A</i>
                                    시술 직후 바로 일상 생활이 가능합니다.
                                </p>
                            </li>
                            <li>
                                <h5><i data-aos="fade-up">Q</i><p>시술 결과는 언제 확인되나요?</p></h5>
                                <p><i data-aos="fade-up" data-aos-delay="100">A</i>
                                    시술 직후에도 효과를 확인 하실 수 있고, 개인마다 차이는 있으나 보통 1주일 내에 빠른 효과를 확인해 보실 수 있습니다.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
</div>
<script>

    

</script>

<?php
include_once(G5_PATH.'/tail.php');