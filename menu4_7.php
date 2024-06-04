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
                    <li><a href="menu4_6.php">레이저 제모</a></li>
                    <li class="on"><a href="menu4_7.php">탈모치료</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>탈모치료</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="flex_wrap m1_1 m2_1">
                        <div class="img_wrap">
                            <img src="./img/m47_1.png" alt="탈모치료">
                        </div>
                        <div class="txt_wrap">
                            <b data-aos="fade-up"><i>RESET</i><br>탈모치료</b>
                            <div class="pinkpoint" data-aos="fade-up" data-aos-delay="100"></div>
                            <p data-aos="fade-up" data-aos-delay="200">
                                깊이가 다른 치료<br>차원이 다른 효과
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="innerbot">
                    <div class="con_wrap right_img">
                        <div class="img_conwrap">
                            <img src="./img/m47_2.png" alt="탈모란?">
                        </div>
                        <div class="txt_conwrap">
                            <h6>탈모란?</h6>
                            <p>
                                건강한 사람에게서 빠지는 머리카락의 수는 하루 약 50~100개 정도 입니다. 하루에 100개 이상의 머리카락이 빠지는 경우 탈모증을 의심할 수 있습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="innerbot">
                    <div class="con_wrap ">
                        <div class="img_conwrap">
                            <img src="./img/m47_3.png" alt="탈모 원인">
                        </div>
                        <div class="txt_conwrap">
                            <h6>탈모 원인</h6>
                            <ul class="m42_ul borderuli">
                                <li data-aos="fade-up"><p>유전적 원인</p></li>
                                <li data-aos="fade-up"><p>스트레스</p></li>
                                <li data-aos="fade-up"><p>임신 및 출산</p></li>
                                <li data-aos="fade-up"><p>다이어트로 인한 영양부족</p></li>
                                <li data-aos="fade-up"><p>빈혈 및 혈액순환 장애</p></li>
                                <li data-aos="fade-up"><p>약물 오남용</p></li>
                                <li data-aos="fade-up"><p>잦은 펌과 염색</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page">
                <div class="content ">
                    <h6>유형 별 탈모</h6>
                </div>
                <div class="content innerbot">
                    <div class="con_wrap m50">
                        <div class="img_conwrap">
                            <img src="./img/m47_4_1.png" alt="남성형 탈모">
                        </div>
                        <div class="txt_conwrap">
                            <h5>남성형 탈모</h5>
                            <ul class="checkbox_ul ">
                                <li data-aos="fade-up"><p>M자형</p></li>
                                <li data-aos="fade-up"><p>헤어라인 전체가 위로 올라가는 유형</p></li>
                                <li data-aos="fade-up"><p>정수리 탈모</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="con_wrap m50">
                        <div class="img_conwrap">
                            <img src="./img/m47_4_2.png" alt="여성형 탈모">
                        </div>
                        <div class="txt_conwrap">
                            <h5>여성형  탈모</h5>
                            <ul class="checkbox_ul ">
                                <li data-aos="fade-up"><p>정수리형 탈모</p></li>
                                <li data-aos="fade-up"><p>20대~ 40대 이후 가장 많이 발병</p></li>
                                <li data-aos="fade-up"><p>폐경 이후 여성호르몬의 감소로 발생</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="con_wrap m50">
                        <div class="img_conwrap">
                            <img src="./img/m47_4_3.png" alt="휴지기 탈모증">
                        </div>
                        <div class="txt_conwrap">
                            <h5>휴지기 탈모증</h5>
                            <ul class="checkbox_ul ">
                                <li data-aos="fade-up"><p>정상인의 25% 이상 해당</p></li>
                                <li data-aos="fade-up"><p>한 번에 많은 양이 빠지는 증상</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="con_wrap m50">
                        <div class="img_conwrap">
                            <img src="./img/m47_4_4.png" alt="원형  탈모증">
                        </div>
                        <div class="txt_conwrap">
                            <h5>원형  탈모증</h5>
                            <ul class="checkbox_ul ">
                                <li data-aos="fade-up"><p>원형 또는 타원형으로 머리가 빠짐</p></li>
                                <li data-aos="fade-up"><p>남녀 누구나 발생 가능하며, 빠진 자리에 탈모반이 형성됨</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="con_wrap m50">
                        <div class="img_conwrap">
                            <img src="./img/m47_4_5.png" alt="그 외  탈모증">
                        </div>
                        <div class="txt_conwrap">
                            <h5>그 외 탈모증</h5>
                            <ul class="checkbox_ul m47_ul">
                                <li data-aos="fade-up"><p>
                                    <em>내분비 이상에 의한 탈모증<br>
                                        <i> 
                                            내분비는 털의 주기에 영향을 주는데 내분비 이상은 모주기를 방해하고 휴지기간을 연장시킴
                                        </i>
                                    </em>
                                </p></li>
                                <li data-aos="fade-up"><p>
                                    <em>영양장애, 대사 장애의 의한 탈모증
                                        <br>
                                        <i> 
                                            지나친 다이어트로 인해 모근 세포가 위축되고 모주기가 짧아져 탈모현상이 발생
                                        </i>
                                    </em>
                                </p></li>
                                <li data-aos="fade-up"><p>
                                    <em>반흔성 탈모증
                                        <br>
                                        <i> 
                                            흉터에 의한 반흔성 탈모증은 모발의 뿌리 자체가 파괴된 경우 발생
                                        </i>
                                    </em>
                                </p></li>
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="content innerbot">
                    <div class="con_wrap right_img">
                        <div class="img_conwrap">
                            <img src="./img/m47_5.png" alt="리셋의원의 탈모 치료 장점">
                        </div>
                        <div class="txt_conwrap">
                            <h6>리셋의원의 탈모 치료 장점</h6>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up"><p>약물치료를 시행하여 증상악화 예방 및 관리 효과</p></li>
                                <li data-aos="fade-up"><p>탈모약 복용이 불가능한 경우 그에 맞는 1:1 맞춤형 치료 진행</p></li>
                                <li data-aos="fade-up"><p>리셋의원만의 탈모치료 병행 시 큰 시너지 효과 체감 가능</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content innerbot">
                    <div class="con_wrap ">
                        <div class="img_conwrap">
                            <img src="./img/m47_6.png" alt="리셋의원의 탈모 치료 추천 대상">
                        </div>
                        <div class="txt_conwrap">
                            <h6>리셋의원의 탈모 치료 추천 대상</h6>
                            <ul class="checkbox_ul">
                                <li data-aos="fade-up"><p>모발이 점점 가늘어지고 힘이 없어지는 분</p></li>
                                <li data-aos="fade-up"><p>두피가 가렵거나 따갑게 느껴져서 머리를 자주 긁으시는 분</p></li>
                                <li data-aos="fade-up"><p>체계적인 탈모치료로 효과를 원하시는 분</p></li>
                                <li data-aos="fade-up"><p>꾸준한 관리로 모발건강을 지키고싶으신 분</p></li>
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