<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 2;

if ($is_checkbox) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

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
<?php include_once(G5_PATH.'/_bbs_list_component/bbs_ul_reset_reser.php'); ?>
<div class="content page">
    <h3>
        <span>RESET CLINIC</span>
        <i>
            <em ><b><?php echo $board['bo_subject'] ?></b></em>
        </i>
    </h3>
</div>

<form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
<input type="hidden" name="stx" value="<?php echo $stx ?>">
<input type="hidden" name="spt" value="<?php echo $spt ?>">
<input type="hidden" name="sst" value="<?php echo $sst ?>">
<input type="hidden" name="sod" value="<?php echo $sod ?>">
<input type="hidden" name="page" value="<?php echo $page ?>">
<input type="hidden" name="sw" value="">

<?php if ($rss_href || $write_href) { ?>
<ul class="<?php echo isset($view) ? 'view_is_list' : 'top btn_bo_user';?>">
	
    <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b03 btn" title="RSS"><i class="fa fa-rss" aria-hidden="true"></i><span class="sound_only">RSS</span></a></li><?php } ?>
    <?php if ($is_admin == 'super' || $is_auth) {  ?>
	<li>
		<button type="button" class="btn_more_opt btn_b03 btn is_list_btn" title="게시판 리스트 옵션"><i class="fa fa-ellipsis-v" aria-hidden="true"></i><span class="sound_only">게시판 리스트 옵션</span></button>
		<?php if ($is_checkbox) { ?>	
        <ul class="more_opt is_list_btn">
            <li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"><i class="fa fa-trash-o" aria-hidden="true"></i> 선택삭제</button></li>
            <li><button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"><i class="fa fa-files-o" aria-hidden="true"></i> 선택복사</button></li>
            <li><button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"><i class="fa fa-arrows" aria-hidden="true"></i> 선택이동</button></li>
        </ul>
        <?php } ?>
	</li>
    <?php } ?>
	
</ul>
<?php } ?>
<!-- 게시판 목록 시작 -->
<div id="bo_list">

    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']) ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>

    <div class="list_01">
        <?php if ($is_checkbox) { ?>
        <div class="all_chk chk_box">
            <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="selec_chk">
            <label for="chkall">
            	<span></span>
            	<b class="sound_only">현재 페이지 게시물 </b> 전체선택
            </label>
        </div>
        <?php } ?>
        <ul>
            <?php for ($i=0; $i<count($list); $i++) { ?>
            <li class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?>">
                <?php if ($is_checkbox) { ?>
                <div class="bo_chk chk_box">
                    <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="selec_chk">
                    <label for="chk_wr_id_<?php echo $i ?>">
                    	<span></span>
                    	<b class="sound_only"><?php echo $list[$i]['subject'] ?></b>
                    </label>   	
                </div>
                <?php } ?>

                <div class="bo_cnt">
                    <div class="reser_grid">
                        <div><span><?php echo $list[$i]['wr_name'] ?></span></div>
                        <div><span><?php echo $list[$i]['wr_subject'] ?></span></div>
                        <div><span><?php echo $list[$i]['wr_1'] ?></span></div>
                        <div><span><?php echo $list[$i]['wr_2'] ?></span></div>
                        <div><span><?php echo $list[$i]['wr_3'] ?></span></div>
                        <div><span><?php echo $list[$i]['wr_4'] ?></span></div>
                        <div><span><?php echo $list[$i]['wr_5'] ?></span></div>
                        <div><span><?php echo $list[$i]['wr_6'] ?></span></div>
                        <div><span><?php echo $list[$i]['wr_content'] ?></span></div>
                        <div><select name="wr_10" id="td_state" onchange="location.href=this.value">
                                <option value="<?php echo G5_BBS_URL; ?>/reser_update.php?rid=<?php echo $list[$i]['wr_id']; ?>&rcon=<?php echo "대기중"; ?>" <?php if($list[$i]['wr_10']=='대기중') echo 'selected'; ?>>대기중</option>
                                <option value="<?php echo G5_BBS_URL; ?>/reser_update.php?rid=<?php echo $list[$i]['wr_id']; ?>&rcon=<?php echo "예약보류"; ?>" <?php if($list[$i]['wr_10']=='예약보류') echo 'selected'; ?>>예약보류</option>
                                <option value="<?php echo G5_BBS_URL; ?>/reser_update.php?rid=<?php echo $list[$i]['wr_id']; ?>&rcon=<?php echo "예약완료"; ?>" <?php if($list[$i]['wr_10']=='예약완료') echo 'selected'; ?>>예약완료</option>
                                <option value="<?php echo G5_BBS_URL; ?>/reser_update.php?rid=<?php echo $list[$i]['wr_id']; ?>&rcon=<?php echo "부재중"; ?>" <?php if($list[$i]['wr_10']=='부재중') echo 'selected'; ?>>부재중</option>
                                <option value="<?php echo G5_BBS_URL; ?>/reser_update.php?rid=<?php echo $list[$i]['wr_id']; ?>&rcon=<?php echo "확인완료"; ?>" <?php if($list[$i]['wr_10']=='확인완료') echo 'selected'; ?>>확인완료</option>
                            </select></div>
                    </div>
                    <!-- <table>
                        <tr>
                            <th>예약자</th>
                            <td></td>
                       
                            <th>연락처</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>희망날짜</th>
                            <td></td>
                       
                            <th>희망시간</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>선택분류</th>
                            <td></td>
                       
                            <th>이메일</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>생년월일</th>
                            <td></td>
                        
                            <th>구분</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>예약내용</th>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <th>상태</th>
                            <td>
                                
                            </td>
                        </tr>
                    </table> -->
                        
                    <div>
                    
                    </div>
                </div>
				<div class="bo_info">
                    <span class="sound_only">작성자</span><?php echo $list[$i]['name'] ?>
                    <span class="bo_date">Date <?php echo $list[$i]['datetime2'] ?></span>
                	<span class="bo_view">View <?php echo number_format($list[$i]['wr_hit']) ?><span class="sound_only">회</span></span>
                	<?php if ($is_good) { ?><span class="sound_only">추천</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <?php echo $list[$i]['wr_good'] ?><?php } ?>
                    <?php if ($is_nogood) { ?><span class="sound_only">비추천</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> <?php echo $list[$i]['wr_nogood'] ?><?php } ?>
                </div>        
            </li>
            <?php } ?>
            <?php if (count($list) == 0) { echo '<li class="empty_table">게시물이 없습니다.</li>'; } ?>
        </ul>
    </div>
</div>

</form>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<!-- 페이지 -->
<?php echo $write_pages; ?>





<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == 'copy')
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}

// 게시판 리스트 관리자 옵션
jQuery(function($){
    $(".btn_more_opt.is_list_btn").on("click", function(e) {
        e.stopPropagation();
        $(".more_opt.is_list_btn").toggle();
    });
    $(document).on("click", function (e) {
        if(!$(e.target).closest('.is_list_btn').length) {
            $(".more_opt.is_list_btn").hide();
        }
    });
});
</script>
<?php } ?>
<!-- 게시판 목록 끝 -->
