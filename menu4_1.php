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
                        <p class="" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            RESET YOUR SKIN
                        </p>
                        <h2 class="">RESET CLINIC</h2>
                    </div>
                </div>
            </div>
            <div class="tab_content page">
                <ul class="sub_tab tab7 innertop innerbot">
                    <li class="on"><a href="menu4_1.php">보톡스</a></li>
                    <li><a href="menu4_2.php">필러</a></li>
                    <li><a href="menu4_3.php">스킨부스터 / 리쥬비네이션</a></li>
                    <li><a href="menu4_4.php">여드름 / 스킨케어</a></li>
                    <li><a href="menu4_5.php">모공 / 색소 프로그램</a></li>
                    <li><a href="menu4_6.php">레이저 제모</a></li>
                    <li><a href="menu4_7.php">탈모치료</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>보톡스</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="flex_wrap m1_1 m2_1">
                        <div class="img_wrap">
                            <img src="./img/m41_1.png" alt="보톡스">
                        </div>
                        <div class="txt_wrap">
                            <b data-aos="fade-up">시간의 흔적 모두 <i>리셋!</i><br><i>리셋톡스</i>로 가능하다!</b>
                            <div class="pinkpoint" data-aos="fade-up" data-aos-delay="100"></div>
                            <p data-aos="fade-up" data-aos-delay="200">
                                간단한 시술일수록, <br>테크닉이 중요합니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page">
                <div class="content innerbot">
                    <div class="con_wrap right_img">
                        <div class="img_conwrap">
                            <img src="./img/m41_2.png" alt="RESETTOX 리셋톡스">
                        </div>
                        <div class="txt_conwrap">
                            <h6>RESETTOX 리셋톡스</h6>
                            <p>
                                근육에 주사하여 표정이 어색해져서 불편함을 느끼는 획일화된 시술로 만족도가 떨어지는 기존 보톡스와 달리, <br>리셋톡스는 얼굴 / 종아리 / 승모근의 근막에 주사하지만, 근육 본연의 기능에 불편함이 없어 더욱 만족도 높은 시술 진행이 가능합니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="content innerbot">
                    <div class="con_wrap ">
                        <div class="img_conwrap">
                            <img src="./img/m41_3.png" alt="RESETTOX 리셋톡스의 효과">
                        </div>
                        <div class="txt_conwrap">
                            <h6>RESETTOX 리셋톡스의 효과</h6>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up">
                                    <p>전체적인 얼굴 축소 효과</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>이중턱 개선</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>자연스러운 리프팅 효과</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>피부 모공 / 탄력 개선</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>어색하지 않은 표정 변화</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content innerbot">
                    <div class="con_wrap right_img">
                        <div class="txt_conwrap ">
                            <h6>보톡스 시술 후 주의사항</h6>
                            <ul class="m41_ul checkbox_ul borderuli">
                                <li  data-aos="fade-up">
                                    <p>
                                        붓기, 주사 부위의 멍, 약간의 가려움 등과 같은 현상은 자연스럽게 사라집니다.
                                    </p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>
                                        시술 후 약물이 주변 근육으로 퍼져나가지 않도록 4시간 정도는 눕는 것을 피하셔야 합니다.
                                    </p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>
                                        시술 후 두통이나 현기증 증세가 나타날 수 있는데, 일시적인 것으로 2~3일 이내에 회복됩니다.
                                    </p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>
                                        시술 후 주사부위의 마사지나 뜨거운 사우나, 심한 운동은 당분간 자제하셔야 합니다.
                                    </p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>
                                        사각턱 보톡스 시술의 경우, 딱딱하거나 질긴 음식은 피하는 것이 좋습니다.
                                    </p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </main>
</div>
<script>

    

</script>

<?php
include_once(G5_PATH.'/tail.php');