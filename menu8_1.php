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
            <div class="tab_content page">
                <ul class="sub_tab tab6 innertop innerbot">
                    <li class="on"><a href="menu8_1.php">질환 클리닉</a></li>
                    <li><a href="menu8_2.php">예방접종 클리닉</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>질환 클리닉</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="flex_wrap m1_1 m2_1">
                        <div class="img_wrap">
                            <img src="./img/m81_1.png" alt="질환  클리닉">
                        </div>
                        <div class="txt_wrap">
                            <b data-aos="fade-up">리셋만의<br><i>질환 클리닉</i></b>
                            <div class="pinkpoint" data-aos="fade-up" data-aos-delay="100"></div>
                            <p data-aos="fade-up" data-aos-delay="200">
                                현대인들의 가장 흔한 질환들을<br>종합적으로 진단 및 치료합니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="page">
                <div class="content innerbot">
                    <h6>현대인들의 고질병, 질환 종류</h6>
                    <ul class="m81_ul">
                        <li>
                            <div class="img_wrap">
                                <img src="./img/m81_2_1.png" alt="고혈압">
                            </div>
                            <div class="tit" data-aos="fade-up">고혈압</div>
                            <p>
                                잦은 두통, 어지럼증과 함께 시력 저하, 코피, 시력 저하 발생
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap">
                                <img src="./img/m81_2_2.png" alt="당뇨">
                            </div>
                            <div class="tit" data-aos="fade-up">당뇨</div>
                            <p>
                                소변을 자주 보고 자연스럽게 갈증으로 이어지며, 지속적인 피로감 동반
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap">
                                <img src="./img/m81_2_3.png" alt="이상지질혈증">
                            </div>
                            <div class="tit" data-aos="fade-up">이상지질혈증</div>
                            <p>
                                대개 무증상, 방치 시 동맥경화 및 각종 혈관질환으로 연결
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap">
                                <img src="./img/m81_2_4.png" alt="대사증후군">
                            </div>
                            <div class="tit" data-aos="fade-up">대사증후군</div>
                            <p>
                                복부비만, 고혈압, 고혈당 등으로 인해 발생하는 대표적인 성인병
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap">
                                <img src="./img/m81_2_5.png" alt="호흡기 질환">
                            </div>
                            <div class="tit" data-aos="fade-up">호흡기 질환</div>
                            <p>
                                비염, 감기 등 흔하게 찾아오는 질환들이며 기침 가래 / 콧물 증상
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap">
                                <img src="./img/m81_2_6.png" alt="소화기계질환">
                            </div>
                            <div class="tit" data-aos="fade-up">소화기계질환</div>
                            <p>
                                식도염, 위염, 장염 등과 같은 질환. 구토, 복통과 설사를 동반
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap">
                                <img src="./img/m81_2_7.png" alt="피부질환">
                            </div>
                            <div class="tit" data-aos="fade-up">피부질환</div>
                            <p>
                                아토피, 알레르기 등의 피부질환으로 가려움증, 진물 동반
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap">
                                <img src="./img/m81_2_8.png" alt="외상 및 수술 후 관리">
                            </div>
                            <div class="tit" data-aos="fade-up">외상 및 수술 후 관리</div>
                            <p>
                                단순 봉합, 소독, 실밥 제거 등의 관리 또는 처치
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="content innerbot">
                    <h6>경증 질환 진료 및 치료</h6>
                    <ul class="m32_5_ul m33">
                        <li>
                            <div class="img_wrap" data-aos="fade-up">
                                <img src="./img/m81_3_1.png" alt="개인 상태 및 원인이 되는 음식 제거식 교육">
                            </div>
                            <p>
                                개인 상태 및 원인이 되는<br>음식 제거식 교육
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap" data-aos="fade-up">
                                <img src="./img/m81_3_2.png" alt="맞춤 영양소 처방">
                            </div>
                            <p>
                                맞춤 영양소 처방
                            </p>
                        </li>
                        <li>
                            <div class="img_wrap" data-aos="fade-up">
                                <img src="./img/m81_3_3.png" alt="수액 치료">
                            </div>
                            <p>
                                수액 치료
                            </p>
                        </li>
                        
                    </ul>
                </div>
            </div>
            
        </main>
</div>
<script>

    

</script>

<?php
include_once(G5_PATH.'/tail.php');