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
                            PREMIUM SKINCARE
                        </p>
                        <h2 class="">RESET CLINIC</h2>
                    </div>
                </div>
            </div>
            <div class="tab_content page">
                <ul class="sub_tab tab6 innertop innerbot">
                    <li><a href="site1.php">개인정보처리방침</a></li>
                    <li ><a href="site2.php">이용약관</a></li>
                    <li class="on"><a href="site3.php">환자권리장전</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>환자권리장전</b></em>
                    </i>
                </h3>
                <div class="innerbot">
                    <div class="site1">
                        <p>[환자권리장전]</p>
                        <p>모든 환자는 인간으로서 존엄과 가치를 지니고, 건강한 삶을 영위하기 위해 다음과 같은 권리를 가지며 이에 따른 책임과 의무를 가진다.</p>
                        <p>환자의 권리</p>
                        <p>
                            ① 환자는 인간으로서의 존엄과 가치를 바탕으로 인격을 존중 받을 권리가 있다.<br>
                            ② 환자는 국적, 성별, 연령, 종교, 경제·사회적 지위, 질병의 종류 등 어떤 이유로도 차별 받지 않으며, 평등한 의료 서비스를 받을 권리가 있다.<br>
                            ③ 환자는 최선의 진료를 위하여 지정의 및 의료기관을 선택할 권리가 있다.<br>
                            ④ 환자는 적법한 자격을 갖춘 의료인으로부터 의료행위를 제공받을 권리가 있다.<br>
                            ⑤ 환자 및 보호자는 환자의 진료기록에 관한 정보 및 기록을 요구할 권리가 있다.<br>
                            ⑥ 환자 및 보호자는 환자의 질병상태 및 치료 행위의 목적, 방법, 내용과 그 결과에 대해 설명을 듣고, 치료 방법 또는 치료 거부에 대해 선택할 권리가 있다.<br>
                            ⑦ 환자 및 보호자는 의료행위와 관련된 문서에 서명하기 전에 그 내용에 대해 설명을 들을 권리가 있다.<br>
                            ⑧ 환자 및 보호자는 의료행위에 소요된 의료비 내역에 대해 알 권리가 있다.<br>
                            ⑨ 환자는 질병. 치료에 관련된 정보 및 사생활에 관한 모든 비밀을 침해 받지 않을 권리가 있다.<br>
                            ⑩ 환자 및 보호자는 병원 내 의료서비스를 포함한 기타 사항에 대해 불만이 있을 경우, 의견을 표현하고 그에 대하여 답변을 들을 권리가 있다.
                        </p>
                        <p>환자의 책임</p>
                        <p>① 환자는 현재 증상, 과거 병력, 약물 치료 및 기타 기록 등 진료에 관련된 사안을 직접 또는 법적 대리인을 통해 의료진에게 제공할 책임이 있다.<br>
                            ② 본인의 치료와 관련해 모르는 점이 있을 때, 확인 할 책임이 있다.<br>
                            ③ 환자는 의료진이 권장한 치료 계획에 참여하고, 치료에 협력할 책임이 있다.<br>
                            ④ 환자는 치료 계획 불응 시 발생한 결과에 대한 책임이 있다.<br>
                            ⑤ 환자는 다른 환자 및 의료진을 존중하며, 병원의 자산을 중요시 할 책임이 있다.<br>
                            ⑥ 환자는 치료와 관련된 재정적 의무를 다할 책임이 있다.<br>
                            ⑦ 환자는 병원의 규칙 및 규정에 따를 책임이 있다.</p>
                        <p></p>
                    </div>
                </div>
            </div>
            
            
        </main>
</div>
<script>

    

</script>

<?php
include_once(G5_PATH.'/tail.php');