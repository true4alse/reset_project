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
                            RESET YOUR BODY
                        </p>
                        <h2 class="">RESET CLINIC</h2>
                    </div>
                </div>
            </div>
            <div class="tab_content page">
                <ul class="sub_tab tab7 innertop innerbot">
                    <li class="<?php if($bo_table=="online_consulting"){echo "on";} ?>"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=online_consulting">온라인 상담</a></li>
                    <li class="on"><a href="/menu11_2.php">온라인 예약</a></li>
                    <li><a href="https://m.booking.naver.com/booking/6/bizes/255056?theme=place&entry=pll&area=pll" target="_blank">네이버 예약</a></li>
                    <li><a href="https://pf.kakao.com/_xbsWQj" target="_blank">카톡 상담</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>온라인 예약</b></em>
                    </i>
                </h3>
                <div class="innerbot">
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
                        <input type="hidden" name="wr_10" value="대기중">
                        <div class="online_wrap">
                            <p class="online_tit">개인정보 수집, 이용 동의 안내</p>
                            <div class="online_box">
                                <p>
                                    <i>수집 항목</i> : 이름, 이메일, 전화번호 <br>
                                    <i>수집 목적</i> : 상담 서비스 이행을 위한 연락 <br>
                                    <i>보유 기간</i> : 1년
                                </p>
                            </div>
                            <label for="chk_agree" class="post_agree_txt">
                                <input type="checkbox" id="chk_agree" name="agreecheck">
                                <p>위 내용에 동의합니다. (동의를 거부할 수 있습니다. 단, 동의 거부시에는 서비스 이용이 제한됩니다.)</p>
                            </label>
                        </div>
                        
                        <div class="online_wrap online2">
                            <div>
                                <p class="online_tit">예약일 선택</p>
                                <div class="online_box" id="reservationDate">
                                    <!-- <input type="date" class="date_input" id="chk_date" name="wr_1"> -->

                                </div>

                                
                                <p class="online_tit dPdirtlrks">예약 시간 선택</p>
                                <div class="rp_title">
                                    <p class="datep">선택된 날짜<input type="text" name="wr_1" id="chk_date"></p>
                                    <!-- <input type="text" name="resdate" id="aacaa" class="tcal tcalInput tcalActive online_box" value="" readonly=""> -->
                                    <p>시간 </p>
                                    <select name="wr_2" class="online_box" id="chk_time">
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:30">15:30</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <p class="online_tit">예약자 정보 입력</p>
                                <table class="reserve_post_write_table">
                                    <colgroup>
                                        <!-- <col width="20%"> -->
                                        <!-- <col width="*"> -->
                                    </colgroup>
                                    <tbody>
                                    <tr>
                                        <th>분류</th>
                                        <td class="">
                                            <select name="wr_3" class="reserve_sel_type sel_type1" id="chk_category">
                                                <option value="" hidden="">선택해주세요</option>
                                                <option value="다이어트">다이어트</option>
                                                <option value="피로통증">피로통증</option>
                                                <option value="페이스클리닉">페이스클리닉</option>
                                                <option value="스킨부스터">스킨부스터</option>
                                                <option value="제모">제모</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>이름</th>
                                        <td>
                                            <input type="text" id="chk_name" name="wr_name" maxlength="20" class="reserve-text reserve-name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>연락처</th>
                                        <td class="tel">
                                            <input type="text" id="chk_number" name="wr_subject" placeholder="ex) 010-1111-1111">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>이메일</th>
                                        <td>
                                            <input type="text" id="email" name="wr_4" maxlength="30" class="reserve-text reserve-email" placeholder="ex) abc@abcde.com">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>생년월일</th>
                                        <td>
                                            <input type="text" id="chk_birth" name="wr_5" class="reserve-text reserve-birth" placeholder="ex) 840709 / 생년월일" maxlength="6">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>진료구분</th>
                                        <td class="reserve_part_wrap">
                                            <label for="part1">
                                                <input type="radio" name="wr_6" value="초진" id="part1" checked=""> 초진
                                            </label>
                                            <label for="part2">
                                                <input type="radio" name="wr_6" value="재진" id="part2"> 재진
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>메모</th>
                                        <td class="">
                                            <textarea name="wr_content" class="reserve-contents-box" id="chk_contents"></textarea>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </div>
                        </div>
                        <p class="las"><button type="submit">지원하기</button></p>

                    </form>
                </div>
            </div>
        </main>
