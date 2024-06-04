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
                    <li><a href="menu4_1.php">보톡스</a></li>
                    <li><a href="menu4_2.php">필러</a></li>
                    <li><a href="menu4_3.php">스킨부스터 / 리쥬비네이션</a></li>
                    <li><a href="menu4_4.php">여드름 / 스킨케어</a></li>
                    <li><a href="menu4_5.php">모공 / 색소 프로그램</a></li>
                    <li class="on"><a href="menu4_6.php">레이저 제모</a></li>
                    <li><a href="menu4_7.php">탈모치료</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>레이저 제모</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="flex_wrap m1_1 m2_1">
                        <div class="img_wrap">
                            <img src="./img/m46_1.png" alt="레이저 제모">
                        </div>
                        <div class="txt_wrap">
                            <b data-aos="fade-up"><i>RESET</i>만의<br>레이저 제모</b>
                            <div class="pinkpoint" data-aos="fade-up" data-aos-delay="100"></div>
                            <p data-aos="fade-up" data-aos-delay="200">
                                매일 번거로운 제모는 이제 그만! <br>레이저 영구 제모로 깔끔하게 해결!
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class=" innerbot">
                    <div class="con_wrap right_img">
                        <div class="img_conwrap">
                            <img src="./img/m46_2.png" alt="리셋 레이저 제모 장점">
                        </div>
                        <div class="txt_conwrap">
                            <h6>리셋 레이저 제모 장점</h6>
                            <p>
                                다양한 원인으로 인해 피부 표피와 진피에 멜라닌 색소가 과다 생성 되어 나타나는 피부질환
                                <br><br>

                            </p>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up">
                                    <p>맞춤형 제모 <i> : 갈색 또는 흑청색 반점</i></p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>합리적인 비용 <i> : 저렴한 가격으로 높은 만족도</i></p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>높은 효과  <i> : 저자극으로 피부손상 없이 확실한 제모 효과</i></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" innerbot">
                    <div class="con_wrap">
                        <div class="img_conwrap">
                            <img src="./img/m46_3.png" alt="리셋의 프리미엄 제모 레이저 장점">
                        </div>
                        <div class="txt_conwrap">
                            <h6>리셋의 프리미엄 제모 레이저 장점</h6>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up">
                                    <p>
                                        <em>짧은 시술 시간 <i> : 단시간에 선택적 부위를 제모</i></em>
                                    </p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>
                                        <em>통증 최소화 <i> : 강력한 쿨링으로 통증, 화상, 피부손상 최소화</i></em></p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>
                                        <em>영구적 효과   <i> : 면도기, 왁스 등 일시적인 효과가 아닌 영구적 효과</i></em></p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>
                                        <em>안전한 시술  <i> : 붓기와 멍을 최소화 하여 바로 일상생활 가능</i></em></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="innerbot">
                    <div class="con_wrap right_img">
                        <div class="img_conwrap">
                            <img src="./img/m46_4.png" alt="리셋 레이저 제모 시술 부위">
                        </div>
                        <div class="txt_conwrap">
                            <h6>리셋 레이저 제모 시술 부위</h6>
                            <ul class="borderuli m46_1_ul">
                                <li data-aos="fade-up"><p>얼굴</p></li>
                                <li data-aos="fade-up"><p>겨드랑이</p></li>
                                <li data-aos="fade-up"><p>팔</p></li>
                                <li data-aos="fade-up"><p>손</p></li>
                                <li data-aos="fade-up"><p>배</p></li>
                                <li data-aos="fade-up"><p>허리</p></li>
                                <li data-aos="fade-up"><p>다리</p></li>
                                <li data-aos="fade-up"><p>발</p></li>
                            </ul>
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
                                    <em ><b>레이저 제모 추천 대상</b></em>
                                </i>
                            </h3>
                            <ul>
                                <li>
                                    <p>자가 제모가 번거로우신 분</p>
                                </li>
                                <li>
                                    <p>특정 부위의 털이 많이 신경쓰이시는 분</p>
                                </li>
                                <li>
                                    <p>피부 손상 없이 깨끗한 제모를 원하시는 분</p>
                                </li>
                                <li>
                                    <p>영구적인 제모 효과를 원하시는 분</p>
                                </li>
                            </ul>
                        </div>
                        <div class="img_wrap">
                            <img src="./img/m27_4.png" alt="리셋의원 모공 / 색소 프로그램 추천 대상">
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