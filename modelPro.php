<?php
	
	header("Content-Type:text/html;charset=utf-8");
	include_once("./include/dbconn.php");
	include_once("./include/common.inc.php");
 	session_start();
 	$ctime = time();
	//上传图片操作
	
	if(!empty($_FILES['pic']['name'])){
		$inp1 = $_POST['inp_1'];
		$inp3 = $_POST['inp_3'];
		$inp4 = $_POST['inp_4'];
		$inp5 = $_POST['inp_5'];
		$inp6 = $_POST['inp_6'];

		
		$upFile = $_FILES['pic'];
	
		foreach($upFile['type'] as $key=>$value) {
         	switch ($value) {
             	case 'image/jpeg': $ext = 'jpg';
                 	break;
             	case 'image/png': $ext = 'png';
                 	break;
             	case 'image/gif': $ext = 'gif';
             		break;
             	default:
                 $ext = '';
                break;
         	}
         if($ext) {
             //设置照片的存放相对路径和命名。命名照片例：20161226_2.png，下划线后跟遍历的键值区分照片，可在此处自行设置规则！！
             $upload_path="mould/cc/images/";//把文件移到目标文件夹
            // $name = $upload_path.date('Ymd_his',time()).'.'.$ext;
            if($key == 0){
            		$GLOBALS['name'] = $upload_path."ccimg_0_".$ctime."_".$_SESSION['UserId'].".".$ext;
            		 move_uploaded_file($upFile['tmp_name'][$key],$GLOBALS['name']);
            }else{
            	$GLOBALS['name2'] = $upload_path."ccimg_1_".$ctime."_".$_SESSION['UserId'].".".$ext;
            	 move_uploaded_file($upFile['tmp_name'][$key],$GLOBALS['name2']);
            }
           		
 			}	
			}
			//获得文字描述
			$name = $GLOBALS['name'];
			$name2 = $GLOBALS['name2'];
			$userid = $_SESSION['UserId'];
			//将信息保存到服务器
			$sqlstr1 = "INSERT INTO `tb_cc` (`cc_user_id`, `cc_company_image`, `cc_brief_introduction`,`cc_company_tenet`,`cc_management_idea`,`cc_values`,`cc_excellent_team`,`cc_team_image`) VALUES ('{$userid}', '{$name}','{$inp1}','{$inp3}','{$inp4}','{$inp5}','{$inp6}','{$name2}');";
		
			$res = mysqli_query($link, $sqlstr1);
			if($res){
					//生成专属页面
					//将数据存入二维数组
$con=array(array('{company_image}',$name),array('{brief_introduction}',$inp1),
array('{company_tenet}',$inp3),array('{management_idea}',$inp4),
array('{values}',$inp5) ,array('{excellent_team}',$inp6) ,array('{team_image}',$name2));
  //替换example内容，并获取内容赋值给$str
 $fp=fopen("mould.html","r");
  $GLOBALS['str'] = fread($fp,filesize("mould.html"));
foreach($con as $id=>$val){ //循环生成
 $keys=$val[0];
 $content=$val[1]; 
 $GLOBALS['str']=str_replace($keys,$content,$GLOBALS['str']);
}
 fclose($fp);
 $path = "cc_".$ctime."_".$_SESSION['UserId'].".html";
 //新建空白文件，将$str写入
 $handle=fopen($path,"w");
 fwrite($handle,$GLOBALS['str']);
 fclose($handle);
 
 echo "<div style='text-align: center;'><img src='http://qr.liantu.com/api.php?w=280&text=www.ncgds.cn/ymx/".$path."' style='margin-top:33px;margin-left: 13px;'/><p>手机扫一扫预览模板</p><a href='input.php' style='margin-top:5px;text-decoration: none;color: dodgerblue;border: 1px solid black;border-radius: 10px;font-size: 16px;padding: 5px;top:10px;position:relative;'>重新编辑</a></div>";
				}else{
					//错误重新刷新本页面
					echo "<script>location.reload();</script>";
					}

	}else{
	
	}
	
?>