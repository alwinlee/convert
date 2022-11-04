<?php
    header("Content-Type: text/html; charset=utf-8");
    require_once("./api/lib/connmysql.php");
    session_start();
    date_default_timezone_set('Asia/Taipei');
    $nowDate=date('Y-m-d');

    // 將SESSION資料清除，並重導回首頁
    unset($_SESSION["convert_account"]);
    unset($_SESSION["convert_username"]);
    unset($_SESSION["convert_auth"]);
    unset($_SESSION["convert_userlevel"]);
    unset($_SESSION["convert_key"]);
    unset($_SESSION["convert_group"]);
    unset($_SESSION["convert_subgroup"]);
    unset($_SESSION["convert_groupexpire"]);
    unset($_SESSION["convert_area"]);
    unset($_SESSION["convert_expire"]);
    unset($_SESSION["convert_expire1"]);
    unset($_SESSION["convert_expire2"]);
    unset($_SESSION["convert_expire3"]);
    unset($_SESSION["convert_expire4"]);
    unset($_SESSION["convert_expire5"]);
    unset($_SESSION["convert_expire6"]);
    unset($_SESSION["convert_expire7"]);
    unset($_SESSION["convert_expire8"]);
    unset($_SESSION["convert_expire9"]);
    unset($_SESSION["convert_expire10"]);
    unset($_SESSION["convert_expire11"]);
    unset($_SESSION["convert_expire12"]);
    unset($_SESSION["convert_expire13"]);
    unset($_SESSION["convert_expire14"]);
    unset($_SESSION["convert_expire15"]);
    unset($_SESSION["convert_expire16"]);
    unset($_SESSION["convert_expire17"]);
    unset($_SESSION["convert_expire18"]);
    unset($_SESSION["convert_expire19"]);
    unset($_SESSION["convert_expire20"]);

    //查詢登入會員資料
    $sql="select * from `member_convert` where `account`='".$_POST["account"]."' and `password`=PASSWORD('".$_POST["password"]."')";
    $record=mysql_query($sql);
    $numrows=mysql_num_rows($record);
    if($numrows<=0){unset($_SESSION["convert_area"]);header("Location: index.php");exit;}

    $row=mysql_fetch_array($record, MYSQL_ASSOC);
    if ($nowDate>$row["expire"]){//帳號過期
        unset($_SESSION["convert_area"]);header("Location: index.php");exit;
    }

    // success - keep session data
    $_SESSION["convert_account"]=$row["account"];
    $_SESSION["convert_username"]=$row["name"];
    $_SESSION["convert_userlevel"]=$row["level"];
    $_SESSION["convert_auth"]=$row["auth"];
    $_SESSION["convert_key"]=$row["key"];
    $_SESSION["convert_area"]="convert";
    $_SESSION["convert_expire"]=$row["expire"];

    $_SESSION["convert_group"]=$row["group"];
    $_SESSION["convert_subgroup"]=$row["subgroup"];
    $_SESSION["convert_groupexpire"]=$row["groupexpire"];
    $_SESSION["convert_expire"]=$row["expire"];
    $_SESSION["convert_expire1"]=$row["expire1"];
    $_SESSION["convert_expire2"]=$row["expire2"];
    $_SESSION["convert_expire3"]=$row["expire3"];
    $_SESSION["convert_expire4"]=$row["expire4"];
    $_SESSION["convert_expire5"]=$row["expire5"];
    $_SESSION["convert_expire6"]=$row["expire6"];
    $_SESSION["convert_expire7"]=$row["expire7"];
    $_SESSION["convert_expire8"]=$row["expire8"];
    $_SESSION["convert_expire9"]=$row["expire9"];
    $_SESSION["convert_expire10"]=$row["expire10"];
    $_SESSION["convert_expire11"]=$row["expire11"];
    $_SESSION["convert_expire12"]=$row["expire12"];
    $_SESSION["convert_expire13"]=$row["expire13"];
    $_SESSION["convert_expire14"]=$row["expire14"];
    $_SESSION["convert_expire15"]=$row["expire15"];
    $_SESSION["convert_expire16"]=$row["expire16"];
    $_SESSION["convert_expire17"]=$row["expire17"];
    $_SESSION["convert_expire18"]=$row["expire18"];
    $_SESSION["convert_expire19"]=$row["expire19"];
    $_SESSION["convert_expire20"]=$row["expire20"];
    header("Location: ./pages/checkin.php");
    exit;
