<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>


<!-- 상단 시작 { -->

<!-- mo -->
<div class="hidden_bg">
    <div class="hidden_menu">
        <div class="hidden_top"> 
            <div class="mtop">
                <div class="login">
                    <a href="./login.html">Login</a>
                    <a href="./join.html">Join</a>
                </div>
                <a class="close_menu">
                    <img src="./img/close_menu.png" alt="메뉴닫기">
                </a>
            </div>
            <ul class="hidden_gnb">
                <li class="">
                    <a href="javascript:void(0)">왜 리셋인가</a>
                    <ul class="top_0">
                        <li><a href="./menu1_1.html">ㅣ 왜 리셋인가</a></li>
                        <li><a href="./menu1_2.html">ㅣ 의료진 소개</a></li>
                        <li><a href="./menu1_3.html">ㅣ 둘러보기</a></li>
                        <li><a href="./menu1_4.html">ㅣ 오시는 길 / 진료시간</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="mint">&middot; 리셋 시그니처</a>
                    <ul class="mint top_0">
                        <li><a href="./menu2_1.html">ㅣ 상체 패키지</a></li>
                        <li><a href="./menu2_2.html">ㅣ 하체 패키지</a></li>
                        <li><a href="./menu2_3.html">ㅣ 전신 패키지</a></li>
                        <li><a href="./menu2_4.html">ㅣ one-day 패키지</a></li>
                        <li><a href="./menu2_5.html">ㅣ 5주 패키지</a></li>
                        <li><a href="./menu2_6.html">ㅣ 100days 패키지</a></li>
                        <li><a href="./menu2_7.html">ㅣ 리셋 웨딩플래너</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="mint">&middot; 비만 건강</a>
                    <ul class="mint top_0">
                        <li><a href="./menu3_1.html">ㅣ SPL</a></li>
                        <li><a href="./menu3_2.html">ㅣ 지방분해주사</a></li>
                        <li><a href="./menu3_3.html">ㅣ 트리플바디</a></li>
                        <li><a href="./menu3_4.html">ㅣ 토르고주파</a></li>
                        <li><a href="./menu3_5.html">ㅣ 오토힐링</a></li>
                        <li><a href="./menu3_6.html">ㅣ 체외충격파</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="pink">&middot; 피부미용 탈모</a>
                    <ul class="pink top_0">
                        <li><a href="./menu4_1.html">ㅣ 보톡스</a></li>
                        <li><a href="./menu4_2.html">ㅣ 필러</a></li>
                        <li><a href="./menu4_3.html">ㅣ 스킨부스터/리쥬비네이션</a></li>
                        <li><a href="./menu4_4.html">ㅣ 여드름/스킨케어</a></li>
                        <li><a href="./menu4_5.html">ㅣ 모공/색소 프로그램</a></li>
                        <li><a href="./menu4_6.html">ㅣ 레이저제모</a></li>
                        <li><a href="./menu4_7.html">ㅣ 탈모치료</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="pink">&middot; 프리미엄 리프팅</a>
                    <ul class="pink top_0">
                        <li><a href="./menu5_1.html">ㅣ 프리미엄 리프팅</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"  class="gray">&middot; 영양수액</a>
                    <ul class="gray top_0">
                        <li><a href="./menu6.html">ㅣ 1:1 맞춤 수액</a></li>
                        <li><a href="./menu6.html#m6_1" class="scroll-link6">ㅣ 다이어트 수액</a></li>
                        <li><a href="./menu6.html#m6_2" class="scroll-link6">ㅣ 통증/피로 수액</a></li>
                        <li><a href="./menu6.html#m6_3" class="scroll-link6">ㅣ 감기몸살 수액</a></li>
                        <li><a href="./menu6.html#m6_4" class="scroll-link6">ㅣ 장염 수액</a></li>
                        <li><a href="./menu6.html#m6_5" class="scroll-link6">ㅣ 간기능 수액</a></li>
                        <li><a href="./menu6.html#m6_6" class="scroll-link6">ㅣ 갱년기 수액</a></li>
                        <li><a href="./menu6.html#m6_7" class="scroll-link6">ㅣ 어지럼증 수액</a></li>
                        <li><a href="./menu6.html#m6_8" class="scroll-link6">ㅣ 두드러기/알레르기 수액</a></li>
                        <li><a href="./menu6.html#m6_9" class="scroll-link6">ㅣ 건망증/총명 수액</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="gray">&middot; 기능 의학</a>
                    <ul class="gray top_0">
                        <li><a href="./menu7.html" class="scroll-link">ㅣ 항산화력 / 산화스트레스 검사</a></li>
                        <li><a href="./menu7.html#m7_2" class="scroll-link">ㅣ NK세포 활성도 & 면역력 검사</a></li>
                        <li><a href="./menu7.html#m7_3" class="scroll-link">ㅣ 장내 미생물 검사</a></li>
                        <li><a href="./menu7.html#m7_4" class="scroll-link">ㅣ 호르몬 검사</a></li>
                        <li><a href="./menu7.html#m7_5" class="scroll-link">ㅣ 소변 유기산 검사</a></li>
                        <li><a href="./menu7.html#m7_6" class="scroll-link">ㅣ 음식 항원 알레르기 검사 (IgG)</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="gray">&middot; 건강주치의</a>
                    <ul class="gray top_0">
                        <li><a href="./menu8_1.html">ㅣ 질환 클리닉</a></li>
                        <li><a href="./menu8_2.html">ㅣ 예방접종 클리닉</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">리셋과 함께한★</a>
                    <ul class="top_0">
                        <li><a href="./menu9_1.html">ㅣ 수기 후기 스캔</a></li>
                        <li><a href="./menu9_2.html">ㅣ 전/후사진</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">리셋 커뮤니티</a>
                    <ul class="top_0">
                        <li><a href="./menu10_1.html">ㅣ 공지사항</a></li>
                        <li><a href="./menu10_2.html">ㅣ 이벤트</a></li>
                        <li><a href="./menu10_3.html">ㅣ 미디어/보도자료</a></li>
                        <li><a href="./menu10_4.html">ㅣ 시술 후 주의사항</a></li>
                        <li><a href="./menu10_5.html">ㅣ 리셋 리얼 모델 모집</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">상담 및 예약</a>
                    <ul class="top_0">
                        <li><a href="./menu11_1.html">ㅣ 온라인 상담</a></li>    
                        <li><a href="./menu11_2.html">ㅣ 온라인 예약</a></li>
                        <li><a href="https://m.booking.naver.com/booking/6/bizes/255056?theme=place&entry=pll&area=pll">ㅣ 네이버 예약</a></li>
                        <li><a href="https://pf.kakao.com/_xbsWQj">ㅣ 카톡 상담</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
        
    </div>
</div>
<!-- pc -->
<header>
    <div class="header_inner">
        <h1 class="h_logo">
            <a href="index.html"><img src="./img/logo_b.png" alt="리셋의원 로고"></a>
        </h1>
        <div class="header_menu">
            <ul class="gnb">
                <li class="">
                    <a href="./menu1_1.html">왜 리셋인가</a>
                    <ul class="">
                        <li><a href="./menu1_1.html">ㅣ 왜 리셋인가</a></li>
                        <li><a href="./menu1_2.html">ㅣ 의료진 소개</a></li>
                        <li><a href="./menu1_3.html">ㅣ 둘러보기</a></li>
                        <li><a href="./menu1_4.html">ㅣ 오시는 길 / 진료시간</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./menu2_1.html" class="mint">리셋 시그니처</a>
                    <ul class="mint">
                        <li><a href="./menu2_1.html">ㅣ 상체 패키지</a></li>
                        <li><a href="./menu2_2.html">ㅣ 하체 패키지</a></li>
                        <li><a href="./menu2_3.html">ㅣ 전신 패키지</a></li>
                        <li><a href="./menu2_4.html">ㅣ one-day 패키지</a></li>
                        <li><a href="./menu2_5.html">ㅣ 5주 패키지</a></li>
                        <li><a href="./menu2_6.html">ㅣ 100days 패키지</a></li>
                        <li><a href="./menu2_7.html">ㅣ 리셋 웨딩플래너</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./menu3_1.html" class="mint">비만 건강</a>
                    <ul class="mint">
                        <li><a href="./menu3_1.html">ㅣ SPL</a></li>
                        <li><a href="./menu3_2.html">ㅣ 지방분해주사</a></li>
                        <li><a href="./menu3_3.html">ㅣ 트리플바디</a></li>
                        <li><a href="./menu3_4.html">ㅣ 토르고주파</a></li>
                        <li><a href="./menu3_5.html">ㅣ 오토힐링</a></li>
                        <li><a href="./menu3_6.html">ㅣ 체외충격파</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./menu4_1.html" class="pink">피부미용 탈모</a>
                    <ul class="pink">
                        <li><a href="./menu4_1.html">ㅣ 보톡스</a></li>
                        <li><a href="./menu4_2.html">ㅣ 필러</a></li>
                        <li><a href="./menu4_3.html">ㅣ 스킨부스터/리쥬비네이션</a></li>
                        <li><a href="./menu4_4.html">ㅣ 여드름/스킨케어</a></li>
                        <li><a href="./menu4_5.html">ㅣ 모공/색소 프로그램</a></li>
                        <li><a href="./menu4_6.html">ㅣ 레이저제모</a></li>
                        <li><a href="./menu4_7.html">ㅣ 탈모치료</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./menu5_1.html" class="pink">프리미엄 리프팅</a>
                    <ul class="pink">
                        <li><a href="./menu5_1.html">ㅣ 프리미엄 리프팅</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./menu6.html"  class="gray">영양수액</a>
                    <ul class="gray">
                        <li><a href="./menu6.html">ㅣ 1:1 맞춤 수액</a></li>
                        <li><a href="./menu6.html#m6_1" class="scroll-link6">ㅣ 다이어트 수액</a></li>
                        <li><a href="./menu6.html#m6_2" class="scroll-link6">ㅣ 통증/피로 수액</a></li>
                        <li><a href="./menu6.html#m6_3" class="scroll-link6">ㅣ 감기몸살 수액</a></li>
                        <li><a href="./menu6.html#m6_4" class="scroll-link6">ㅣ 장염 수액</a></li>
                        <li><a href="./menu6.html#m6_5" class="scroll-link6">ㅣ 간기능 수액</a></li>
                        <li><a href="./menu6.html#m6_6" class="scroll-link6">ㅣ 갱년기 수액</a></li>
                        <li><a href="./menu6.html#m6_7" class="scroll-link6">ㅣ 어지럼증 수액</a></li>
                        <li><a href="./menu6.html#m6_8" class="scroll-link6">ㅣ 두드러기/알레르기 수액</a></li>
                        <li><a href="./menu6.html#m6_9" class="scroll-link6">ㅣ 건망증/총명 수액</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./menu7.html" class="gray">기능 의학</a>
                    <ul class="gray">
                        <li><a href="./menu7.html" class="scroll-link">ㅣ 항산화력 / 산화스트레스 검사</a></li>
                        <li><a href="./menu7.html#m7_2" class="scroll-link">ㅣ NK세포 활성도 & 면역력 검사</a></li>
                        <li><a href="./menu7.html#m7_3" class="scroll-link">ㅣ 장내 미생물 검사</a></li>
                        <li><a href="./menu7.html#m7_4" class="scroll-link">ㅣ 호르몬 검사</a></li>
                        <li><a href="./menu7.html#m7_5" class="scroll-link">ㅣ 소변 유기산 검사</a></li>
                        <li><a href="./menu7.html#m7_6" class="scroll-link">ㅣ 음식 항원 알레르기 검사 (IgG)</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./menu8_1.html" class="gray">건강주치의</a>
                    <ul class="gray">
                        <li><a href="./menu8_1.html">ㅣ 질환 클리닉</a></li>
                        <li><a href="./menu8_2.html">ㅣ 예방접종 클리닉</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./menu9_1.html">리셋과 함께한★</a>
                    <ul class="">
                        <li><a href="./menu9_1.html">ㅣ 수기 후기 스캔</a></li>
                        <li><a href="./menu9_2.html">ㅣ 전/후사진</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./menu10_1.html">리셋 커뮤니티</a>
                    <ul class="">
                        <li><a href="./menu10_1.html">ㅣ 공지사항</a></li>
                        <li><a href="./menu10_2.html">ㅣ 이벤트</a></li>
                        <li><a href="./menu10_3.html">ㅣ 미디어/보도자료</a></li>
                        <li><a href="./menu10_4.html">ㅣ 시술 후 주의사항</a></li>
                        <li><a href="./menu10_5.html">ㅣ 리셋 리얼 모델 모집</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./menu11_1.html">상담 및 예약</a>
                    <ul class="">
                        <li><a href="./menu11_1.html">ㅣ 온라인 상담</a></li>    
                        <li><a href="./menu11_2.html">ㅣ 온라인 예약</a></li>
                        <li><a href="https://m.booking.naver.com/booking/6/bizes/255056?theme=place&entry=pll&area=pll">ㅣ 네이버 예약</a></li>
                        <li><a href="https://pf.kakao.com/_xbsWQj">ㅣ 카톡 상담</a></li>
                    </ul>
                </li>
                
            </ul>
            <div class="gnbinfo">
                <div class="info_wrap">
                    <div class="info_tit">CLINIC TIME</div>
                    <ul>
                        <li><span><i>월</i><i>/</i><i>수</i><i>/</i><i>금</i></span><em><b>AM</b> 10:00 <b>~ PM</b> 7:00</em></li>
                        <li><span><i>화</i><i>/</i><i>목</i></span><em><b>AM</b> 10:00 <strong><b>~ PM</b> 9:00</strong></em></li>
                        <li><span><i>토</i><i>요</i><i>일</i></span><em><b>AM</b> 10:00 <b>~ PM</b> 4:00</em></li>
                    </ul>
                    <p>
                        * 공휴일 및 일요일 휴진
                    </p>
                    <div class="info_tit">LOCATION</div>
                    <address>
                        경기도 성남시 분당구 서현동 249-3<br>
                        대정빌딩 5층
                    </address>
                    <a class="info_tel" href="tel:031-709-6644">전화문의 <i>031-709-6644</i></a>
                </div>
            </div>
            <div class="open_menu" id="open_menu">
                <img src="./img/open_menu.png" alt="전체메뉴열기">
            </div>
        </div>
        <ul class="header_right">
            <?php if ($is_member) {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
                <?php if ($is_admin) {  ?>
                <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
                <?php }  ?>
                <?php } else {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/register.php">Join</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/login.php">Login</a></li>
                <?php }  ?>
        </ul>
    </div>
</header>
    

<?php
if(defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>
    
    
    
<!-- } 상단 끝 -->



<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">
   
    <div id="container">
        <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php }