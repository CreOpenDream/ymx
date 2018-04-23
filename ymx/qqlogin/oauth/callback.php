<?php
require_once("../API/qqConnectAPI.php");
if(empty($_SESSION['access_token']) && empty($_SESSION['openid']) ){
$qc = new QC();
$access_token = $qc->qq_callback();
$openid =  $qc->get_openid();
$_SESSION['access_token'] = $access_token;
$_SESSION['openid'] = $openid;

$qc = new QC($access_token, $openid);	
}
header("location:http://www.ncgds.cn/ymx");
