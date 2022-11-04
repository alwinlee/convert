<?php
    ini_set("error_reporting",0);
    ini_set("display_errors","Off"); // On : open, O
    session_start();
    unset($_SESSION["convert_username"]);
    unset($_SESSION["convert_account"]);
    unset($_SESSION["convert_username"]);
    unset($_SESSION["convert_userlevel"]);
    unset($_SESSION["convert_auth"]);
    unset($_SESSION["convert_key"]);
    unset($_SESSION["convert_area"]);
    unset($_SESSION["convert_expire"]);

    header("Location: ../../pages/index.html");
    /*
    $data[]=Array("AAA","BBB","CCC","DDD","EEE","FFF");
    $data[]=Array("AAA","BBB","CCC","DDD","EEE","FFF");
    $data[]=Array("AAA","BBB","CCC","DDD","EEE","FFF");
    $data[]=Array("AAA","BBB","CCC","DDD","EEE","FFF");
    $data[]=Array("AAA","BBB","CCC","DDD","EEE","FFF");
    $data[]=Array("AAA","BBB","CCC","DDD","EEE","FFF");
    $data[]=Array("AAA","BBB","CCC","DDD","EEE","FFF");
    $data[]=Array("AAA","BBB","CCC","DDD","EEE","FFF");
    $data[]=Array("AAA","BBB","CCC","DDD","EEE","FFF");
    $data[]=Array("AAA","BBB","CCC","DDD","EEE","FFF");

    $json_data = array(
                "draw"            => $draw,
                "recordsTotal"    => 300,
                "recordsFiltered" => 300,
                "data"            => $data
            );
   header("Content-type: application/json");
   //header("Content-Type: text/html; charset=utf-8");
   echo json_encode($json_data);  */
?>

