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
                <ul class="sub_tab tab6 innertop innerbot">
                    <li><a href="menu10_1.php">공지사항</a></li>
                    <li><a href="menu10_2.php">이벤트</a></li>
                    <li><a href="menu10_3.php">미디어 / 보도자료</a></li>
                    <li><a href="menu10_4.php">시술 후 주의사항</a></li>
                    <li class="on"><a href="menu10_5.php">리셋 리얼 모델 모집</a></li>
                </ul>
            </div>
            <div class="content page">
                <h3>
                    <span>RESET CLINIC</span>
                    <i>
                        <em ><b>리셋 리얼 모델 모집</b></em>
                    </i>
                </h3>
                <div class=" innerbot">
                    <h6>리셋 다이어트 모델 지원 시 사진 찍는 방법</h6>
                    <p>
                        반드시 사진을 보내주셔야 모델 선발이 됩니다. <br>정면 / 45도 / 측면을 바른 자세로 흐릿하지 않게 각 1장씩 촬영 후 첨부해주세요.
                    </p>
                    <ul class="model_img">
                        <li>
                            <div class="img_wrap">
                                <img src="./img/m105_1.png" alt="정면">
                            </div>
                            <p>정면</p>
                        </li>
                        <li>
                            <div class="img_wrap">
                                <img src="./img/m105_2.png" alt="45도">
                            </div>
                            <p>45도</p>
                        </li>
                        <li>
                            <div class="img_wrap">
                                <img src="./img/m105_3.png" alt="전신">
                            </div>
                            <p>전신 </p>
                        </li>
                    </ul>

                    <form class="application-form">
                        <div class="model_wrap ">
                            <p class="online_tit">1. 인적 사항</p>
                            <div class="model1">
                                <label for="name">이름</label>
                                <input class="online_box" type="text" id="name" placeholder="이름을 입력해주세요.">
                    
                                <label for="dob">생년월일</label>
                                <input class="online_box"  type="date" id="dob">
                    
                                <label for="height">키</label>
                                <input class="online_box"  type="date" id="height">
                    
                                <label for="weight">몸무게</label>
                                <input class="online_box"  type="number" id="weight" placeholder="kg">
                    
                                <label for="phone">휴대폰번호</label>
                                <div class="tel">
                                    <select class="online_box"  id="phone-prefix">
                                        <option value="010">010</option>
                                            <option value="011">011</option>
                                            <option value="016">016</option>
                                            <option value="017">017</option>
                                            <option value="018">018</option>
                                            <option value="019">019</option>
                                    </select>
                                    <input class="online_box"  type="text" id="phone-part1" placeholder="">
                                    <input class="online_box"  type="text" id="phone-part2" placeholder="">
                                </div>

                                <label for="address">거주지</label>
                                <input  class="online_box" type="text" id="address">
                    
                                <label>결혼여부</label>
                                <div class="marry_wrap">
                                    <label for="part1">
                                        <input type="radio" name="etc1" value="미혼" id="part1" checked=""> 미혼
                                    </label>
                                    <label for="part2">
                                        <input type="radio" name="etc1" value="기혼" id="part2"> 기혼
                                    </label>
                                </div>
                            </div>
                        </div>
                
                        <div class="model_wrap">
                            <p class="online_tit">2. 지원 동기</p>
                            <textarea  class="online_box" id="motivation" rows="5"></textarea>
                        </div>
                
                        <div class="model_wrap">
                            <p class="online_tit">3. 파일 첨부</p>
                            <div class="file_add">
                                <div id="display_file1" >
                                    <label id="file1" for="file1">파일 1</label>
                                    <input type="text" class="s_text" id="file_check1" disabled=""><div class="btn_type2"><div class="btn_inner"><span>업로드</span><input type="file" name="file1" cname="file_check1" class="s_upload"></div></div>
                                </div>
                                            <div id="display_file2" >
                                    <label id="file2" for="file2">파일 2</label>
                                    <input type="text" class="s_text" id="file_check2" disabled=""><div class="btn_type2"><div class="btn_inner"><span>업로드</span><input type="file" name="file2" cname="file_check2" class="s_upload"></div></div>
                                </div>
                                            <div id="display_file3" >
                                    <label id="file3" for="file3">파일 3</label>
                                    <input type="text" class="s_text" id="file_check3" disabled=""><div class="btn_type2"><div class="btn_inner"><span>업로드</span><input type="file" name="file3" cname="file_check3" class="s_upload"></div></div>
                                </div>
                                            <div id="display_file4" >
                                    <label id="file4" for="file4">파일 4</label>
                                    <input type="text" class="s_text" id="file_check4" disabled=""><div class="btn_type2"><div class="btn_inner"><span>업로드</span><input type="file" name="file4" cname="file_check4" class="s_upload"></div></div>
                                </div>
                                            <div id="display_file5" >
                                    <label id="file5" for="file5">파일 5</label>
                                    <input type="text" class="s_text" id="file_check5" disabled=""><div class="btn_type2"><div class="btn_inner"><span>업로드</span><input type="file" name="file5" cname="file_check5" class="s_upload"></div></div>
                                </div>
                                            <div id="display_file6" >
                                    <label id="file6" for="file6">파일 6</label>
                                    <input type="text" class="s_text" id="file_check6" disabled=""><div class="btn_type2"><div class="btn_inner"><span>업로드</span><input type="file" name="file6" cname="file_check6" class="s_upload"></div></div>
                                </div>
                            </div>
                        </div>
                
                        <div class="model_wrap">
                            <p class="online_tit">개인정보 수집, 이용 동의 안내</p>
                            <div class="online_box">
                                <p>
                                    <i>개인정보 수집, 이용 동의 안내</i><br>
                                    가입필수정보<br>
                                    ※ 수집 항목 : 이름, 전화번호<br>
                                    ※ 수집 목적 : 예약 서비스 이행을 위한 연락<br>
                                    ※ 보유 기간 : 1년(상담 목적 달성 확인시)
                                </p>
                            </div>
                            <label for="post_agree" class="post_agree_txt">
                                <input type="checkbox" id="post_agree" name="agreecheck">
                                <p>위 개인정보 보호정책에 동의합니다. <br>(동의를 하셔야 모델지원이 가능합니다.)</p>
                            </label>
                        </div>
                
                        <button type="submit"><p>지원하기</p></button>
                    </form>
                    

                </div>
            </div>
        </main>
</div>
<script>

    

</script>

<?php
include_once(G5_PATH.'/tail.php');