</div>
<script>


        var holidays = {
        "0101":{type:0, title:"신정", year:""},
        "0301":{type:0, title:"삼일절", year:""},
        "0505":{type:0, title:"어린이날", year:""},
        "0606":{type:0, title:"현충일", year:""},
        "0815":{type:0, title:"광복절", year:""},
        "1003":{type:0, title:"개천절", year:""},
        "1009":{type:0, title:"한글날", year:""},
        "1225":{type:0, title:"크리스마스", year:""},

        "0209":{type:0, title:"설날", year:"2013"},
        "0210":{type:0, title:"설날", year:"2013"},
        "0211":{type:0, title:"설날", year:"2013"},
        "0918":{type:0, title:"추석", year:"2013"},
        "0919":{type:0, title:"추석", year:"2013"},
        "0920":{type:0, title:"추석", year:"2013"},
        "0517":{type:0, title:"석가탄신일", year:"2013"}
        };


        /*원하는 날짜 선택하기*/
        $("#reservationDate").datepicker({
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
            onSelect: function( date, el ) {
                let day  = el.selectedDay,
                    mon  = el.selectedMonth+1,
                    year = el.selectedYear;
                console.log(date);
                console.log(year+"년"+mon+"월"+day+"일");
                if( date.split(' ')[0] == "<?= date("Y-m-d")?>" ) {
                    alert('당일예약은 할 수 없습니다.');
                    return;
                } else {
                    $("#chk_date").val(year+"년"+mon+"월"+day+"일");

                }

      		},
              beforeShowDay: function(day) {
         var result;
         // 포맷에 대해선 다음 참조(http://docs.jquery.com/UI/Datepicker/formatDate)
         var holiday = holidays[$.datepicker.formatDate("mmdd",day )];
         var thisYear = $.datepicker.formatDate("yy", day);

         // exist holiday?
         if (holiday) {
         if(thisYear == holiday.year || holiday.year == "") {
            result =  [false, "date-holiday", holiday.title];
         }
         }

         if(!result) {
         switch (day.getDay()) {
            case 0: // is sunday?
               result = [false, "date-sunday"];
               break;
            case 6: // is saturday?
               result = [true, "date-saturday"];
               break;
            default:
               result = [true, ""];
               break;
         }
         }

         return result;
      }
        });



    function checking_form(){
        var chk_date = document.getElementById('chk_date');
        var chk_time = document.getElementById('chk_time');
        let chk_name = document.getElementById('chk_name');
        let chk_number = document.getElementById('chk_number');
        let chk_contents = document.getElementById('chk_contents');
        let chk_cate = document.getElementById('chk_category');
        let chk_birth = document.getElementById('chk_birth');
        var chk_agree = document.getElementById('chk_agree');

        if($(chk_date).val() == ""){
            alert('날짜를 선택해주세요');
            return false;
        }else if($(chk_time).val() == ""){
            alert('시간를 선택해주세요');
            return false;
        }else if($(chk_cate).val() == ""){
            alert("원하시는 클리닉 종류를 선택해주세요")
            return false;
        }else if($(chk_name).val() == ""){
            alert('이름을 입력해주세요');
            return false;
        }else if($(chk_number).val() == ""){
            alert('연락처를 입력해주세요');
            return false;
        }else if($(chk_birth).val() == ""){
            alert('생년월일을 입력해주세요');
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