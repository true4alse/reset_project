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
                    <li class="on"><a href="menu4_5.php">모공 / 색소 프로그램</a></li>
                    <li><a href="menu4_6.php">레이저 제모</a></li>
                    <li><a href="menu4_7.php">탈모치료</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>모공 / 색소 프로그램</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="flex_wrap m1_1 m2_1">
                        <div class="img_wrap">
                            <img src="./img/m45_1.png" alt="모공 / 색소 프로그램">
                        </div>
                        <div class="txt_wrap">
                            <b data-aos="fade-up"><i>RESET</i>만의<br>모공 / 색소 프로그램</b>
                            <div class="pinkpoint" data-aos="fade-up" data-aos-delay="100"></div>
                            <p data-aos="fade-up" data-aos-delay="200">
                                어둡고 지저분한 피부를 밝고 맑게 해주는 <br>리셋만의 모공 / 색소 프로그램
                            </p>
                        </div>
                    </div>
                </div>
                <div class="innerbot">
                    <div class="con_wrap right_img m50">
                        <div class="img_conwrap">
                            <img src="./img/m45_2.png" alt="색소질환이란">
                        </div>
                        <div class="txt_conwrap">
                            <h6>색소질환이란?</h6>
                            <p>
                                다양한 원인으로 인해 피부 표피와 진피에 멜라닌 색소가 과다 생성 되어 나타나는 피부질환
                                <br><br>
                            </p>
                        </div>
                    </div>
                    <h5 class="pinkh5">[ 색소질환의 종류 ]</h5>
                    <ul class="checkbox_ul m45_1_ul">
                        <li data-aos="fade-up">
                            <p>오타모반 : 갈색 또는 흑청색 반점</p>
                        </li>
                        <li data-aos="fade-up">
                            <p>기미 : 다양한 색의 반점</p>
                        </li>
                        <li data-aos="fade-up">
                            <p>검버섯 (흑자) : 갈색의 칙칙한 반점</p>
                        </li>
                        <li data-aos="fade-up">
                            <p>점</p>
                        </li>
                        <li data-aos="fade-up">
                            <p>주근깨 : 황갈색 반점</p>
                        </li>
                        <li data-aos="fade-up">
                            <p>색소침착 : 갈색 반점</p>
                        </li>
                    </ul>
                </div>
                <div class=" innerbot">
                    <div class="con_wrap m50">
                        <div class="img_conwrap">
                            <img src="./img/m45_3.png" alt="모공질환이란?">
                        </div>
                        <div class="txt_conwrap">
                            <h6>모공질환이란?</h6>
                            <p>
                                모공질환은 피지 과다 분비, 탄력 저하 등 다양한 원인에 의해 발생합니다.
                                <br><br>
                            </p>
                        </div>
                    </div>
                    <h5 class="pinkh5">[ 모공질환의 원인 ]</h5>
                    <ul class="checkbox_ul m45_2_ul">
                        <li data-aos="fade-up">
                            <p>자외선 : 자외선 자극으로 넓어진 모공</p>
                        </li>
                        <li data-aos="fade-up">
                            <p>탄력 저하 : 피부의 탄력섬유 콜라겐의 변형으로 인한 탄력 저하</p>
                        </li>
                        <li data-aos="fade-up">
                            <p>유전적요인 :  피지선의 분비량이 많은 경우</p>
                        </li>
                        <li data-aos="fade-up">
                            <p>피부노화 : 피부노화로 인한 탄력 저하</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m21_2 page">
                <div class="content innertop ">
                    <div class="flex_wrap">
                        <div class="txt_wrap innerbot">
                            <h3>
                                <span>RESET CLINIC</span>
                                <i>
                                    <em ><b>모공/색소 프로그램 추천 대상</b></em>
                                </i>
                            </h3>
                            <ul>
                                <li>
                                    <p>얼룩덜룩해보이는 기미를 갖고 계신 분</p>
                                </li>
                                <li>
                                    <p>피부톤이 어둡고 칙칙해 보이시는 분</p>
                                </li>
                                <li>
                                    <p>자외선 노출이 잦으신 분</p>
                                </li>
                                <li>
                                    <p>넓은 모공을 개선하고 싶으신 분</p>
                                </li>
                                <li>
                                    <p>전체적 피부결 개선이 필요하신 분</p>
                                </li>
                            </ul>
                        </div>
                        <div class="img_wrap">
                            <img src="./img/m27_4.png" alt="리셋의원 모공 / 색소 프로그램 추천 대상">
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="m21_3 page">
                <div class="content innertop innerbot">
                    <h3>
                        <span>RESET CLINIC</span>
                        <i>
                            <em ><b>리셋의 시그니처 리프팅</b></em>
                        </i>
                    </h3>
                    <ul class="m21_3_ul m23_3_ul">
                        <li>
                            <div>
                                <img src="./img/m45_5_1.png" alt="울쎄라">
                                <p>울쎄라</p>
                            </div>
                            <b>
                                고강도 직접 초음파를 이용하여 피부 속만 집중적으로 개선
                            </b>
                        </li>
                        <li>
                            <div>
                                <img src="./img/m45_5_2.png" alt="써마지 FLX">
                                <p>써마지 FLX</p>
                            </div>
                            <b>고주파 열에너지를 이용한 현존하는 가장 강력한 피부 타이트닝 효과</b>
                        </li>
                        <li>
                            <div>
                                <img src="./img/m45_5_3.png" alt="인모드 리프팅">
                                <p>인모드 리프팅</p>
                            </div>
                            <b>고주파 에너지가 매끈한 피부결, 탄력, 볼륨, 타이트닝, 피부톤 개선 등 완벽 리프팅 효과</b>
                        </li>
                        <li>
                            <div>
                                <img src="./img/m45_5_4.png" alt="슈링크 리프팅">
                                <p>슈링크 리프팅</p>
                            </div>
                            <b>
                                근막층까지 레이저가 도달하여 절개 없이도 늘어진 피부를 효과적으로 당기고 주름을 개선
                            </b>
                        </li>
                        <li>
                            <div>
                                <img src="./img/m45_5_5.png" alt="LDM 물방울 리프팅">
                                <p>LDM 물방울 리프팅</p>
                            </div>
                            <b>고밀도 초음파 에너지를 이용해 피부 속 세포 활성을 유도</b>
                        </li>
                        <li>
                            <div>
                                <img src="./img/m45_5_6.png" alt="MPR 고주파">
                                <p>MPR 고주파</p>
                            </div>
                            <b>
                                강력한 토로이달 고주파에너지로 더 넓고 깊게 전달되어 피부 콜라겐 재생과 탄력 증가
                            </b>
                        </li>
                        <li>
                            <div>
                                <img src="./img/m45_5_7.png" alt="셀룰라이트 토닝">
                                <p>셀룰라이트 토닝</p>
                            </div>

                            <b>
                                지방세포와 진피층을 효과적으로 리모델링하여 단단한 피부결을 부드럽게 개선
                            </b>
                        </li>
                        <li>
                            <div>
                                <img src="./img/m41_1.png" alt="리프팅 리셋톡스">
                                <p>리프팅 리셋톡스</p>
                            </div>
                            <b>
                                보톡스를 이용한 피부층에서의 리프팅 효과
                            </b>
                        </li>
                    </ul>
                </div>
            </div> -->
        </main> 
</div>
<script>

    

</script>

<?php
include_once(G5_PATH.'/tail.php');