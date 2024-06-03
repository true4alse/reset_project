<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div class="fot_map">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1332.8743840973655!2d127.12428591424194!3d37.38681924147247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b59daf13c7f1b%3A0x224b2c5761a4dc64!2z66as7IWL7J2Y7JuQ!5e0!3m2!1sko!2skr!4v1715157033643!5m2!1sko!2skr" style="border:0;width: 100%;height: 100%;min-height: 30vh;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="map_txt">
        <div class="map_tit">LOCATION</div>
        <address>
            경기도 성남시 분당구 서현동 249-3<br>
            대정빌딩 5층
        </address>
        <div class="map_tit">CLINIC TIME</div>
        <div class="y_point">화 / 목요일 9시 야간 진료!</div>
        <ul>
            <li><span><i>월</i><i>/</i><i>수</i><i>/</i><i>금</i></span><em>AM <i>10:00</i> ~ PM <i>7:00</i></em></li>
            <li><span><i>화</i><i>/</i><i>목</i></span><em>AM <i>10:00</i> ~ PM <i>9:00</i></em></li>
            <li><span><i>토</i><i>요</i><i>일</i></span><em>PM <i>10:00</i> ~ PM <i>4:00</i></em></li>
        </ul>
        <p>
            * 공휴일 및 일요일 휴진
        </p>
    </div>
</div>
<div class="f_counsel_wrap page">
    <div class="counsel_inner">
        <form >
            <div class="txt_wrap">
                <div class="counsel_tit"><img src="./img/logo_b.png" alt="">빠른상담</div>
                <div class="b_privacy">
                    <label for="bchk">
                        <input type="checkbox" name="privacy" id="bchk"> 개인정보취급방침
                    </label>
                    <a href="site1.html" target="_blank">자세히보기</a>
                </div>
            </div>
            <div class="form_wrap">
                <label for="cate1" class="hide_label">상담받을 과목 선택</label>
                <select name="cate1" id="cate1" class="f_cate">
                    <option value="" hidden="">상담받을 과목 선택</option>
                    <option value="패키지프로그램">패키지프로그램</option>
                    <option value="다이어트">다이어트</option>
                    <option value="토탈피로통증">토탈피로통증</option>
                    <option value="리셋페이스클리닉">리셋페이스클리닉</option>
                    <option value="스킨부스터">스킨부스터</option>
                    <option value="제모">제모</option>
                </select>
                <label for="name" class="hide_label">이름</label>
                <input type="text" id="name" name="name" placeholder="이름" class="f_name" maxlength="10">
                <label for="hphoneall" class="hide_label">연락처</label>
                <input type="text" id="hphoneall" name="hphoneall" placeholder="연락처 (- 없이 입력)" class="f_tel" maxlength="11">
                <input type="submit" value="상담 신청" class="f_submit" >
            </div>
        </form>
    </div>
</div>
<footer>
    <div class="footer_top">
        <div class="footer_inner top">
            <ul class="f_top">
                <li><a href="./site1.html">개인정보처리방침</a></li>
                <li><a href="./site2.html">이용약관</a></li>
                <li><a href="./site3.html">환자권리장전</a></li>
                <!-- <li><a href="./site3.html">비급여 진료비 안내</a></li> -->
            </ul>
        </div>
    </div>
    <div class="footer_bot">
        <div class="footer_inner bot">
            <div class="f_logo">
                <img src="./img/logo_w.png" alt="리셋의원 로고">
            </div>
            <ul class="f_bot">
                <li><span>상호</span> 리셋의원</li>
                <li><span>대표</span> 봉아라</li>
                <li><span>사업자번호</span> 315-22-64102</li>
                <li><span>주소</span> 경기도 성남시 분당구 서현동 249-3 대정빌딩 5층</li>
                <li><span>전화</span> 031-709-6644</li>
                <li><span>FAX</span> 031-709-6645</li>
                <li><span>메일</span> resetclinic_official@naver.com</li>
            </ul>
            <P>COPYRIGHT ⓒ 2024 RESET CLINIC. ALL RIGHTS RESERVED.</P>
        </div>
    </div>
</footer>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");