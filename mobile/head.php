<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
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

<!-- 모바일 헤더 추가 할 것 내일 할 일 -->
<!-- mo -->
<div class="hidden_bg">
    <div class="hidden_menu">
        <div class="hidden_top"> 
            <div class="mtop">
                <ul class="login">
                <?php if ($is_member) {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">Modify</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php">Logout</a></li>
                <?php if ($is_admin) {  ?>
                <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">Admin</a></li>
                <?php }  ?>
                <?php } else {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/register.php">Join</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/login.php">Login</a></li>
                <?php }  ?>
                </ul>
                <a class="close_menu">
                    <img src="/img/close_menu.png" alt="메뉴닫기">
                </a>
            </div>
            <ul class="hidden_gnb">
                <li class="">
                    <a href="javascript:void(0)">왜 리셋인가</a>
                    <ul class="top_0">
                        <li><a href="/menu1_1.php">ㅣ 왜 리셋인가</a></li>
                        <li><a href="/menu1_2.php">ㅣ 의료진 소개</a></li>
                        <li><a href="/menu1_3.php">ㅣ 둘러보기</a></li>
                        <li><a href="/menu1_4.php">ㅣ 오시는 길 / 진료시간</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="mint">&middot; 리셋 시그니처</a>
                    <ul class="mint top_0">
                        <li><a href="/menu2_1.php">ㅣ 상체 패키지</a></li>
                        <li><a href="/menu2_2.php">ㅣ 하체 패키지</a></li>
                        <li><a href="/menu2_3.php">ㅣ 전신 패키지</a></li>
                        <li><a href="/menu2_4.php">ㅣ one-day 패키지</a></li>
                        <li><a href="/menu2_5.php">ㅣ 5주 패키지</a></li>
                        <li><a href="/menu2_6.php">ㅣ 100days 패키지</a></li>
                        <li><a href="/menu2_7.php">ㅣ 리셋 웨딩플래너</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="mint">&middot; 비만 건강</a>
                    <ul class="mint top_0">
                        <li><a href="/menu3_1.php">ㅣ SPL</a></li>
                        <li><a href="/menu3_2.php">ㅣ 지방분해주사</a></li>
                        <li><a href="/menu3_3.php">ㅣ 트리플바디</a></li>
                        <li><a href="/menu3_4.php">ㅣ 토르고주파</a></li>
                        <li><a href="/menu3_5.php">ㅣ 오토힐링</a></li>
                        <li><a href="/menu3_6.php">ㅣ 체외충격파</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="pink">&middot; 피부미용 탈모</a>
                    <ul class="pink top_0">
                        <li><a href="/menu4_1.php">ㅣ 보톡스</a></li>
                        <li><a href="/menu4_2.php">ㅣ 필러</a></li>
                        <li><a href="/menu4_3.php">ㅣ 스킨부스터/리쥬비네이션</a></li>
                        <li><a href="/menu4_4.php">ㅣ 여드름/스킨케어</a></li>
                        <li><a href="/menu4_5.php">ㅣ 모공/색소 프로그램</a></li>
                        <li><a href="/menu4_6.php">ㅣ 레이저제모</a></li>
                        <li><a href="/menu4_7.php">ㅣ 탈모치료</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="pink">&middot; 프리미엄 리프팅</a>
                    <ul class="pink top_0">
                        <li><a href="/menu5_1.php">ㅣ 프리미엄 리프팅</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"  class="gray">&middot; 영양수액</a>
                    <ul class="gray top_0">
                        <li><a href="/menu6.php">ㅣ 1:1 맞춤 수액</a></li>
                        <li><a href="/menu6.php#m6_1" class="scroll-link6">ㅣ 다이어트 수액</a></li>
                        <li><a href="/menu6.php#m6_2" class="scroll-link6">ㅣ 통증/피로 수액</a></li>
                        <li><a href="/menu6.php#m6_3" class="scroll-link6">ㅣ 감기몸살 수액</a></li>
                        <li><a href="/menu6.php#m6_4" class="scroll-link6">ㅣ 장염 수액</a></li>
                        <li><a href="/menu6.php#m6_5" class="scroll-link6">ㅣ 간기능 수액</a></li>
                        <li><a href="/menu6.php#m6_6" class="scroll-link6">ㅣ 갱년기 수액</a></li>
                        <li><a href="/menu6.php#m6_7" class="scroll-link6">ㅣ 어지럼증 수액</a></li>
                        <li><a href="/menu6.php#m6_8" class="scroll-link6">ㅣ 두드러기/알레르기 수액</a></li>
                        <li><a href="/menu6.php#m6_9" class="scroll-link6">ㅣ 건망증/총명 수액</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="gray">&middot; 기능 의학</a>
                    <ul class="gray top_0">
                        <li><a href="/menu7.php" class="scroll-link">ㅣ 항산화력 / 산화스트레스 검사</a></li>
                        <li><a href="/menu7.php#m7_2" class="scroll-link">ㅣ NK세포 활성도 & 면역력 검사</a></li>
                        <li><a href="/menu7.php#m7_3" class="scroll-link">ㅣ 장내 미생물 검사</a></li>
                        <li><a href="/menu7.php#m7_4" class="scroll-link">ㅣ 호르몬 검사</a></li>
                        <li><a href="/menu7.php#m7_5" class="scroll-link">ㅣ 소변 유기산 검사</a></li>
                        <li><a href="/menu7.php#m7_6" class="scroll-link">ㅣ 음식 항원 알레르기 검사 (IgG)</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="gray">&middot; 건강주치의</a>
                    <ul class="gray top_0">
                        <li><a href="/menu8_1.php">ㅣ 질환 클리닉</a></li>
                        <li><a href="/menu8_2.php">ㅣ 예방접종 클리닉</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">리셋과 함께한★</a>
                    <ul class="top_0">
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=review">ㅣ 수기 후기 스캔</a></li>
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=before_after">ㅣ 전/후사진</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">리셋 커뮤니티</a>
                    <ul class="top_0">
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">ㅣ 공지사항</a></li>
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=event">ㅣ 이벤트</a></li>
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=gallery">ㅣ 미디어/보도자료</a></li>
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=qa">ㅣ 시술 후 주의사항</a></li>
                        <li><a href="/menu10_5.php">ㅣ 리셋 리얼 모델 모집</a></li>
                        <?php if ($is_admin) {  ?>
                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=model">ㅣ 리셋 리얼 모델모집 확인</a></li>
                        <?php } ?>   
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">상담 및 예약</a>
                    <ul class="top_0">
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=online_consulting">ㅣ 온라인 상담</a></li>    
                        <li><a href="/menu11_2.php">ㅣ 온라인 예약</a></li>
                        <?php if ($is_admin) {  ?>
                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=fast_consulting">ㅣ 빠른상담확인</a></li>
                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=reservation">ㅣ 온라인예약확인</a></li>
                        <?php } ?>    
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
            <a href="/index.php"><img src="/img/logo_b.png" alt="리셋의원 로고"></a>
        </h1>
        <div class="header_menu">
            <ul class="gnb">
                <li class="">
                    <a href="/menu1_1.php">왜 리셋인가</a>
                    <ul class="">
                        <li><a href="/menu1_1.php">ㅣ 왜 리셋인가</a></li>
                        <li><a href="/menu1_2.php">ㅣ 의료진 소개</a></li>
                        <li><a href="/menu1_3.php">ㅣ 둘러보기</a></li>
                        <li><a href="/menu1_4.php">ㅣ 오시는 길 / 진료시간</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./menu2_1.php" class="mint">리셋 시그니처</a>
                    <ul class="mint">
                        <li><a href="/menu2_1.php">ㅣ 상체 패키지</a></li>
                        <li><a href="/menu2_2.php">ㅣ 하체 패키지</a></li>
                        <li><a href="/menu2_3.php">ㅣ 전신 패키지</a></li>
                        <li><a href="/menu2_4.php">ㅣ one-day 패키지</a></li>
                        <li><a href="/menu2_5.php">ㅣ 5주 패키지</a></li>
                        <li><a href="/menu2_6.php">ㅣ 100days 패키지</a></li>
                        <li><a href="/menu2_7.php">ㅣ 리셋 웨딩플래너</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./menu3_1.php" class="mint">비만 건강</a>
                    <ul class="mint">
                        <li><a href="/menu3_1.php">ㅣ SPL</a></li>
                        <li><a href="/menu3_2.php">ㅣ 지방분해주사</a></li>
                        <li><a href="/menu3_3.php">ㅣ 트리플바디</a></li>
                        <li><a href="/menu3_4.php">ㅣ 토르고주파</a></li>
                        <li><a href="/menu3_5.php">ㅣ 오토힐링</a></li>
                        <li><a href="/menu3_6.php">ㅣ 체외충격파</a></li>
                    </ul>
                </li>
                <li>
                    <a href="./menu4_1.php" class="pink">피부미용 탈모</a>
                    <ul class="pink">
                        <li><a href="/menu4_1.php">ㅣ 보톡스</a></li>
                        <li><a href="/menu4_2.php">ㅣ 필러</a></li>
                        <li><a href="/menu4_3.php">ㅣ 스킨부스터/리쥬비네이션</a></li>
                        <li><a href="/menu4_4.php">ㅣ 여드름/스킨케어</a></li>
                        <li><a href="/menu4_5.php">ㅣ 모공/색소 프로그램</a></li>
                        <li><a href="/menu4_6.php">ㅣ 레이저제모</a></li>
                        <li><a href="/menu4_7.php">ㅣ 탈모치료</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/menu5_1.php" class="pink">프리미엄 리프팅</a>
                    <ul class="pink">
                        <li><a href="/menu5_1.php">ㅣ 프리미엄 리프팅</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/menu6.php"  class="gray">영양수액</a>
                    <ul class="gray">
                        <li><a href="/menu6.php">ㅣ 1:1 맞춤 수액</a></li>
                        <li><a href="/menu6.php#m6_1" class="scroll-link6">ㅣ 다이어트 수액</a></li>
                        <li><a href="/menu6.php#m6_2" class="scroll-link6">ㅣ 통증/피로 수액</a></li>
                        <li><a href="/menu6.php#m6_3" class="scroll-link6">ㅣ 감기몸살 수액</a></li>
                        <li><a href="/menu6.php#m6_4" class="scroll-link6">ㅣ 장염 수액</a></li>
                        <li><a href="/menu6.php#m6_5" class="scroll-link6">ㅣ 간기능 수액</a></li>
                        <li><a href="/menu6.php#m6_6" class="scroll-link6">ㅣ 갱년기 수액</a></li>
                        <li><a href="/menu6.php#m6_7" class="scroll-link6">ㅣ 어지럼증 수액</a></li>
                        <li><a href="/menu6.php#m6_8" class="scroll-link6">ㅣ 두드러기/알레르기 수액</a></li>
                        <li><a href="/menu6.php#m6_9" class="scroll-link6">ㅣ 건망증/총명 수액</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/menu7.php" class="gray">기능 의학</a>
                    <ul class="gray">
                        <li><a href="/menu7.php" class="scroll-link">ㅣ 항산화력 / 산화스트레스 검사</a></li>
                        <li><a href="/menu7.php#m7_2" class="scroll-link">ㅣ NK세포 활성도 & 면역력 검사</a></li>
                        <li><a href="/menu7.php#m7_3" class="scroll-link">ㅣ 장내 미생물 검사</a></li>
                        <li><a href="/menu7.php#m7_4" class="scroll-link">ㅣ 호르몬 검사</a></li>
                        <li><a href="/menu7.php#m7_5" class="scroll-link">ㅣ 소변 유기산 검사</a></li>
                        <li><a href="/menu7.php#m7_6" class="scroll-link">ㅣ 음식 항원 알레르기 검사 (IgG)</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/menu8_1.php" class="gray">건강주치의</a>
                    <ul class="gray">
                        <li><a href="/menu8_1.php">ㅣ 질환 클리닉</a></li>
                        <li><a href="/menu8_2.php">ㅣ 예방접종 클리닉</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=review">리셋과 함께한★</a>
                    <ul class="">
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=review">ㅣ 수기 후기 스캔</a></li>
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=before_after">ㅣ 전/후사진</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">리셋 커뮤니티</a>
                    <ul class="">
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">ㅣ 공지사항</a></li>
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=event">ㅣ 이벤트</a></li>
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=gallery">ㅣ 미디어/보도자료</a></li>
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=qa">ㅣ 시술 후 주의사항</a></li>
                        <li><a href="/menu10_5.php">ㅣ 리셋 리얼 모델 모집</a></li>
                        <?php if ($is_admin) {  ?>
                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=model">ㅣ 리셋 리얼 모델모집 확인</a></li>
                        <?php } ?>    
                    </ul>
                </li>
                <li>
                    <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=online_consulting">상담 및 예약</a>
                    <ul class="">
                        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=online_consulting">ㅣ 온라인 상담</a></li>    
                        <li><a href="/menu11_2.php">ㅣ 온라인 예약</a></li>
                        <?php if ($is_admin) {  ?>
                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=fast_consulting">ㅣ 빠른상담확인</a></li>
                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=reservation">ㅣ 온라인예약확인</a></li>
                        <?php } ?>    
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
                <img src="/img/open_menu.png" alt="전체메뉴열기">
            </div>
        </div>
        <ul class="header_right">
            <?php if ($is_member) {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">Modify</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php">Logout</a></li>
                <?php if ($is_admin) {  ?>
                <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">Admin</a></li>
                <?php }  ?>
                <?php } else {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/register.php">Join</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/login.php">Login</a></li>
                <?php }  ?>
        </ul>
    </div>
