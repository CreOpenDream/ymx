<?php
	header("Content-Type:text/html;charset=utf-8");
	session_start();
	include "include/dbconn.php";

	if(isset($_SESSION['UserId']) && isset($_POST['Action'])){
		$action = $_POST['Action'];
		$userid = $_SESSION['UserId'];
		switch($action){
			case 1:
				$nickname=$_POST["NickName"];
				$birthdate=$_POST["Birthdate"];
				$sex=$_POST["Sex"];
				$profession=$_POST["Profession"];
				$occupation=$_POST["Occupation"];
				$qq=$_POST["Qq"];
				
				//判断该用户名是否存在
	$sql = "select * from tb_user where user_id='{$userid}';";
	//插入语句
    if($res = mysqli_query($link,$sql)){
    	$num=mysqli_num_rows($res);
		if($num<1){
			//不存在该用户,登录失败
			echo "2";
		}else{
			//查找该用户成功，登录成功
  			
  		
  			$sqlupdate = "update tb_user set user_nickname='{$nickname}', user_qq='{$qq}', user_sex='{$sex}', user_profession='{$profession}', user_occupation='{$occupation}', user_birthdate='{$birthdate}' where user_id='{$userid}';";
  			$resupdate = mysqli_query($link,$sqlupdate);
  			echo $resupdate;
		}
	
 	}else{//end $res
 		//查询语句出错
 echo "3";
 	}
		
	
			break;
		}
	}
	
?>