<?php
	
	//
	//公用函数
	//
	
	/**
 * 返回16位md5值
 *
 * @param string $str 字符串
 * @return string $str 返回16位的字符串
 */
function short_md5($str) {
    return substr(md5($str), 8, 16);
}
	
	//接受表单数据并判断内容是否为空
	function getAndJudge($val,$str){
		if(empty($_POST[$val])){
return 0;
			echo "<script type='text/javascript'> alert('".$str."'); history.back();</script>";
			exit();
		}else{
			return $_POST[$val];
		}
	}
	
	//接受表单数据并判断内容是否为空没有 history.back();
	function getAndJudge2($val,$str){
		if(empty($_POST[$val])){
			echo "<script type='text/javascript'> alert('".$str."'); </script>";
			exit();
		}else{
			return $_POST[$val];
		}
	}
	//注册信息的插入
	/*
	有以下信息
	id,nickname,password,idcard,education
	memclass,infor,address,sex,age
	*/
	
function registFunc($nn,$pw,$ic,$job,$mc,$infor,$phone,$qq,$adr,$sex,$age){
       include "include/dbconn.php";
       $sql = "insert into user (`nickname`,`password`,`idcard`,`job`,`phone`,`qq`,`memclass`,`infor`,`address`,`sex`,`age`,'contri') values('{$nn}','{$pw}','{$ic}','{$job}','{$phone}','{$qq}','{$mc}','{$infor}','{$adr}','{$sex}','{$age}','0');";
        $res = mysqli_query($link,$sql);
     return $res;
       
	}
	
	//根据给出条件值进行数据插入
	
function insertRowFromTable($tj1,$tj2,$table){
      include "include/dbconn.php";
      
      //判断是该用户id是否存在
    $sql0 = "select id from user where nickname='{$tj2}';";
    $res0 = mysqli_query($link,$sql0);
	if(mysqli_num_rows($res0)==0){
	echo "2";
	}else{
           //判断是否添加过该好友
    $sql1 = "select nickname from friend where f_nickname='{$tj2}' and nickname='{$tj1}';";
    $res1 = mysqli_query($link,$sq1);
    if(mysqli_num_rows($res1)>0){
	return "3";
	}else{
        $sql = "insert into `friend` (`nickname`,`f_nickname`) values('{$tj1}','{$tj2}');";
        
        $res = mysqli_query($link,$sql);
        
        return $res;
        }
        }
	     }
	     
		
	     
	//根据某个条件查询有个表中的结果（不唯一）

function getResesFromTable($getval,$tiaojian,$val,$table){
      include "include/dbconn.php";
        $sql = "select $getval from $table where $tiaojian=$val;";
        $res = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($res);
	     $Nums = mysqli_num_rows($res);
    if($Nums<1){
        echo "nomessage";
    }else if($Nums==1){
  
    echo getResFromTable($getval,$tiaojian,$val,$table);
    }else{
    //拼接成json并返回结果
        $result="[{'SUserName':'".$val."'}";
        $result.=",{'f_nickname':'".$row['f_nickname']."'}";
        while($row=mysqli_fetch_array($res)){
            $result.=",{'f_nickname':'".$row['f_nickname']."'}";
        }

    }
      $result.=']';
        mysqli_free_result($res);
        
        return $result;
}
	//根据某个条件查询有个表中的结果（唯一）
	function getResFromTable($getval,$tiaojian,$val,$table){
		include "include/dbconn.php";
		$sql = "select $getval from $table where $tiaojian=$val;";
		$res = mysqli_query($link,$sql);
		if($res){
		$row = mysqli_fetch_array($res);	
        $getval = $row[$getval];    
		return $getval;	
		}else{
		return 0;
		}
		
		mysqli_free_result($res);
	}
	
	//根据某个条件查询有个表中的字段的最大值（唯一）
	function getResMaxFromTable($getval,$table){
		include "include/dbconn.php";
		$sql = "select $getval from $table order by $getval desc limit 1 ;";
		$res = mysqli_query($link,$sql);
		if($res){
		$row = mysqli_fetch_array($res);	
        $getval = $row[$getval];    
		return $getval;	
		}else{
		return 0;
		}
		
		mysqli_free_result($res);
	}
    //根据某个条件删除一个表中的行（唯一）
    function deleteRowFromTable($tiaojian1,$val1,$tiaojian2,$val2,$table){
        include "include/dbconn.php";
        $sql="delete from $table where $tiaojian1=$val1 and $tiaojian2=$val2;";
        $res = mysqli_query($link,$sql);
        
        return $res;
        mysqli_free_result($res);
    }
	
//根据某个条件更新个表中的结果（唯一）,ok return 1
    function setResFromTable($setrow,$setval,$atrow,$val,$table){
        include "include/dbconn.php";
        $sql = "update $table set $setrow=$setval where $atrow=$val;";
        $res = mysqli_query($link,$sql);
        $getres=$res;
        return $getres;
	}
 //根据某个条件更新个表中的2个结果（唯一）,ok return 1
    function setTwoResFromTable($setrow1,$setval1,$setrow2,$setval2,$atrow,$atval,$table){
        include "include/dbconn.php";
        $sql = "update $table set $setrow1=$setval1 and $setrow2=$setval2 where $atrow=$atval;";
        return mysqli_query($link,$sql);
        
	}

 //简单实现json到php数组转换功能
    function simple_json_parser($json){
        $json = str_replace("{","",str_replace("}","", $json));
        $jsonValue = explode(",", $json);
        $arr = array();
        foreach($jsonValue as $v){
            $jValue = explode(":", $v);
            $arr[str_replace('"',"", $jValue[0])] = (str_replace('"', "", $jValue[1]));
        }
        return $arr;
    }


?>


