<?php
 	session_start();
	header("Content-type:text/html; charset=utf-8");
$validate="";
if(isset($_POST["validate"])){
$validate=$_POST["validate"];

if($validate!=$_SESSION["authnum_session"]){
//判断session值与用户输入的验证码是否一致;
	echo "0";
}else{
	echo "1"; 
}
} 


?>