<!-- 전체 감싸는 태그 -->
<section class="reserpopup">
  <div class="resercon">
    <div class="closebutton">
      <img src="<?php echo G5_URL ?>/img/layerclose.png" alt="닫기">
    </div>
    <div class="reser_1">
      <h2 class="ceTxt subHead fff">1. 간편 예약 신청</h2>
      <p class="ceTxt notxt fff">
        "간편 예약 신청"은 고객의 아주 기본적인 정보만 가지고 예약을 신청하셔도 확인 후 <br class="pc">24시간 내에 연락드리는 서비스입니다. (주말, 공휴일 제외)
      </p>
      <form name="fwrite" id="fwrite" action="<?php echo G5_URL ?>/bbs/write_update.php?bo_table=reser_easy" onsubmit="return check_hj();" method="post" enctype="multipart/form-data" autocomplete="off">
        <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
        <input type="hidden" name="w" value="<?php echo $w ?>">
        <input type="hidden" name="bo_table" value="reser_easy">
        <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
        <input type="hidden" name="sca" value="<?php echo $sca ?>">
        <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
        <input type="hidden" name="stx" value="<?php echo $stx ?>">
        <input type="hidden" name="spt" value="<?php echo $spt ?>">
        <input type="hidden" name="sst" value="<?php echo $sst ?>">
        <input type="hidden" name="sod" value="<?php echo $sod ?>">
        <input type="hidden" name="page" value="<?php echo $page ?>">
        <div class="timeyes reser_table">
          <ul>
            <li>
              <input type="text" id="user_named" name="wr_name" value="<?php echo $is_member ? $member['mb_name'] : ''; ?>" placeholder="이름을 입력해주세요">
              <input type="text" id="user_hp" name="wr_subject" placeholder="연락처를 입력해주세요">
            </li>
            <li>
              <textarea id="reser_contents" name="wr_content" placeholder="예약내용을 남겨주세요."></textarea>
            </li>
          </ul>
        </div>
        <span class="combo check"><input type="checkbox" id="c1" class="agreeChk labelchk" required><label for="c1" class="infoAgree">개인정보수집동의</label></span>
        <input type="submit" value="간편 예약 신청하기" class="apply subHead" accesskey="s">
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
              alert("예약이 접수되었습니다.");
              return true;
              // window.location.reload();
            }
          }
        </script>
      </form>
    </div>
    <div class="reser_2">
      <h2 class="ceTxt subHead fff">2. 온라인 예약</h2>
      <p class="nortxt ceTxt reserTxt">의료진과 진료시간을 선택을 할 수 있는 <br class="mobile">자세한 온라인 예약 서비스입니다.</p>
      <a href="<?php echo G5_URL ?>/reser/reservation.php">온라인 예약 신청하기</a>
    </div>
  </div>
</section>
