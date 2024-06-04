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
                        <p class="mint" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            RESET YOUR BODY
                        </p>
                        <h2 class="mint">RESET CLINIC</h2>
                    </div>
                </div>
            </div>
            <div class="tab_content page">
                <ul class="sub_tab tab6 innertop innerbot">
                    <li class="on"><a href="menu3_1.php">SPL</a></li>
                    <li><a href="menu3_2.php">지방분해주사</a></li>
                    <li><a href="menu3_3.php">트리플바디</a></li>
                    <li><a href="menu3_4.php">토르고주파</a></li>
                    <li><a href="menu3_5.php">오토힐링</a></li>
                    <li><a href="menu3_6.php">체외충격파</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>SPL</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="flex_wrap m1_1 m2_1">
                        <div class="img_wrap">
                            <img src="./img/m31_1.png" alt="SPL">
                        </div>
                        <div class="txt_wrap">
                            <b data-aos="fade-up">리셋 <i>SPL주사</i><br><i>지방</i>과 <i>셀룰라이트</i>를 동시에 해결!</b>
                            <div class="pinkpoint" data-aos="fade-up" data-aos-delay="100"></div>
                            <p data-aos="fade-up" data-aos-delay="200">
                                <i>팔</i> - 매끄러운 11자 팔뚝<br>
                                <i>복부</i> - 가장 많은 지방을 가진 복부를 날씬하게!<br>
                                <i>옆구리</i> - 아름답고 여성스러운 허리라인
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page">
                <div class="content innerbot">
                    <div class="con_wrap right_img">
                        <div class="img_conwrap">
                            <img src="./img/m31_2.png" alt="체중감량을 방해하는 셀룰라이트">
                        </div>
                        <div class="txt_conwrap">
                            <h6>체중감량을 방해하는 셀룰라이트</h6>
                            <p>
                                셀룰라이트는 지방세포에 생긴 염증으로, 지방과 단단하게 엉겨 붙어 있어 매끈한 바디 라인을 방해하는 요인이 될 뿐만 아니라 체중 감량 효과를 저해하는 요인이 됩니다. <br>또한 지방분해 용액만으로 분해되지 않는 강력한 병변이므로 강한 에너지를 통해 분해하는 과정이 필요합니다. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="content innerbot">
                    <div class="con_wrap ">
                        <div class="txt_conwrap">
                            <h6>SPL주사 원리</h6>
                            <p>
                                리셋의원의 SPL주사는 기존의 지방분해 주사와는 달리 체외충격파로 저 셀룰라이트 조직을 풀어헤치고 그 사이에 지방분해 용액을 주입시키기 때문에 지방은 물론, 셀룰라이트 부위의 지방까지 효과적으로 줄일 수 있습니다.
                            </p>
                            <ul class="m31_3_ul">
                                <li data-aos="fade-up">
                                    <div class="img_wrap">
                                        <img src="./img/m31_3_1.png" alt="체외충격파 실행">
                                    </div>
                                        <p>체외충격파 실행</p>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <div class="img_wrap">
                                        <img src="./img/m31_3_2.png" alt="셀룰라이트 파괴 및 분해">
                                    </div>
                                    <p>셀룰라이트 파괴 및 분해</p>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="200">
                                    <div class="img_wrap">
                                        <img src="./img/m31_3_3.png" alt="지방분해주사 주입">
                                    </div>
                                    <p>지방분해주사 주입</p>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="300">
                                    <div class="img_wrap">
                                        <img src="./img/m31_3_4.png" alt="셀룰라이트 및 지방세포 감소">
                                    </div>
                                    <p>셀룰라이트 및 지방세포 감소</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content innerbot">
                    <h6>SPL주사 특징</h6>
                    <p>
                        리셋 SPL 주사는 원하는 부위의 지방을 감소시키는 것은 물론, 체외충격파로 튼살 및 흉터 개선, 부기 제거 및 염증 완화, 피부 탄력 증진 등의 효과를 볼 수 있습니다.
                    </p>
                    <div class="c31_box">
                        <div class="circle_wrap">
                            <div class="circle">원하는 부위<br>지방 감소</div>
                            <div class="circle c2">셀룰라이트<br>제거</div>
                        </div>
                        <ul>
                            <li data-aos="fade-up">당일 시술</li>
                            <li data-aos="fade-up">비교적 적은 통증</li>
                            <li data-aos="fade-up">빠른 회복</li>
                            <li data-aos="fade-up">튼살 및 흉터 개선</li>
                            <li data-aos="fade-up">부기 제거 및 염증 완화</li>
                            <li data-aos="fade-up">피부 탄력 증진</li>
                        </ul>
                    </div>
                </div>
                <div class="content innerbot">
                    <h6>일반 지방분해주사 vs 리셋의원 SPL주사</h6>
                    <table class="m31table">
                        <colgroup>
                            <col width="43%">
                            <col width="14%">
                            <col width="43%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="b1">일방 지방분해 주사</th>
                                <th class="b2">VS</th>
                                <th class="p1">리셋의원 SPL 주사</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="b3">거의 없음</td>
                                <td class="b4">통증</td>
                                <td class="p2">거의 없음</td>
                            </tr>
                            <tr>
                                <td class="b5">시술 후 바로 일상생활 가능</td>
                                <td class="b6">회복 기간</td>
                                <td class="p3">시술 후 바로 일상생활 가능</td>
                            </tr>
                            <tr>
                                <td class="b3">시술부위가 울퉁불퉁 해질 수 있음</td>
                                <td class="b4">피부 표면 변화</td>
                                <td class="p2">셀룰라이트 제거가 가능해
                                    울퉁불퉁해지는 현상 방지</td>
                            </tr>
                            <tr class="left_tr">
                                <td class="b5">1. 용액 주입<br>
                                    2. 삼투압의 원리로 지방세포 분해<br>
                                    3. 분해된 지방세포 배출
                                    <!-- <i><br><br>주성분은 임의로 묽힌 생리식염수, 리도카인, 에피네프린,
                                        중탄산나트륨 등이며, 병원마다 성분이 상이할 수 있음.</i> -->
                                </td>
                                <td class="b6">성분 및
                                    시술 원리</td>
                                <td class="p3">1. 체외충격파로 셀룰라이트 분해<br>
                                    2. 용액 주입<br>
                                    3. 삼투압의 원리로 지방세포 분해<br>
                                    4. 분해된 지방세포 배출</td>
                            </tr>
                            <tr class="bb">
                                <td class="b3">지방세포 분해 및 배출이 가능하지만
                                    셀룰라이트 조직을 분해하지 못해
                                    해당 부위 지방세포 잔존</td>
                                <td class="b4">시술 결과</td>
                                <td class="p2">셀룰라이트 분해 후 용액을 주입하여
                                    셀룰라이트를 포함한 더 많은 양의
                                    지방 분해 및 배출 가능</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="content innerbot">
                    <h6>지방흡입술 vs 리셋의원 SPL주사</h6>
                    <table class="m31table">
                        <colgroup>
                            <col width="43%">
                            <col width="14%">
                            <col width="43%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="b1">지방흡입술</th>
                                <th class="b2">VS</th>
                                <th class="p1">리셋의원 SPL 주사</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="b3">약 1시간 30분 ~ 2시간</td>
                                <td class="b4">시술 시간</td>
                                <td class="p2">약 30분 내외</td>
                            </tr>
                            <tr>
                                <td class="b5">약 1주 이상의 회복 기간이 필요하며
                                    압박의류를 착용하는 경우가 많음</td>
                                <td class="b6">회복 기간</td>
                                <td class="p3">시술 후 바로 일상생활 가능</td>
                            </tr>
                            <tr>
                                <td class="b3">레이저시술을 별도로 시행하지 않으면
                                    탄력이 떨어질 수 있음</td>
                                <td class="b4">피부 표면 변화</td>
                                <td class="p2">셀룰라이트 제거가 가능해
                                    울퉁불퉁해지는 현상 방지</td>
                            </tr>
                            <tr class="left_tr">
                                <td class="b5">1. 수술 부위 절개 및 박리<br>
                                    2. 관을 통해 지방용해물질 등 주입<br>
                                    3. 기계를 통해 지방세포 흡입<br>
                                    4. 절개창 봉합
                                </td>
                                <td class="b6">성분 및
                                    시술 원리</td>
                                <td class="p3">1. 체외충격파로 셀룰라이트 분해<br>
                                    2. 용액 주입<br>
                                    3. 삼투압의 원리로 지방세포 분해<br>
                                    4. 분해된 지방세포 배출</td>
                            </tr>
                            <tr class="bb">
                                <td class="b3">수술 부위의 지방세포수 감소</td>
                                <td class="b4">시술 결과</td>
                                <td class="p2">셀룰라이트를 포함한 많은 양의 지방 분해</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="m21_4 m31_4 page">
                <div class="content  ">
                    <div class="flex_wrap">
                        <div class="txt_wrap innertop innerbot">
                            <h3>
                                <span>RESET CLINIC</span>
                                <i>
                                    <em ><b>리셋의원 SPL주사 시술 부위</b></em>
                                </i>
                            </h3>
                            <ul>
                                <li data-aos="fade-up">팔뚝</li>
                                <li data-aos="fade-up">등살</li>
                                <li data-aos="fade-up">옆구리살</li>
                                <li data-aos="fade-up">복부</li>
                                <li data-aos="fade-up">러브핸들</li>
                                <li data-aos="fade-up">엉덩이</li>
                                <li data-aos="fade-up">허벅지</li>
                                <li data-aos="fade-up">종아리</li>
                            </ul>
                        </div>
                        <div class="img_wrap">
                            <img src="./img/m21_4.png" alt="체형과 체질을 파악하여
                            적합한 솔루션 제시">
                        </div>
                    </div>
                </div>
            </div>
            <div class=" page">
                <div class="content innerbot innertop">
                    <h6>리셋의원 SPL 주사 QnA</h6>
                    <div class="qna_box">
                        <ul class="qna_wrap">
                            <li>
                                <h5><i data-aos="fade-up">Q</i><p>운동을 반드시 해야하나요?</p></h5>
                                <p><i data-aos="fade-up" data-aos-delay="100">A</i>
                                    빠른 지방 배출을 목적으로 운동을 한다면 걷기와 같은 가벼운 유산소 운동이 도움이 될 수 있습니다. 또한 셀룰라이트도 효과적으로 제거해주기에 필라테스, 요가처럼 예쁜 라인을 만들어주는 운동을 함께할 때 시너지 효과를 기대할 수 있습니다.
                                </p>
                            </li>
                            <li>
                                <h5><i data-aos="fade-up">Q</i><p>시술의 횟수는 어떻게 되나요?</p></h5>
                                <p><i data-aos="fade-up" data-aos-delay="100">A</i>
                                    리셋의원 SPL주사는 단기간에 목표 체중을 달성할 수 있도록 1개월 내 총 4회 시술을 기본으로 구성했습니다. 4회 시술 만으로도 한 달 동안 체중 감소 및 셀룰라이트 개선을 기대할 수 있지만 개인차에 따라 추가 시술이 시행될 수 있습니다.
                                </p>
                            </li>
                            <li>
                                <h5><i data-aos="fade-up">Q</i><p>SPL주사가 정말 셀룰라이트 제거에 효과가 있나요?</p></h5>
                                <p><i data-aos="fade-up" data-aos-delay="100">A</i>
                                    셀룰라이트는 일종의 흉터로 지방분해 용액만으로는 분해가 되지 않아 추가적인 시술이 필요합니다. 리셋의원 SPL주사에 포함된 체외충격파 시술이 엉겨 붙은 셀룰라이트를 분해하여 셀룰라이트가 제거되는 효과를 기대할 수 있습니다.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
</div>
<script>

    

</script>

<?php
include_once(G5_PATH.'/tail.php');