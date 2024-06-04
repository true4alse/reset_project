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
                    <li><a href="menu11_1.php">온라인 상담</a></li>
                    <li class="on"><a href="menu11_2.php">온라인 예약</a></li>
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
                    <div class="online_wrap">
                        <p class="online_tit">개인정보 수집, 이용 동의 안내</p>
                        <div class="online_box">
                            <p>
                                <i>수집 항목</i> : 이름, 이메일, 전화번호 <br>
                                <i>수집 목적</i> : 상담 서비스 이행을 위한 연락 <br>
                                <i>보유 기간</i> : 1년
                            </p>
                        </div>
                        <label for="post_agree" class="post_agree_txt">
                            <input type="checkbox" id="post_agree" name="agreecheck">
                            <p>위 내용에 동의합니다. (동의를 거부할 수 있습니다. 단, 동의 거부시에는 서비스 이용이 제한됩니다.)</p>
                        </label>
                    </div>
                    <div class="online_wrap online2">
                        <div>
                            <p class="online_tit">예약일 선택</p>
                            <div class="online_box">
                                달력
                            </div>
                            <p class="online_tit">예약 시간 선택</p>
                            <div class="rp_title">
                                <p>선택된 날짜</p>
                                <input type="text" name="resdate" id="aacaa" class="tcal tcalInput tcalActive online_box" value="" readonly="">
                                <p>시간 </p>
                                <select name="restime" class="online_box">
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
                                        <select name="etc3" class="reserve_sel_type sel_type1">
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
                                        <input type="text" id="name" name="name" maxlength="20" class="reserve-text reserve-name">
                                    </td>
                                </tr>
                                <tr>
                                    <th>연락처</th>
                                    <td class="tel">
                                        <select class="reserve_sel_type sel_type3" id="hphone1" name="hphone1">
                                            <option value="010">010</option>
                                            <option value="011">011</option>
                                            <option value="016">016</option>
                                            <option value="017">017</option>
                                            <option value="018">018</option>
                                            <option value="019">019</option>
                                        </select>
                                        <input type="text" id="hphone2" name="hphone2" maxlength="4" class="reserve-text reserve-hp-sec">
                                        <input type="text" id="hphone3" name="hphone3" maxlength="4" class="reserve-text reserve-hp-sec">
                                    </td>
                                </tr>
                                <tr>
                                    <th>이메일</th>
                                    <td>
                                        <input type="text" id="email" name="email" maxlength="30" class="reserve-text reserve-email" placeholder="ex) abc@abcde.com">
                                    </td>
                                </tr>
                                <tr>
                                    <th>생년월일</th>
                                    <td>
                                        <input type="text" name="etc2" class="reserve-text reserve-birth" placeholder="ex) 840709 / 생년월일" maxlength="6">
                                    </td>
                                </tr>
                                <tr>
                                    <th>진료구분</th>
                                    <td class="reserve_part_wrap">
                                        <label for="part1">
                                            <input type="radio" name="etc1" value="초진" id="part1" checked=""> 초진
                                        </label>
                                        <label for="part2">
                                            <input type="radio" name="etc1" value="재진" id="part2"> 재진
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>메모</th>
                                    <td class="">
                                        <textarea name="contents" class="reserve-contents-box"></textarea>
                                    </td>
                                </tr>
                            </tbody></table>
                        </div>
                    </div>
                    <button type="submit"><p>지원하기</p></button>
                </div>
            </div>
        </main>
</div>
<script>

    

</script>

<?php
include_once(G5_PATH.'/tail.php');