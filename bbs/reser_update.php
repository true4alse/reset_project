<?php
include_once('./_common.php');
include_once(G5_LIB_PATH.'/naver_syndi.lib.php');
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

    
    // echo $_REQUEST["rid"];
    // echo $_REQUEST["rcon"];

    $rid = $_REQUEST["rid"];
    $rcon = $_REQUEST["rcon"];

    $rid = intval($rid); // 정수형으로 변환하여 SQL 인젝션 방지
    $rcon = addslashes($rcon); // 문자열에 포함된 특수 문자를 이스케이프하여 SQL 인젝션 방지

    // UPDATE `g5_write_reservation` SET `wr_10` = '확인함' WHERE `g5_write_reservation`.`wr_id` = 13;
    $sql = "UPDATE g5_write_reservation SET wr_10='$rcon' WHERE wr_id=$rid";
    echo $sql;
    sql_query($sql);

    goto_url("/bbs/board.php?bo_table=reservation");

?>