</header>
<div id="quick-placeholder">
    <aside class="quick">
        <ul>
            <li>
                <a href="https://naver.me/xYQTkzJx" target="_blank">
                    <div class="img_wrap">
                        <img src="/img/quick_way.png" alt="오시는 길">
                    </div>
                </a>
            </li>
            <li>
                <a href="tel:031-709-6645">
                    <div class="img_wrap">
                        <img src="/img/quick_call.png" alt="전화문의">
                    </div>
                </a>
            </li>
            <li>
                <a href="https://pf.kakao.com/_xbsWQj">
                    <div class="img_wrap">
                        <img src="/img/quick_kakao.png" alt="카카오톡문의하기">
                    </div>
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/@resetclinic_bd" target="_blank">
                    <div class="img_wrap">
                        <img src="/img/quick_youtube.png" alt="유튜브">
                    </div>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/resetclinic_bd" target="_blank">
                    <div class="img_wrap">
                        <img src="/img/quick_insta.png" alt="인스타">
                    </div>
                </a>
            </li>
            <li>
                <a class="top_btn">
                    <div class="img_wrap">
                        <img src="/img/quick_top.png" alt="top">
                    </div>
                    TOP
                </a>
            </li>
        </ul>
    </aside>
    <aside class="quick_m">
        <ul>
            <li>
                <a href="tel:031-709-6645" target="_blank">
                    <div class="img_wrap">
                        <img src="/img/mquick_call.png" alt="전화문의">
                    </div>
                    전화문의
                </a>
            </li>
            <li>
                <a href="https://naver.me/xYQTkzJx" target="_blank">
                    <div class="img_wrap">
                        <img src="/img/mquick_way.png" alt="오시는 길">
                    </div>
                    오시는 길
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/resetclinic_bd" target="_blank">
                    <div class="img_wrap">
                        <img src="/img/mquick_insta2.png" alt="인스타">
                    </div>
                    인스타
                </a>
            </li>
            <li>
                <a href="https://pf.kakao.com/_xbsWQj">
                    <div class="img_wrap">
                        <img src="/img/mquick_kakao2.png" alt="카카오톡문의하기">
                    </div>
                    카톡문의
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/@resetclinic_bd" target="_blank">
                    <div class="img_wrap">
                        <img src="/img/mquick_youtube2.png" alt="유튜브">
                    </div>
                    유튜브
                </a>
            </li>
            <li class="top_li">
                <a class="top_btn">
                    <div class="img_wrap">
                        <img src="/img/mquick_top.png" alt="top">
                    </div>
                    TOP
                </a>
            </li>
        </ul>
    </aside>
</div>

<?php
if(defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>
<div id="wrapper">

    <div id="container">
    <?php if (!defined("_INDEX_")) { ?>
    	
    <?php }