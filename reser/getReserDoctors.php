<?php
  include_once('../common.php');
  /*
    각 진료센터에 해당하는 의사 추출
    2020-1-14 정현진 작성
  */
  $centername = $_POST['name'];
  // echo json_encode(array("data"=>$centername));

  $sql = "SELECT * FROM g5_write_reser_doctors AS RDT LEFT JOIN g5_board_file AS BB ON BB.wr_id = RDT.wr_id and BB.bo_table='reser_doctors' WHERE RDT.ca_name='$centername' ORDER BY RDT.wr_3 ASC";
  $result = sql_query($sql);
  for($i=0 ; $row=sql_fetch_array($result) ; $i++){
    $reserArray[] = array("center"=>$row['wr_content'],"name"=>$row['wr_subject'],"img"=>$row['bf_file'],"holiday"=>$row['wr_4']);
  }

  if(count($reserArray) > 0){
    echo json_encode(array("data"=>$reserArray));
  }else{

  }
 ?>
