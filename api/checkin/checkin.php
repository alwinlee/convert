<?php
    session_start();
    if(isset($_SESSION["convert_account"])==false||$_SESSION["convert_account"]==""||$_SESSION["convert_area"]!="convert"){
        $code=-2;
        $desc="auth failed";
        $json_ret=array("code"=>$code,"desc"=>$desc);echo json_encode($json_ret);exit;
    }

    header("Content-type: application/json; charset=utf-8");
    require_once("../lib/connmysql.php");
    require_once("../lib/common.php");
    ini_set("error_reporting",0);
    ini_set("display_errors","Off"); // On : open, O

     // check db exist
    $currY=date('Y');
    $currM=date('m');
    //if ($currM>=10){$currY+=1;}
    $tbname="convert_".$currY;
    check_convert_db($tbname);

    $code=-1;
    $desc="data unknown";
    $data=json_decode(file_get_contents('php://input'), true);

    if(isset($data['id'])==false||isset($data['checkin'])==false){
        $json_ret=array("code"=>$code,"desc"=>$desc);echo json_encode($json_ret);exit;
    }

    $id = $data['id'];
    $checkin = $data['checkin'];
    if($id <= 0 || $checkin < 0 || $checkin > 1){
        $json_ret=array("code"=>$code,"desc"=>$desc);echo json_encode($json_ret);exit;
    }

    //更新學生報到資料
    $sql="update `".$tbname."` set `checkin`=".$checkin." where `id`=".$id." limit 1";
    $record=mysql_query($sql);

    $code=1;
    $desc="success";
    $json_ret=array("code"=>$code,"desc"=>$desc,"result"=>$record);
    echo json_encode($json_ret);//header("Content-Type: text/html; charset=utf-8");
?>

