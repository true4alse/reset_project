<?php
  include_once('../common.php');
  include_once(G5_PATH.'/head.php');

?>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<section class="content_sub_wrap bbswrap m_title_reser">
  <div class="reser_wrap">
    <article class="title_section title_bg1 pc">
      <h1 class="main_tlt"><img src="/img/title_bbs2.png"></h1>
    </article>
    <h2 class="sub_tlt pc">YONSEIHANAHOSPITAL</h2>

    <div class="main_tlt2">
      <div class="cl1200">
        <h2 class="h2">온라인예약</h2>
        <p class="nortxt">연세하나병원에서는 환자분의 편의를 위하여 온라인 예약서비스를 제공하고 있습니다.<br>
        온라인예약 신청 시 원내에서 확인 후 상담 전화를 보내드리고 있습니다.<br>
        최종적으로 상담 후 예약확정이 되면 예약이 완료됩니다.</p>
      </div>
    </div>

    <div class="reser_container">
      <div class="reser_des">
        <h5 class="h5">빠르고 편리하게 온라인 예약 신청하세요.<span>신청 후 담당자와의 연락을 통해 예약이 확정됩니다.</span></h5>
        <div class="inner_reser_des subreser">
          <p class="nortxt"><span class="reser_red">온라인 예약 시 당일 예약은 불가능하며,</span></p>
          <p class="nortxt">예약 하신 후 통보없이 예약 일정을 어기신다면 치료를 기다리는<br>다른 환자분들께 피해를 주게되므로 가급적 환자분의 협조를 부탁드립니다.</p>
        </div>
      </div>
      <div class="reser_center_section">
        <h2 class="select_title h5"><span>STEP1.</span>진료센터를 선택해주세요.</h2>
        <ul class="reser_center">
          <?php
          $sql = "SELECT ca_name FROM g5_write_reser_doctors WHERE wr_3=0";
          $res = sql_query($sql);
          for($i=0 ; $row=sql_fetch_array($res) ; $i++){ ?>
            <li class="hoverstyle"><?=$row['ca_name']?></li>
          <?php } ?>
        </ul>
      </div>

      <div class="reser_doctor_section">
        <h2 class="select_title h5"><span>STEP2.</span>의료진을 선택해주세요.</h2>
        <ul class="reser_doctors_list">
          <li class="noselect">선택된 의료진이 없습니다. 진료센터를 선택하시면 센터의료진 리스트가 표시됩니다.</li>
        </ul>
      </div>

      <div class="reser_date_section">
    		<h2 class="select_title h5"><span>STEP3.</span>원하시는 예약일자를 선택해주세요.</h2>
    		<div id="reservationDate"></div>
    	</div>

      <div class="reser_time_section">
        <h2 class="select_title h5"><span>STEP4.</span>예약시간을 선택해주세요.</h2>
        <ul class="reser_doctors_time">
          <li>09:00</li>
          <li>09:30</li>
          <li>10:00</li>
          <li>10:30</li>
          <li>11:00</li>
          <li>11:30</li>
          <li>12:00</li>
          <li>12:30</li>
          <li>14:00</li>
          <li>14:30</li>
          <li>15:00</li>
          <li>15:30</li>
          <li>16:00</li>
          <li>16:30</li>
          <li>17:00</li>
          <li>17:30</li>
        </ul>
      </div>

      <form class="reser_form" action="<?php echo G5_URL?>/bbs/write_update.php?bo_table=reservation" method="post" enctype="multipart/form-data" name="fwrite" id="fwrite2" onsubmit="return checking_form();">
        <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
        <input type="hidden" name="w" value="<?php echo $w ?>">
        <input type="hidden" name="bo_table" value="reservation">
        <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
        <input type="hidden" name="sca" value="<?php echo $sca ?>">
        <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
        <input type="hidden" name="stx" value="<?php echo $stx ?>">
        <input type="hidden" name="spt" value="<?php echo $spt ?>">
        <input type="hidden" name="sst" value="<?php echo $sst ?>">
        <input type="hidden" name="sod" value="<?php echo $sod ?>">
        <input type="hidden" name="page" value="<?php echo $page ?>">
        <div class="current_selected_result">
          <h5 class="h5">예약한 정보가 맞는지 다시한번만 확인 부탁드릴께요.</h5>
          <input type="text" id="chk_center" class="selected_center" name="wr_2" value="">
          <input type="text" id="chk_doctor" class="selected_doctor" name="wr_3" value="">
          <input type="text" id="chk_date" class="selected_date" name="wr_4" value="">
          <input type="text" id="chk_time" class="selected_time" name="wr_5" value="">
        </div>
        <table class="reser_form_table tbl_wrap">
          <thead>
            <tr>
              <th colspan="2" class="reser_form_title h5"><span>STEP5.</span>예약자정보를 입력해주세요</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th><label for="c1">예약자 성명</label></th>
              <td><input type="text" id="chk_name" name="wr_name" value="<?php echo $is_member ? $member['mb_name'] : ''; ?>" placeholder="이름"></td>
            </tr>
            <tr>
              <th><label for='c6'>생년월일</label></th>
              <td><input type="text" name="wr_6" placeholder="8자리 숫자만 입력해주세요"></td>
            </tr>
            <tr>
              <th><label for='c2'>예약자 연락처</label></th>
              <td><input type="text" id="chk_number" name="wr_subject" placeholder="예시)010-1111-1111"></td>
            </tr>
            <tr>
              <th><span>내원 기록</span></th>
              <td>
                <label for="c3">초진</label><input id="c3" type="radio" name="wr_1">
                <label for="c4">재진</label><input id="c4" type="radio" name="wr_1">
              </td>
            </tr>
            <tr>
              <th><label for="c5">예약내용</label></th>
              <td><textarea name="wr_content" id="chk_contents" placeholder="아프신 부위 및 증상을 남겨주세요. 예약내용을 남겨주시면 연락처로 상담전화를 드립니다."></textarea></td>
            </tr>
          </tbody>
        </table>
    		<span class="combo check"><input type="checkbox" id="chk_agree"><label for="chk_agree">개인정보수집동의</label></span>
        <div class="reser_submit_box dframe">
          <input class="downstyle downstyle1" type="submit" value="온라인예약 신청하기">
          <input class="downstyle downstyle2" type="reset" value="취소">
        </div>

      </form>



    </div>
  </div>

