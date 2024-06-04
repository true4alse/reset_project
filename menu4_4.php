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
                    <li class="on"><a href="menu4_4.php">여드름 / 스킨케어</a></li>
                    <li><a href="menu4_5.php">모공 / 색소 프로그램</a></li>
                    <li><a href="menu4_6.php">레이저 제모</a></li>
                    <li><a href="menu4_7.php">탈모치료</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>여드름 / 스킨케어</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="flex_wrap m1_1 m2_1">
                        <div class="img_wrap">
                            <img src="./img/m43_4.png" alt="여드름 / 스킨케어">
                        </div>
                        <div class="txt_wrap">
                            <b data-aos="fade-up">건강한 피부로<br><i>RESET!</i></b>
                            <div class="pinkpoint" data-aos="fade-up" data-aos-delay="100"></div>
                            <p data-aos="fade-up" data-aos-delay="200">
                                무너진 피부장벽,<br>건강한 피부로 리셋 하려면?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page">
                <div class="content ">
                    <h6>여드름이란? 나의 피부 유형은?</h6>
                    <p class="m44p">
                        <em>여드름이란?</em><br><br>
                        여드름이란 피지 분비에 비해 배출이 제대로 되지 않거나 스트레스, 호르몬 이상 등 복합적 요인으로 인해 발생하는 염증 질환입니다. 여드름 치료는 여드름의 다양한 종류와 치료 원인을 정확히 파악하여 진행해야 합니다.
                    </p>
                </div>
                <div class="content innerbot">
                    <div class="con_wrap m50">
                        <div class="img_conwrap">
                            <img src="./img/m44_2_1.png" alt="좁쌀 여드름 (화이트/블랙헤드)">
                        </div>
                        <div class="txt_conwrap">
                            <h5>
                                <p data-aos="fade-up">CASE 1</p>
                                좁쌀 여드름 (화이트/블랙헤드)
                            </h5>
                            <ul class="checkbox_ul ">
                                <li>
                                    <p>모공이 막히고 면포가 생성되었으나 염증 이전의 상태</p>
                                </li>
                                <li>
                                    <p>방치 시 모공 넓어짐, 피부 탄력의 저하, <br>화농성 여드름 발전 가능성 높음</p>
                                </li>
                            </ul>
                            <p data-aos="fade-up">
                                <b class="m44_point">추천!</b>
                                <i class="pink_line">아쿠아필, 밀크필, 라라필 등의 스킨 스케일링</i>
                            </p>
                        </div>
                    </div>
                    <div class="con_wrap m50">
                        <div class="img_conwrap">
                            <img src="./img/m44_2_2.png" alt="염증성 여드름 / 성인 여드름">
                        </div>
                        <div class="txt_conwrap">
                            <h5>
                                <p data-aos="fade-up">CASE 2</p>
                                염증성 여드름 / 성인 여드름
                            </h5>
                            <ul class="checkbox_ul ">
                                <li>
                                    <p>좁쌀 여드름에 염증 반응이 생겨 고름과 농이 생기는 상태</p>
                                </li>
                            </ul>
                            <p data-aos="fade-up">
                                <b class="m44_point">추천!</b>
                                <i class="pink_line">압출 관리 및 염증주사 치료, 혈관레이저 치료</i>
                            </p>
                        </div>
                    </div>
                    <div class="con_wrap m50">
                        <div class="img_conwrap">
                            <img src="./img/m44_2_3.png" alt="만성 / 재발성 여드름">
                        </div>
                        <div class="txt_conwrap">
                            <h5>
                                <p data-aos="fade-up">CASE 3</p>
                                만성 / 재발성 여드름
                            </h5>
                            <ul class="checkbox_ul ">
                                <li>
                                    <p>무너진 피부 장벽으로 인해 계속된 재발성 여드름</p>
                                </li>
                            </ul>
                            <p data-aos="fade-up">
                                <b class="m44_point">추천!</b>
                                <i class="pink_line">압출 ,PDT, 골드PTT치료</i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="content innerbot">
                    <h6>RESET의 여드름 치료</h6>
                    <ul class="m32_5_ul m33">
                        <li>
                            <div class="img_wrap" data-aos="fade-up">
                                <img src="./img/m44_3_1.png" alt="1:1 맞춤 치료 프로그램">
                            </div>
                            <p>
                                <i>1:1 맞춤 치료 프로그램</i><br>
                                여드름 유형별 맞춤 치료로<br>정확하고 빠른 해답
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap" data-aos="fade-up">
                                <img src="./img/m44_3_2.png" alt="여드름 원인 치료">
                            </div>
                            <p>
                                <i>여드름 원인 치료</i><br>
                                여드름 원인 제거 및 <br>근본적 해결로 재발 방지
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap" data-aos="fade-up">
                                <img src="./img/m44_3_3.png" alt="숙련된 관리사">
                            </div>
                            <p>
                                <i>숙련된 관리사</i><br>
                                숙련된 피부관리사를 <br>통한 전문적인 관리
                            </p>
                        </li>
                        
                    </ul>
                </div>
                <div class="content innerbot">
                    <h5 class="pinkh5">
                        RESET에서는 피부별 상태에 맞게 차별화된<br>
                        1:1 맞춤 프로그램으로 여드름을 치료하고 있습니다.
                    </h5>
                    <ul class="m44_ul">
                        <li data-aos="fade-up"><p>PDT</p></li>
                        <li data-aos="fade-up"><p>골드PTT</p></li>
                        <li data-aos="fade-up"><p>압출 &<br>염증주사</p></li>
                        <li data-aos="fade-up"><p>LDM<br>여드름모드</p></li>
                        <li data-aos="fade-up"><p>아쿠아필</p></li>
                        <li data-aos="fade-up"><p>라라필</p></li>
                        <li data-aos="fade-up"><p>밀크필</p></li>
                    </ul>
                </div>
            </div>
            
            
        </main> 
</div>
<script>

    

</script>

<?php
include_once(G5_PATH.'/tail.php');