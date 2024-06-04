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
                        <p data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            PREMIUM SKINCARE
                        </p>
                        <h2>RESET CLINIC</h2>
                    </div>
                </div>
            </div>
            <div class="tab_content page">
                <ul class="sub_tab innertop innerbot">
                    <li><a href="menu1_1.php">왜 리셋인가</a></li>
                    <li class="on"><a href="menu1_2.php">의료진 소개</a></li>
                    <li><a href="menu1_3.php">둘러보기</a></li>
                    <li><a href="menu1_4.php">오시는 길 / 진료시간</a></li>
                </ul>
            </div>
            <h3>
                <span>RESET CLINIC</span>
                <i>
                    <em ><b>의료진 소개</b></em>
                </i>
            </h3>
            <div class=" page doctor">
                <div class="flex_wrap content">
                    <div class="img_wrap doc">
                        <img src="./img/doctor_bar.png" alt="봉아라 원장님">
                    </div>
                    <div class="txt_wrap ">
                        <div class="doc_name"><b>봉아라 </b>대표원장</div>
                        <ul class="doc_ul">
                            <li data-aos="fade-up">대한 가정의학회 정회원</li>
                            <li data-aos="fade-up">대한 비만학회 평생회원, 비만전문인정의</li>
                            <li data-aos="fade-up">대한 영양제처방학회 학술이사</li>
                            <li data-aos="fade-up">대한 기능 의학회 정회원</li>
                            <li data-aos="fade-up">대한 약물영양의학회 정회원</li>
                            <li data-aos="fade-up">대한 임상건강증진학회 정회원</li>
                            <li data-aos="fade-up">대한 비만연구의사회 정회원</li>
                            <li data-aos="fade-up">대한 레이저피부모발학회 정회원</li>
                            <li data-aos="fade-up">대한 미용성형레이저의학회 정회원</li>
                            <li data-aos="fade-up">대한 비만미용학회 정회원</li>
                        </ul>
                        <ul class="doc_ul">
                            <li data-aos="fade-up">전) 광교디에스타의원 원장</li>
                            <li data-aos="fade-up">전) 유앤아이의원 수원점 원장</li>
                            <li data-aos="fade-up">전) 분당365일의원 원장</li>
                            <li data-aos="fade-up">전) 처음처럼내과의원 원장</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page">
                <div class="flow_banner" dir="ltr">
                    <ul class="list">    
                        <li class="c"><img src="./img/doctor/1/1.png" alt=""></li>
                        <li ><img src="./img/doctor/1/2.png" alt=""></li>
                        <li class="c" ><img src="./img/doctor/1/3.png" alt=""></li>
                        <li ><img src="./img/doctor/1/4.png" alt=""></li>
                        <li ><img src="./img/doctor/1/5.png" alt=""></li>
                        <li ><img src="./img/doctor/1/6.png" alt=""></li>
                        <li ><img src="./img/doctor/1/7.png" alt=""></li>
                        <li ><img src="./img/doctor/1/8.png" alt=""></li>
                        <li ><img src="./img/doctor/1/9.png" alt=""></li>
                        <li ><img src="./img/doctor/1/10.png" alt=""></li>
                        <li ><img src="./img/doctor/1/11.png" alt=""></li>
                        <li ><img src="./img/doctor/1/12.png" alt=""></li>
                        <li ><img src="./img/doctor/1/13.png" alt=""></li>
                        <li class="c"><img src="./img/doctor/1/14.png" alt=""></li>
                        <li ><img src="./img/doctor/1/15.png" alt=""></li>
                        <li ><img src="./img/doctor/1/16.png" alt=""></li>
                        <li ><img src="./img/doctor/1/17.png" alt=""></li>
                        <li ><img src="./img/doctor/1/18.png" alt=""></li>
                        <li ><img src="./img/doctor/1/19.png" alt=""></li>
                        <li ><img src="./img/doctor/1/20.png" alt=""></li>
                    </ul>
                </div>
                
            </div>
            
        </main>
</div>

<?php
include_once(G5_PATH.'/tail.php');