</section>



<script>
$(document).ready(function(){
  /*의료진 정보 가져오기*/
  var centername;
  var time_flag=false;

  $(".reser_center > li").click(function(){
    time_flag=false;
    $("#reservationDate").datepicker("destroy");
    $(".selected_center").removeClass("in_active");
    $(".selected_doctor").removeClass("in_active");
    $(".selected_date").removeClass("in_active");
    $(".selected_time").removeClass("in_active");

    $(".selected_center").val("");
    $(".selected_doctor").val("");
    $(".selected_date").val("");
    $(".selected_time").val("");


    centername = $(this).text();
    $(".selected_center").val(centername);
    $(".selected_center").addClass("in_active");
    console.log(centername); // string 센터이름
    $.ajax({
      url:"getReserDoctors.php",
      data: {name:centername},
      dataType:'json',
      type:'post',
      success:function(obj){
        var temp="";
        var noresult="";
        console.log(obj.data);
        for(var i=0 ; i<obj.data.length ; i++){
          if(obj.data.length == 0){
            noresult+="<li class='no_select_doctor'>선택된 의료진이 없습니다 진료센터를 먼저 선택해주세요.</li>";
            temp="";
            break;
          }
          temp+="<li class='hoverstyle linkstyle2'><div class='doc_img_frame'><img src='../data/file/reser_doctors/"+obj.data[i].img+"'></div><h3 class='doc_center_name h4'>"+obj.data[i].center+"</h3><p class='doc_list_name'>"+"Dr."+obj.data[i].name+"</p></li>";
        }
        $(".reser_doctors_list").html(temp);
        $(".selected_doctor").val('');
        $(".selected_doctor").removeClass("in_active");
      },
      error:function(){
        console.log("error");
      }
    });

  });

  $(document).on("click",".reser_doctors_list > li",function(){
    time_flag=false;
    $("#reservationDate").datepicker("destroy");

    $(".selected_doctor").removeClass("in_active");
    $(".selected_date").removeClass("in_active");
    $(".selected_time").removeClass("in_active");

    $(".selected_doctor").val("");
    $(".selected_date").val("");
    $(".selected_time").val("");



    var holidaylist="";
    var doctorname="";

    doctorname = $(this).children("p").text();
    var li_index = $(this).index();
    console.log(doctorname);
    $(".selected_doctor").val(doctorname);
    $(".selected_doctor").addClass("in_active");

    
    if(doctorname =='Dr.김대하'){


    $.ajax({
      url:"getReserDoctors.php",
      data: {name:centername},
      dataType:'json',
      type:'post',
      success:function(obj){
        holidaylist = obj.data[li_index].holiday;
        var holilist = holidaylist.split(',');

        console.log(typeof(holidaylist)+"holidaylist");
        console.log((holilist));

        /*원하는 날짜 선택하기*/
        $( "#reservationDate" ).datepicker({
      		minDate : "0D",
      		maxDate : "+2M",
      		navigationAsDateFormat: true,
      		prevText: 'Next',
      	  nextText: 'Prev',
      		dateFormat : 'yy-mm-dd D',
      		dayNamesMin : [  '일', '월', '화', '수', '목', '금', '토' ],
      		monthNames : [ '1월', '2월', '3월', '4월', '5월', '6월', '7월','8월', '9월', '10월', '11월', '12월' ],
      		monthNamesShort : [ '1월', '2월', '3월', '4월', '5월', '6월','7월', '8월', '9월', '10월', '11월', '12월' ],
          yearSuffix: '년',
          beforeShowDay: function(date){
      			var day = date.getDay();
            var hold = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();

            if(hold == '2022-2-16' || hold == '2021-7-27'||
            hold == '2021-7-28'){
              return false;
            }

            // return [
            //   day!=holidaylist[0] &&
            //   day!=holidaylist[1] &&
            //   day!=holidaylist[2] &&
            //   day!=holidaylist[3] &&
            //   day!=holidaylist[4] &&
            //   day!=holidaylist[5] &&
            //   day!=holidaylist[6]
            // ];

            return [
              day!=holilist[0] &&
              day!=holilist[1] &&
              day!=holilist[2] &&
              day!=holilist[3] &&
              day!=holilist[4] &&
              day!=holilist[5] &&
              day!=holilist[6]
            ];

            // return [day != 0];

            // return [day != 1 && day != 2 && day != 3 && day != 4 && day != 5 && day != 6];
      		},
      		onSelect: function( date, el ) {
            time_flag=false;
            console.log("holidaylist" + holidaylist);

              var day  = el.selectedDay,
                  mon  = el.selectedMonth+1,
                  year = el.selectedYear;
              console.log(date);

              console.log(year+"년"+mon+"월"+day+"일");
              if( date.split(' ')[0] == "<?= date("Y-m-d")?>" ) {
                alert('당일예약은 할 수 없습니다.');
              	return;
              } else {
                $(".selected_date").val(year+"년"+mon+"월"+day+"일");
                $(".selected_date").addClass("in_active");
        	      $('#sel_date').val(date.split(' ')[0]);
        				$('#selDateStr').text(year+'년 ' + (mon+1) + '월 '+day+'일');
                time_flag=true;

              }

      		}
      	});


      },
      error:function(){
        console.log("error");
      }
    });



  } else{

    $.ajax({
      url:"getReserDoctors.php",
      data: {name:centername},
      dataType:'json',
      type:'post',
      success:function(obj){
        holidaylist = obj.data[li_index].holiday;
        var holilist = holidaylist.split(',');

        console.log(typeof(holidaylist)+"holidaylist");
        console.log((holilist));

        /*원하는 날짜 선택하기*/
        $( "#reservationDate" ).datepicker({
          minDate : "0D",
          maxDate : "+2M",
          navigationAsDateFormat: true,
          prevText: 'Next',
          nextText: 'Prev',
          dateFormat : 'yy-mm-dd D',
          dayNamesMin : [  '일', '월', '화', '수', '목', '금', '토' ],
          monthNames : [ '1월', '2월', '3월', '4월', '5월', '6월', '7월','8월', '9월', '10월', '11월', '12월' ],
          monthNamesShort : [ '1월', '2월', '3월', '4월', '5월', '6월','7월', '8월', '9월', '10월', '11월', '12월' ],
          yearSuffix: '년',
          beforeShowDay: function(date){
            var day = date.getDay();
            // var hold = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();

           
            // console.log(hold);

            // if(hold == '2021-6-10' || hold == '2021-6-11'|| hold == '2021-6-14'|| hold == '2021-6-15'|| hold == '2021-6-16'|| hold == '2021-6-17'){
            //   return false;
            // }

            return [
              day!=holilist[0] &&
              day!=holilist[1] &&
              day!=holilist[2] &&
              day!=holilist[3] &&
              day!=holilist[4] &&
              day!=holilist[5] &&
              day!=holilist[6]
            ];

            // return [day != 1];

            // return [day != 1 && day != 2 && day != 3 && day != 4 && day != 5 && day != 6];
          },
          onSelect: function( date, el ) {
            time_flag=false;
            console.log("holidaylist" + holidaylist);

              var day  = el.selectedDay,
                  mon  = el.selectedMonth+1,
                  year = el.selectedYear;
              console.log(date);

              console.log(year+"년"+mon+"월"+day+"일");
              if( date.split(' ')[0] == "<?= date("Y-m-d")?>" ) {
                alert('당일예약은 할 수 없습니다.');
                return;
              } else {
                $(".selected_date").val(year+"년"+mon+"월"+day+"일");
                $(".selected_date").addClass("in_active");
                $('#sel_date').val(date.split(' ')[0]);
                $('#selDateStr').text(year+'년 ' + (mon+1) + '월 '+day+'일');
                time_flag=true;

              }

          }
        });

      },
      error:function(){
        console.log("error");
      }
    });


  }

  });
  // console.log(holidaylist);
  // var holilist = holidaylist.split(",");







  $(".reser_doctors_time > li").click(function(){
    if(time_flag==true){
      var selected_time = $(this).text();
      $(".selected_time").val(selected_time);
      $(".selected_time").addClass("in_active");
    }else{
      alert("날짜를 먼저 선택해주세요.");
    }

  });




});

