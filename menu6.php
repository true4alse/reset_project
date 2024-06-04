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
                        <p class="gray" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            RESET YOUR HEALTHY LIFE
                        </p>
                        <h2 class="gray">RESET CLINIC</h2>
                    </div>
                </div>
            </div>
            <div class="m6 page">
                <div class="content innertop innerbot">
                    <h3>
                        <span>RESET CLINIC</span>
                        <i>
                            <em ><b>영양 수액</b></em>
                        </i>
                    </h3>
                    <section id="m6_1" >
                        <div class="img_wrap">
                            <img src="./img/m6_1.png" alt="다이어트수액">
                        </div>
                        <div class="txt_wrap">
                            <h6>다이어트 수액</h6>
                            <p>혈관을 확장시켜 근육으로 가능 혈류량을 높이고 성장 호르본 분비를 촉진합니다.</p>
                            <div class="tit"><p>[ 다이어트  수액의 효과 ]</p></div>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up"><p>지방분해촉진</p></li>
                                <li data-aos="fade-up" data-aos-delay="100"><p>체지방 감소</p></li>
                                <li data-aos="fade-up" data-aos-delay="200"><p>요요현상 억제</p></li>
                            </ul>
                        </div>
                    </section>
                    <section id="m6_2" >
                        <div class="img_wrap">
                            <img src="./img/m6_2.png" alt="통증피로 수액">
                        </div>
                        <div class="txt_wrap">
                            <h6>통증피로 수액</h6>
                            <p>영양보조제를 대사과정 없이 바로 혈관으로 투입해 흡수시켜 빠른 체력 회복 효과를 볼 수 있습니다.</p>
                            <div class="tit"><p>[ 통증피로 수액의 효과 ]</p></div>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up"><p>근육통 완화</p></li>
                                <li data-aos="fade-up" data-aos-delay="100"><p>신경통 완화</p></li>
                                <li data-aos="fade-up" data-aos-delay="200"><p>면역력 증대</p></li>
                            </ul>
                        </div>
                    </section>
                    <section id="m6_3" >
                        <div class="img_wrap">
                            <img src="./img/m6_3.png" alt="감기몸살 수액">
                        </div>
                        <div class="txt_wrap">
                            <h6>감기몸살 수액</h6>
                            <p>감기몸살 수액은 고용량 비타민을 투여해 빠른 컨디션 회복을 목표로 합니다.</p>
                            <div class="tit"><p>[ 감기몸살 수액의 효과 ]</p></div>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up"><p>감기몸살 진정</p></li>
                                <li data-aos="fade-up" data-aos-delay="100"><p>해열 진통</p></li>
                                <li data-aos="fade-up" data-aos-delay="200"><p>비타민C 충전</p></li>
                            </ul>
                        </div>
                    </section>
                    <section id="m6_4" >
                        <div class="img_wrap">
                            <img src="./img/m6_4.png" alt="장염 수액">
                        </div>
                        <div class="txt_wrap">
                            <h6>장염 수액</h6>
                            <p>설사로 인한 저 영양상태에 아미노산을 공급해 장 운동 장애를 개선합니다.</p>
                            <div class="tit"><p>[ 장염 수액의 효과 ]</p></div>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up"><p>복부통증해소</p></li>
                                <li data-aos="fade-up" data-aos-delay="100"><p>복부팽만해소</p></li>
                                <li data-aos="fade-up" data-aos-delay="200"><p>지사 효능</p></li>
                            </ul>
                        </div>
                    </section>
                    <section id="m6_5" >
                        <div class="img_wrap">
                            <img src="./img/m6_5.png" alt="간기능 수액">
                        </div>
                        <div class="txt_wrap">
                            <h6>간기능 수액</h6>
                            <p>간세포의 자멸을 억제하고, 해독 기능을 촉진하여 간 기능의 정상화를 돕습니다.</p>
                            <div class="tit"><p>[ 간기능 수액의 효과 ]</p></div>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up"><p>간기능 회복</p></li>
                                <li data-aos="fade-up" data-aos-delay="100"><p>피로 회복</p></li>
                                <li data-aos="fade-up" data-aos-delay="200"><p>숙취 해소</p></li>
                            </ul>
                        </div>
                    </section>
                    
                    <section id="m6_6" >
                        <div class="img_wrap">
                            <img src="./img/m6_6.png" alt="갱년기  수액">
                        </div>
                        <div class="txt_wrap">
                            <h6>갱년기 수액</h6>
                            <p>활성산소를 제거하고 세포 재생작용을 일으켜 갱년기 증상 회복 및 피부 탄력 재생에
                                도움을 줍니다.</p>
                            <div class="tit"><p>[ 갱년기 수액의 효과 ]</p></div>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up" ><p>안면 홍조 완화</p></li>
                                <li data-aos="fade-up"  data-aos-delay="100"><p>우울증 완화</p></li>
                                <li data-aos="fade-up"  data-aos-delay="200"><p>불안감 해소</p></li>
                            </ul>
                        </div>
                    </section>
                    <section id="m6_7" >
                        <div class="img_wrap">
                            <img src="./img/m6_7.png" alt="어지럼증 수액">
                        </div>
                        <div class="txt_wrap">
                            <h6>어지럼증 수액</h6>
                            <p>혈액순환을 개선하여 어지럼증 및 구역감을 완화시킵니다. </p>
                            <div class="tit"><p>[ 어지럼증 수액의 효과 ]</p></div>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up"><p>혈액순환 개선</p></li>
                                <li data-aos="fade-up" data-aos-delay="100"><p>전정신경 기능 회복</p></li>
                                <li data-aos="fade-up" data-aos-delay="200"><p>자율신경 안정화</p></li>
                            </ul>
                        </div>
                    </section>
                    <section id="m6_8" >
                        <div class="img_wrap">
                            <img src="./img/m6_8.png" alt="두드러기 / 알레르기  수액">
                        </div>
                        <div class="txt_wrap">
                            <h6>두드러기 / 알레르기  수액</h6>
                            <p>알레르기 반응 시 체내에서 생성되는 히스타민 작용을 중화하고 내성을 기르는 수액입니다.</p>
                            <div class="tit"><p>[ 두드러기 / 알레르기  수액의 효과 ]</p></div>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up"><p>급성 피부질환 진정</p></li>
                                <li data-aos="fade-up" data-aos-delay="100"><p>만성 피부질환 개선</p></li>
                                <li data-aos="fade-up" data-aos-delay="200"><p>면역력 강화</p></li>
                            </ul>
                        </div>
                    </section>
                    <section id="m6_9" >
                        <div class="img_wrap">
                            <img src="./img/m6_9.png" alt="건망증 / 총명  수액">
                        </div>
                        <div class="txt_wrap">
                            <h6>건망증 / 총명 수액</h6>
                            <p>일명 수험생 주사로 알려져 있으며 혈액 순환을 개선하고 스트레스 완화 효과가 있어 집중력이 강화됩니다.</p>
                            <div class="tit"><p>[ 건망증 / 총명 수액의 효과 ]</p></div>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up"><p>정서불안증 완화</p></li>
                                <li data-aos="fade-up" data-aos-delay="100"><p>자극 과민성 완화</p></li>
                                <li data-aos="fade-up" data-aos-delay="200"><p>주위 무관심 개선</p></li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </main>
</div>
<script>

    

</script>

<?php
include_once(G5_PATH.'/tail.php');