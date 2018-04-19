  <div class="nav" style="height: 80px">
           <div class="logo" style="padding-top: 11px">
           	<img src="images/ymx_logo.png" alt=""/>
           	</div>
            <ul class="navList" style="top:20px">
               <li><a href="index.php">首页</a></li>
                <li><a href="theme.php">主题分类</a></li>
                <li><a href="index.php#feedback">意见反馈</a></li>
                <li><a href="index.php#contact_us">联系我们</a></li>
                <!--<li><a href="#">关于我们</a></li>-->
            </ul>
          
        </div>
            <?php
            	session_start();
            	@require_once("./qqlogin/API/qqConnectAPI.php");
            	
							if(empty($_SESSION['access_token']) && empty($_SESSION['openid']) && empty($_SESSION['UserName'])){
            	?>
         <ul class="login"  style="top:20px">
               <li><a href="#" id="btnLogin">登录</a></li>
               <li><a href="#" id="btnResgiter">注册</a></li>
            </ul>
            <?php
            }
            else{
            	
            	if(empty($_SESSION['access_token']) && empty($_SESSION['openid']) && !empty($_SESSION['UserName'])){
            	?>
            	
            	<div class="wrap">
            		<div class="user">
                	<?php
            		echo "<a href='personal.php'><img src='images/b.png'/></a>";
            		?>
                	<span><?php echo "".$_SESSION['UserName'];?></span>
            		</div>
            <div class="tuiChu">
                <ul>
                    <li><a href="personal.php">用户中心</a></li>
                     <li><span id="loginout"><a href="">安全退出</a></span></li>
                </ul>
            </div>
            
            	
            </div>
            	<?php
            	}else{
 	
            	$access_token = $_SESSION['access_token'];
            	$openid = $_SESSION['openid'];
            	
            $qc = new QC($_SESSION['access_token'], $_SESSION['openid']);
						$arr = $qc->get_user_info();
            	?>
               <div class="wrap">
            		<div class="user">
                	<?php
            		echo "<a href='personal.php'><img src='".$arr['figureurl_qq_1']."'/></a>";
            		?>
                	<span>
                		
               
            		<?php
            				/**
 * 返回16位md5值
 *
 * @param string $str 字符串
 * @return string $str 返回16位的字符串
 */
function short_md5($str) {
    return substr(md5($str), 8, 16);
}
			$qqopenid = short_md5($openid);
			$nickname = $arr["nickname"]."_".$qqopenid;
            		echo $arr["nickname"];
           //将信息保存至数据库
           $sql = "select user_id from tb_user where user_qqopenid='{$openid}';";
	//插入语句
    if($res = mysqli_query($link,$sql)){
    	$num=mysqli_num_rows($res);
			if($num<1){
			//不存在该用户,则注册新账号
			$sql = "insert into `tb_user` (`user_name`,`user_pwd`,`user_qqopenid`,`user_type`) values('{$nickname}','ymx12345','{$openid}','2');";
			mysqli_query($link,$sql);
			
			$sqlid = "select user_id from tb_user where user_name='{$nickname}' and user_pwd='{'ymx12345'}';";
  			$row = mysqli_fetch_array(mysqli_query($link,$sqlid));	
        	$userid = $row['user_id'];    
  			$_SESSION['UserId'] = $userid;
			}
		}
            		?>
		
                		</span>
            		</div>
            <div class="tuiChu">
                <ul>
                    <li><a href="personal.php">用户中心</a></li>
                    <li><span id="loginout"><a href="">安全退出</a></span></li>
                </ul>
            </div>
            
            	
            </div>
           <?php
           }
           	}
           	?>
        </div>