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
                    <li class="on"><a href="menu4_2.php">필러</a></li>
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
                        <em ><b>필러</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="flex_wrap m1_1 m2_1">
                        <div class="img_wrap">
                            <img src="./img/m42_1.png" alt="필러">
                        </div>
                        <div class="txt_wrap">
                            <b data-aos="fade-up"><i>리셋의</i><br>NATURAL 필러</b>
                            <div class="pinkpoint" data-aos="fade-up" data-aos-delay="100"></div>
                            <p data-aos="fade-up" data-aos-delay="200">
                                자연스러운 볼륨감!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page">
                <div class="content innerbot">
                    <div class="con_wrap right_img">
                        <div class="img_conwrap">
                            <img src="./img/m42_2.png" alt="RESETFILLER 리셋필러">
                        </div>
                        <div class="txt_conwrap">
                            <h6>RESETFILLER 리셋필러</h6>
                            <p>
                                정품 정량의 리셋 필러 프로그램은 함몰된 부위 또는 볼륨이 부족한 곳을 채워 자연스럽고 아름다운 페이스 라인으로 개선해드립니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="content innerbot">
                    <div class="con_wrap ">
                        <div class="img_conwrap">
                            <img src="./img/m42_3.png" alt="RESETFILLER 리셋필러 시술 부위">
                        </div>
                        <div class="txt_conwrap">
                            <h6>RESETFILLER 리셋필러 시술 부위</h6>
                            <ul class="checkbox_ul m42_ul">
                                <li data-aos="fade-up">
                                    <p>이마</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>볼</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>눈 밑 애교살</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>무턱</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>팔자주름</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>입술</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content innerbot">
                    <div class="con_wrap right_img">
                        <div class="txt_conwrap ">
                            <h6>RESETFILLER 리셋필러 추천 대상</h6>
                            <ul class="m41_ul checkbox_ul borderuli">
                                <li  data-aos="fade-up">
                                    <p>
                                        볼륨 없이 밋밋한 얼굴이 고민 되시는 분
                                    </p>
                                </li>
                                <li  data-aos="fade-up">
                                    <p>
                                        정품 정량으로 안심할 수 있는 필러 시술을 받고 싶으신 분
                                    </p>
                                </li>
                                <li  data-aos="fade-up">
                                    <p>
                                        납작하고 함몰된 이마라인이 고민 되시는 분
                                    </p>
                                </li>
                                <li  data-aos="fade-up">
                                    <p>
                                        눈 밑 꺼짐과 다크서클이 고민되시는 분
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