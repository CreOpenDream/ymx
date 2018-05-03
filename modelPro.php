<?php
	
	header("Content-Type:text/html;charset=utf-8");
	include_once("./include/dbconn.php");
	include_once("./include/common.inc.php");
	@include_once("./include/SqlHelper.php");//SqlHelper工具类
	
	$dbhelper = new SqlHelper();//实例化工具类
 	session_start();
 	$ctime = time();//获取当前时间戳
 	//mould的序号
     if(isset($_POST['mould'])){
     	$index = $_POST['mould'];
  		if($index == 1){
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

						@$name = $GLOBALS['name'];
						@$name2 = $GLOBALS['name2'];
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
			 
			 echo "<div style='text-align: center;'><img src='http://qr.liantu.com/api.php?w=280&text=www.ncgds.cn/ymx/".$path."' style='margin-top:33px;margin-left: 13px;'/><p>手机扫一扫预览模板</p><a href='input.php?mould=1' style='margin-top:5px;text-decoration: none;color: dodgerblue;border: 1px solid black;border-radius: 10px;font-size: 16px;padding: 5px;top:10px;position:relative;'>重新编辑</a></div>";
							}else{
								//错误重新刷新本页面
								echo "<script>location.reload();</script>";
								}
			
				}else{
				
				}
  	}else if($index == 2){
  		//上传图片操作
	
	if(!empty($_FILES['pic']['name'])){
		$inp1 = $_POST['inp1'];
		$inp2 = $_POST['inp2'];
		$inp3 = $_POST['inp3'];
		$inp4 = $_POST['inp4'];
		$inp5 = $_POST['inp5'];
		$inp6 = $_POST['inp6'];
		$inp7 = $_POST['inp7'];
		$inp8 = $_POST['inp8'];
		$inp9 = $_POST['inp9'];
		$inp10 = $_POST['inp10'];
		$inp11 = $_POST['inp11'];
		$inp12 = $_POST['inp12'];
		$inp13 = $_POST['inp13'];
		$inp14 = $_POST['inp14'];
		$inp15 = $_POST['inp15'];
		$inp16 = $_POST['inp16'];

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
             $upload_path="mould/resume/images/";//把文件移到目标文件夹

            		$GLOBALS["name".$key] = $upload_path."resumeimg_0_".$key."_".$ctime."_".$_SESSION['UserId'].".".$ext;
            		 move_uploaded_file($upFile['tmp_name'][$key],$GLOBALS["name".$key]);
    		
            }
           		
 			}	
			}
			//获得文字描述
				@$rootpath = "mould/resume/";
				@$name0 = substr($GLOBALS["name0"],strlen($rootpath));
				@$name1 = substr($GLOBALS["name1"],strlen($rootpath));
				@$name2 = substr($GLOBALS["name2"],strlen($rootpath));
				@$name3 = substr($GLOBALS["name3"],strlen($rootpath));
				@$name4 = substr($GLOBALS["name4"],strlen($rootpath));
			@$userid = $_SESSION['UserId'];
			@$path = "./mould/resume/resume_".$ctime."_".$_SESSION['UserId'].".html";
			
			@$resume_url = $path;
			//将信息保存到服务器
			$sqlstr1 = "INSERT INTO `tb_resume`";
			$sqlstr1.= "(`resume_userid`, `resume_url`, `resume_type`,`resume_like`,`resume_name`,`resume_head_img`,`resume_age`,";
			$sqlstr1.= "`resume_native_place`,`resume_education`,`resume_major`,`resume_hobby`,`resume_personal_declaration`,`resume_work_experience11`";
			$sqlstr1.= ",`resume_work_experience12`,`resume_work_experience21`,`resume_work_experience22`,`resume_work_experience31`,`resume_work_experience32`";
			$sqlstr1.= ",`resume_work_experience41`,`resume_work_experience42`,`resume_language_ability`,`resume_software_capability`,`resume_other_capability`";
			$sqlstr1.= ",`resume_ability_remark`,`resume_works1_imgurl`,`resume_works2_imgurl`,`resume_works3_imgurl`,`resume_works4_imgurl`,`resume_brief_resume`";
			$sqlstr1.= ") VALUES ('{$userid}', '{$resume_url}',1,0,'{$inp1}','{$name0}','{$inp2}','{$inp3}','{$inp4}','{$inp5}','{$inp6}'";
			$sqlstr1.= ",'{$inp7}','{$inp8}','{$inp8}','{$inp9}','{$inp9}','{$inp10}','{$inp10}','{$inp11}','{$inp11}','{$inp12}','{$inp13}'";
			$sqlstr1.= ",'{$inp14}','{$inp15}','{$name1}','{$name2}','{$name3}','{$name4}','{$inp16}');";

			$res = mysqli_query($link, $sqlstr1);
			if($res){
					//生成专属页面
					//将数据存入二维数组
					$con=array(array('{resume_name}',$inp1),array('{resume_head_img}',$name0),
					array('{resume_age}',$inp2),array('{resume_native_place}',$inp3),
					array('{resume_education}',$inp4),array('{resume_major}',$inp5),
					array('{resume_hobby}',$inp6),array('{resume_personal_declaration}',$inp7),
					array('{resume_work_experience11}',"1"),array('{resume_work_experience12}',$inp8),
					array('{resume_work_experience21}',"2"),array('{resume_work_experience22}',$inp9),
					array('{resume_work_experience31}',"3"),array('{resume_work_experience32}',$inp10),
					array('{resume_work_experience41}',"4"),array('{resume_work_experience42}',$inp11),
					array('{resume_language_ability}',$inp12),array('{resume_software_capability}',$inp13),
					array('{resume_other_capability}',$inp14),array('{resume_ability_remark}',$inp15),
					array('{resume_works1_imgurl}',$name1),array('{resume_works2_imgurl}',$name2),
					array('{resume_works3_imgurl}',$name3),array('{resume_works4_imgurl}',$name3),
					array('{resume_brief_resume}',$inp16));
					  //替换example内容，并获取内容赋值给$str
					 $fp=fopen("./mould/resume/mould.html","r");
					  $GLOBALS['str'] = fread($fp,filesize("./mould/resume/mould.html"));
					foreach($con as $id=>$val){ //循环生成
					 $keys=$val[0];
					 $content=$val[1]; 
					 $GLOBALS['str']=str_replace($keys,$content,$GLOBALS['str']);
					}
					 fclose($fp);
				
					 //新建空白文件，将$str写入
					 $handle=fopen($path,"w");
					 fwrite($handle,$GLOBALS['str']);
					 fclose($handle);
					 
					 echo "<div style='text-align: center;'><img src='http://qr.liantu.com/api.php?w=280&text=www.ncgds.cn/ymx/".$path."' style='margin-top:33px;margin-left: 13px;'/><p>手机扫一扫预览模板</p><a href='input.php?mould=2' style='margin-top:5px;text-decoration: none;color: dodgerblue;border: 1px solid black;border-radius: 10px;font-size: 16px;padding: 5px;top:10px;position:relative;'>重新编辑</a></div>";
									}else{
										//错误重新刷新本页面
										echo "<script>location.reload();</script>";
										echo "error";
										}
					
						}else{
						
						}
					  	}
						
						
					     
					     	
?>