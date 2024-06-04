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
                    <li class="on"><a href="menu3_3.php">트리플바디</a></li>
                    <li><a href="menu3_4.php">토르고주파</a></li>
                    <li><a href="menu3_5.php">오토힐링</a></li>
                    <li><a href="menu3_6.php">체외충격파</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>트리플바디</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="flex_wrap m1_1 m2_1">
                        <div class="img_wrap">
                            <img src="./img/m33_1.png" alt="트리플바디">
                        </div>
                        <div class="txt_wrap">
                            <b data-aos="fade-up"><i>Perfect Body Care Solution,</i><br>건강하고 아름다운 몸을 만들다.</b>
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
                        <div class="txt_conwrap">
                            <h6>트리플바디란?</h6>
                            <p>
                                트리플바디는 저출력 레이저, 고주파, 중저주파를 이용한 3가지 기전의 복합적 시너지로 지방을 감소시키고 피부탄력, 부종, 셀룰라이트 개선에 도움을 줍니다.
                            </p>
                        </div>
                    </div>
                    <ul class="m32_5_ul m33">
                        <li>
                            <div class="img_wrap" data-aos="fade-up">
                                <img src="./img/m33_2_1.png" alt="저출력 레이저">
                            </div>
                            <p>
                                <i>저출력 레이저</i><br>
                                피부 진피층의 콜라겐과 탄력 섬유를 활성화시켜 탄력증가 및 피부톤 개선
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap" data-aos="fade-up">
                                <img src="./img/m33_2_2.png" alt="고주파">
                            </div>
                            <p>
                                <i>고주파</i><br>
                                느슨해진 결합력을 높여 피부 재생, 순환을 촉진. 피부 톤 개선, 미백 효과
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap" data-aos="fade-up">
                                <img src="./img/m33_2_3.png" alt="중저주파">
                            </div>
                            <p>
                                <i>중저주파</i><br>
                                몸의 균형적인 밸런스와 탄력증가, 지방층 재배열로 피부결 개선
                            </p>
                        </li>
                        
                    </ul>
                </div>
                <div class="content innerbot">
                    <div class="con_wrap ">
                        <div class="img_conwrap">
                            <img src="./img/m33_3.png" alt="RESET 트리플바디 효과">
                        </div>
                        <div class="txt_conwrap">
                            <h6>RESET 트리플바디 효과</h6>
                            <p>
                                트리플바디는 셀룰라이트 염증 완화와 근육의 활성화를 통한 피부결, 피부톤, 바디라인의 개선이 가능합니다.<br>
                                또한, 지방세포 개체수 및 사이즈 감소와 콜라겐 섬유 재배열 및 탄력증진까지 가능하여 건강한 아름다움까지 동시에 개선이 가능합니다.
                            </p>
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
                                    <em ><b>리셋의원 트리플바디 추천 대상</b></em>
                                </i>
                            </h3>
                            <ul>
                                <li data-aos="fade-up">다이어트를 해도 살이 잘 빠지지 않아 고민이신 분</li>
                                <li data-aos="fade-up">허벅지 안쪽살, 팔뚝살, 뱃살 등 특정 부위 군살이 고민이신 분</li>
                                <li data-aos="fade-up">식단조절, 운동으로는 개선하기 힘든 셀룰라이트,
                                    내장지방, 피부탄력, 부종을 개선하고 싶으신 분</li>
                            </ul>
                        </div>
                        <div class="img_wrap">
                            <img src="./img/m25_4.png" alt="체형과 체질을 파악하여
                            적합한 솔루션 제시">
                        </div>
                    </div>
                </div>
            </div>
            <div class=" page">
                <div class="content innerbot innertop">
                    <h6>리셋의원 트리플바디 QnA</h6>
                    <div class="qna_box">
                        <ul class="qna_wrap">
                            <li>
                                <h5><i data-aos="fade-up">Q</i><p>시술 받을 때 마취가 필요한가요?</p></h5>
                                <p><i data-aos="fade-up" data-aos-delay="100">A</i>
                                    트리플바디는 별도의 마취가 필요 없습니다. 또한, 개인 맞춤 프로그램으로 진행되어 세가지 기능의 출력과 강도로 조절하기 때문에 통증 없이 편안하게 받으실 수 있으며, 바로 일상생활 복귀가 가능합니다.
                                </p>
                            </li>
                            <li>
                                <h5><i data-aos="fade-up">Q</i><p>시술 간격과 부위는 어떻게 되나요?</p></h5>
                                <p><i data-aos="fade-up" data-aos-delay="100">A</i>
                                    얼굴을 모든 부위에 가능하며 시술 부위의 상태에 따라 주 1,2회 권장드립니다.
                                </p>
                            </li>
                            <li>
                                <h5><i data-aos="fade-up">Q</i><p>단 1회만으로도 사이즈 변화를 느낄 수 있나요?</p></h5>
                                <p><i data-aos="fade-up" data-aos-delay="100">A</i>
                                    시술 부위 및 개인에 따라 차이가 있을 수 있으나 일반적으로 1회 시술만으로도 소프트해짐을 느낄 수 있고 1cm 전후의 사이즈 감소효과를 보실 수 있습니다. 트리플바디 시술로 8회(4~5주)정도 시술 시 시술부위 둘레의 약 5~8%가 감소된다는 임상 실험 결과가 있습니다.
                                </p>
                            </li>
                            <li>
                                <h5><i data-aos="fade-up">Q</i><p>시술 후 주의할 점이 있나요?</p></h5>
                                <p><i data-aos="fade-up" data-aos-delay="100">A</i>
                                    시술 전후 2시간 정도는 칼로리 섭취를 피해주시는 것이 좋으며, 물을 많이 섭취해주시는 것이 좋습니다.
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