function checking_form(){
  var chk_center = document.getElementById('chk_center');
  var chk_doctor = document.getElementById('chk_doctor');
  var chk_date = document.getElementById('chk_date');
  var chk_time = document.getElementById('chk_time');
  var chk_name = document.getElementById('chk_name');
  var chk_number = document.getElementById('chk_number');
  var chk_contents = document.getElementById('chk_contents');
  var chk_agree = document.getElementById('chk_agree');

  if($(chk_center).val() == ""){
    alert('센터를 선택해주세요');
    return false;
  }else if($(chk_doctor).val() == ""){
    alert('의료진을 선택해주세요');
    return false;
  }else if($(chk_date).val() == ""){
    alert('날짜를 선택해주세요');
    return false;
  }else if($(chk_time).val() == ""){
    alert('시간를 선택해주세요');
    return false;
  }else if($(chk_name).val() == ""){
    alert('이름을 입력해주세요');
    return false;
  }else if($(chk_number).val() == ""){
    alert('연락처를 입력해주세요');
    return false;
  }else if($(chk_contents).val() == ""){
    alert('상담내용을 입력해주세요');
    return false;
  }else if($(chk_agree).prop("checked")!=true){
    alert('개인정보수집 동의에 체크해주세요');
    return false;
  }else{
    alert("신청이 접수 되었습니다");
    return true;
  }

}

</script>
<?php
  include_once(G5_PATH.'/tail.php');

?>
