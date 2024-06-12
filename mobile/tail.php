<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}
?>
    </div>
</div>

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
        <form name="fwrite" id="fwrite" action="<?php echo G5_URL ?>/bbs/write_update.php?bo_table=fast_consulting" onsubmit="return check_hj();" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="txt_wrap">
                <div class="counsel_tit"><img src="/img/logo_b.png" alt="">빠른상담</div>
                <div class="b_privacy">
                <input type="checkbox" id="c1" class="agreeChk labelchk" required><label for="c1" class="infoAgree">개인정보취급방침</label>
                    <a href="site1.php" target="_blank">자세히보기</a>
                </div>
            </div>
            <div class="form_wrap">
                <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
                <input type="hidden" name="w" value="<?php echo $w ?>">
                <input type="hidden" name="bo_table" value="fast_consulting">
                <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                <input type="hidden" name="stx" value="<?php echo $stx ?>">
                <input type="hidden" name="spt" value="<?php echo $spt ?>">
                <input type="hidden" name="sst" value="<?php echo $sst ?>">
                <input type="hidden" name="sod" value="<?php echo $sod ?>">
                <input type="hidden" name="page" value="<?php echo $page ?>">

                <label for="cate1" class="hide_label">상담받을 과목 선택</label>
                <select  name="wr_content" id="reser_contents"  class="f_cate">
                    <option value="내용입력안함" hidden="">상담받을 과목 선택</option>
                    <option value="패키지프로그램">패키지프로그램</option>
                    <option value="다이어트">다이어트</option>
                    <option value="토탈피로통증">토탈피로통증</option>
                    <option value="리셋페이스클리닉">리셋페이스클리닉</option>
                    <option value="스킨부스터">스킨부스터</option>
                    <option value="제모">제모</option>
                </select>
                <label for="name" class="hide_label">이름</label>
                <input type="text" id="user_named" name="wr_name" value="<?php echo $is_member ? $member['mb_name'] : ''; ?>" placeholder="이름" class="f_name" maxlength="10">

                <label for="hphoneall" class="hide_label">연락처</label>
                <input type="text" id="user_hp" name="wr_subject" placeholder="연락처 (- 없이 입력)" class="f_tel" maxlength="11">

                <input type="submit" value="상담 신청" class="f_submit apply subHead" accesskey="s">
            </div>
        </form>


        
       
        <script>
          function check_hj(){
            var chbox1 = document.getElementById("c1");
            var chbox2 = document.getElementById("user_named");
            var chbox3 = document.getElementById("user_hp");
            if($(chbox1).val() ==""){
              alert("개인정보수집에 동의해주세요.");
              return false;
            }else if($(chbox2).val() ==""){
              alert("이름을 남겨주세요.")
              return false;
            }else if($(chbox3).val() ==""){
              alert("연락처를 남겨주세요.");
              return false;
            }else{
              alert("빠른상담이 접수되었습니다.");
              return true;
              window.location.href="/"
            }
          }
        </script>
     
    </div>
</div>
<footer>
    <div class="footer_top">
        <div class="footer_inner top">
            <ul class="f_top">
                <li><a href="./site1.php">개인정보처리방침</a></li>
                <li><a href="./site2.php">이용약관</a></li>
                <li><a href="./site3.php">환자권리장전</a></li>
                <!-- <li><a href="./site3.php">비급여 진료비 안내</a></li> -->
            </ul>
        </div>
    </div>
    <div class="footer_bot">
        <div class="footer_inner bot">
            <div class="f_logo">
                <img src="/img/logo_w.png" alt="리셋의원 로고">
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
include_once(G5_PATH."/tail.sub.php");