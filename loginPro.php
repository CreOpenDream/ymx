<?php
	header("Content-Type:text/html;charset=utf-8");
	session_start();
	$validate="";
	if(isset($_POST['validate'])){
		$validate=$_POST["validate"];
		echo "您刚才输入的是：".$_POST["validate"]."<br>状态：";
		if($validate!=$_SESSION["authnum_session"]){
		//判断session值与用户输入的验证码是否一致;
			echo "<font color=red>输入有误</font>"; 
		}else{
			echo "<font color=green>通过验证</font>"; 
		}
	} 
?>