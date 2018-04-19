<?php
 	session_start();
	include "include/dbconn.php";
	if(!empty($_POST['UserName']) && !empty($_POST['PassWord'])){
		$username = $_POST['UserName'];
		$password = $_POST['PassWord'];
		
    $userid = '0';
    //判断该注册的用户名是否存在
	$sql = "select user_id from tb_user where user_name='{$username}';";
	//插入语句
    if($res = mysqli_query($link,$sql)){
    	$num=mysqli_num_rows($res);
		if($num<1){
			//不存在该用户,则注册新账号
			$sql = "insert into `tb_user` (`user_name`,`user_pwd`) values('{$username}','{$password}');";
			if($res = mysqli_query($link,$sql)){
				//注册成功
				echo "1";
				$_SESSION['UserName'] = $username;
			$sqlid = "select user_id from tb_user where user_name='{$username}' and user_pwd='{$password}';";
  			$row = mysqli_fetch_array(mysqli_query($link,$sqlid));	
        	$userid = $row['user_id'];    
  			$_SESSION['UserId'] = $userid;
			}else{
				//注册失败，插入语句执行失败
			echo "2";
			}
		}else{
			//查找该用户成功，则注册失败
  			echo "3";
		}
	
 	}else{//end $res
 		//查询语句出错
 echo "4";
 	}
		
	
	}else{
		echo "you go wrong!";
	}
	


?>
