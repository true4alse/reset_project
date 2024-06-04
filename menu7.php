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
            <div class="m6 m7 page">
                <div class="content innertop innerbot">
                    <h3>
                        <span>RESET CLINIC</span>
                        <i>
                            <em ><b>기능 의학</b></em>
                        </i>
                    </h3>
                    <section id="m7_1" >
                        <div class="img_wrap">
                            <img src="./img/m7_1.png" alt="항산화력 / 산화스트레스 검사">
                        </div>
                        <div class="txt_wrap">
                            <h6>항산화력 / 산화스트레스 검사</h6>
                            <p>활성산소는 각종 세포의 대사 과정에서 발생하는 부식물이며 과잉 생성 시 세포와  단백질이 손상됩니다.</p>
                            <div class="tit"><p>[ 측정 항목 ]</p></div>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up"><p>활성산소로 인한 세포 손상도</p></li>
                                <li data-aos="fade-up" data-aos-delay="100"><p>과잉 활성산소 제거 능력 (항산화력)</p></li>
                            </ul>
                        </div>
                    </section>
                    <section id="m7_2" >
                        <div class="img_wrap">
                            <img src="./img/m7_2.png" alt="NK세포 활성도 & 면역력 검사">
                        </div>
                        <div class="txt_wrap">
                            <h6>NK세포 활성도 & 면역력 검사</h6>
                            <p>NK세포는 면역 세포 중 유일하게 직접 비정상 세포를 찾아내어 파괴하는 역할을 하는 중요한 면역 세포입니다.</p>
                            <div class="tit"><p>[ 측정 항목 ]</p></div>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up"><p>혈액 검사</p></li>
                                <li data-aos="fade-up" data-aos-delay="100"><p>NK 세포 활성도</p></li>
                            </ul>
                        </div>
                    </section>
                    <section id="m7_3" >
                        <div class="img_wrap">
                            <img src="./img/m7_3.png" alt="장내 미생물 검사">
                        </div>
                        <div class="txt_wrap">
                            <h6>장내 미생물 검사</h6>
                            <p>장내 유익균-유해균의 균형도 및 장내 미생물의 다양성을 확인하여 염증 위험도를 평가합니다.</p>
                            <div class="tit"><p>[ 측정 항목 ]</p></div>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up"><p>소량의 분변 검사</p></li>
                                <li data-aos="fade-up" data-aos-delay="100"><p>유익균, 유해균 검사</p></li>
                            </ul>
                        </div>
                    </section>
                    <section id="m7_4" >
                        <div class="img_wrap">
                            <img src="./img/m7_4.png" alt="호르몬 검사">
                        </div>
                        <div class="txt_wrap">
                            <h6>호르몬 검사</h6>
                            <p>다양한 호르몬의 수치를 파악할 수 있는 기초적인 검사입니다.</p>
                            <div class="tit"><p>[ 측정 항목 ]</p></div>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up"><p>금식 후 채취한 혈액</p></li>
                                <li data-aos="fade-up" data-aos-delay="100"><p>호르몬 분비 상태</p></li>
                            </ul>
                        </div>
                    </section>
                    <section id="m7_5" >
                        <div class="img_wrap">
                            <img src="./img/m7_5.png" alt="소변 유기산 검사">
                        </div>
                        <div class="txt_wrap">
                            <h6>소변 유기산 검사</h6>
                            <p>대사의 균형 상태와 장 내의 세균 증식 상태를 평가할 수 있는 유일한 검사입니다.</p>
                            <div class="tit"><p>[ 측정 항목 ]</p></div>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up"><p>미세영양결핍 상태</p></li>
                                <li data-aos="fade-up" data-aos-delay="100"><p>독성물질 상태</p></li>
                            </ul>
                        </div>
                    </section>
                    
                    <section id="m7_6" >
                        <div class="img_wrap">
                            <img src="./img/m7_6.png" alt="음식 항원 알레르기 검사 (IgG)">
                        </div>
                        <div class="txt_wrap">
                            <h6>음식 항원 알레르기 검사 (IgG)</h6>
                            <p>알레르기를 일으킬 수 있는 IgG 항체를 측정하며, 소량의 혈액만으로도 알레르기를 일으키는 원인 파악이 가능합니다.</p>
                            <div class="tit"><p>[ 측정 항목 ]</p></div>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up"><p>소량의 혈액</p></li>
                                <li data-aos="fade-up" data-aos-delay="100"><p>알레르기 원인 음식</p></li>
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