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
                    <li class="on"><a href="menu4_3.php">스킨부스터 / 리쥬비네이션</a></li>
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
                        <em ><b>스킨부스터 / 리쥬비네이션</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="flex_wrap m1_1 m2_1">
                        <div class="img_wrap">
                            <img src="./img/m43_1.png" alt="스킨부스터 / 리쥬비네이션">
                        </div>
                        <div class="txt_wrap">
                            <b data-aos="fade-up"><i>RESET</i><br>스킨부스터 / 리쥬비네이션</b>
                            <div class="pinkpoint" data-aos="fade-up" data-aos-delay="100"></div>
                            <p data-aos="fade-up" data-aos-delay="200">
                                피부 속 깊숙히 차오르는 촉촉한 피부<br>리셋 스킨부스터로 콜라겐 채우자!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m21_4 m43_2 page">
                <div class="content  ">
                    <div class="flex_wrap">
                        <div class="txt_wrap innertop innerbot">
                            <h3>
                                <span data-aos="fade-up">RESET CLINIC</span>
                                <i data-aos="fade-up">
                                    <em class="m43_21"><b>왜<br>
                                        리셋이어야 하는가?!</b></em>
                                </i>
                            </h3>
                            <p class="m43_2tit" data-aos="fade-up">1:1 맞춤 피부 컨설팅 진단에 따라<br>
                                내 타입에 맞춰 다양한 주사 시술 선택 가능!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page">
                <div class="content innertop">
                    <h6>RESETFILLER 스킨부스터 종류</h6>
                </div>
                <div class="content innerbot">
                    <div class="con_wrap m50">
                        <div class="img_conwrap">
                            <img src="./img/m43_3_1.png" alt="리쥬란 힐러">
                        </div>
                        <div class="txt_conwrap">
                            <h5>
                                <p>피부 속건조가 고민이라면?</p>
                                리쥬란 힐러
                            </h5>
                            <ul class="checkbox_ul ">
                                <li data-aos="fade-up">
                                    <p>인체 적합성이 높은 연어 DNA + 히알루론산 결합</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>진피층에 주입을 통한 피부 재생 및 탄력 효과</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="con_wrap m50">
                        <div class="img_conwrap">
                            <img src="./img/m43_3_2.png" alt="엑소좀">
                        </div>
                        <div class="txt_conwrap">
                            <h5>
                                <p>근본적인 원인을 해결하다!</p>
                                엑소좀
                            </h5>
                            <ul class="checkbox_ul ">
                                <li data-aos="fade-up">
                                    <p>줄기세포 배양액에서 0.5%에 해당되는 고순도 엑소좀 분리</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>줄기 세포 능력을 통해 손상된 피부의 빠른 케어</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>피부 본연의 에너지 활성화로 근본적 문제 해결재생 및 탄력 효과</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="con_wrap m50">
                        <div class="img_conwrap">
                            <img src="./img/m43_3_3.png" alt="샤* 필로르가 135주사">
                        </div>
                        <div class="txt_conwrap">
                            <h5>
                                <p>프랑스 명품, 안티에이징 효과!</p>
                                샤* 필로르가 135주사
                            </h5>
                            <ul class="checkbox_ul ">
                                <li data-aos="fade-up">
                                    <p>비타민, 아미노산, 미네랄, 조효소, 고분자HA 등 53가지 복합성분 사용</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>섬유 아세포 활성을 통해 피부 노화 및 컨디션 개선 및 활력 up</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>유수분 밸런스, 피부톤, 피부결 개선 등의 안티에이징 효과</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="con_wrap m50">
                        <div class="img_conwrap">
                            <img src="./img/m43_3_4.png" alt="울트라콜">
                        </div>
                        <div class="txt_conwrap">
                            <h5>
                                <p>자가 콜라겐 생성!</p>
                                울트라콜
                            </h5>
                            <ul class="checkbox_ul ">
                                <li data-aos="fade-up">
                                    <p>실리프팅 사용 성분 PDO 함유한 자가 콜라겐 부스터</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>진피층에서부터 서서히 콜라겐 생성 촉진</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>피부 탄력 및 볼륨 개선, 모공, 화이트닝, 피부톤 개선 효과</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="con_wrap m50">
                        <div class="img_conwrap">
                            <img src="./img/m43_3_5.png" alt="쥬베룩, 쥬베룩 볼륨">
                        </div>
                        <div class="txt_conwrap">
                            <h5>
                                <p>미국 FDA 승인</p>
                                쥬베룩, 쥬베룩 볼륨
                            </h5>
                            <ul class="checkbox_ul ">
                                <li data-aos="fade-up">
                                    <p>고분자 PLA+히알루론산 성분을 결합한 하이브리드 스킨부스터</p>
                                </li>
                                <li data-aos="fade-up">
                                    <p>잔주름개선, 모공축소, 탄력증가 </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content innerbot">
                    <div class="con_wrap right_img">
                        <div class="img_conwrap ">
                            <img src="./img/m43_4.png" alt="리셋 스킨부스터 = 맞춤 피부 개선">
                        </div>
                        <div class="txt_conwrap ">
                            <h6>리셋 스킨부스터 = 맞춤 피부 개선</h6>
                            <ul class="m42_ul borderuli">
                                <li  data-aos="fade-up"><p>피부톤 개선</p></li>
                                <li  data-aos="fade-up"><p>모공 축소</p></li>
                                <li  data-aos="fade-up"><p>피부 속건조 개선</p></li>
                                <li  data-aos="fade-up"><p>흉터치료</p></li>
                                <li  data-aos="fade-up"><p>탄력 증가</p></li>
                                <li  data-aos="fade-up"><p>피부재생</p></li>
                                <li  data-aos="fade-up"><p>잔주름 개선</p></li>
                                <li  data-aos="fade-up"><p>안티에이징</p></li>
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