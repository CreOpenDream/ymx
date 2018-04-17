<?php
	header("Content-Type:text/html;charset=utf-8");
	session_start();
	include "include/dbconn.php";
	if(isset($_GET['UserName']) && isset($_GET['PassWord'])){
		$username=$_GET["UserName"];
		$password=$_GET['PassWord'];
		 //判断该用户名是否存在
	$sql = "select user_id from tb_user where user_name='{$username}' and user_pwd='{$password}';";
	//插入语句
    if($res = mysqli_query($link,$sql)){
    	$num=mysqli_num_rows($res);
		if($num<1){
			//不存在该用户,登录失败
			echo "2";
		}else{
			//查找该用户成功，登录成功
  			echo "1";
  			$_SESSION['UserName'] = $username;
		}
	
 	}else{//end $res
 		//查询语句出错
 echo "3";
 	}
		
	
	}else{
		echo "you go wrong!";
	} 
?>