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
                    <li><a href="menu8_1.php">질환 클리닉</a></li>
                    <li class="on"><a href="menu8_2.php">예방접종 클리닉</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>예방접종 클리닉</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="flex_wrap m1_1 m2_1">
                        <div class="img_wrap">
                            <img src="./img/m82_1.png" alt="예방접종 클리닉">
                        </div>
                        <div class="txt_wrap">
                            <b data-aos="fade-up">리셋만의<br><i>예방접종 클리닉</i></b>
                            <div class="pinkpoint" data-aos="fade-up" data-aos-delay="100"></div>
                            <p data-aos="fade-up" data-aos-delay="200">
                                치료보다 예방이 먼저!<br>리셋의원에서는 각종 성인예방접종이 가능합니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="page m82_2">
                <div class="content innerbot innertop">
                    <div class="tit">
                        <em >건강 100세를 약속하는 성인예방접종,</em><br>
                        건강한 내일을 위해<br>권장이 아닌 필수입니다!
                    </div>
                </div>
            </div>
            <div class="page">
                <div class="content innerbot innertop">
                    <div class="con_wrap right_img">
                        <div class="img_conwrap">
                            <img src="./img/m82_3.png" alt="리셋의원의 예방접종">
                        </div>
                        <div class="txt_conwrap">
                            <h6>리셋의원의 예방접종</h6>
                            <ul class="m44_ul m82">
                                <li data-aos="fade-up" ><p>인플루엔자</p></li>
                                <li data-aos="fade-up"><p>A형 간염</p></li>
                                <li data-aos="fade-up"><p>파상풍<br>디프테리아<br>백일해</p></li>
                                <li data-aos="fade-up"><p>대상포진</p></li>
                                <li data-aos="fade-up"><p>B형 간염</p></li>
                                <li data-aos="fade-up"><p>자궁경부암</p></li>
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