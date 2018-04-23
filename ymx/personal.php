<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/theme.css"/>
    <link rel="stylesheet" href="css/personal.css"/>
    <link rel="stylesheet" href="css/fontIcon/iconfont.css"/>
    <title>易模秀_个人中心</title>
</head>
<body>
<div class="nav" style="height: 80px;background-color: #a5c176;">


        <div class="logo" style="padding-top: 11px"><img src="images/logo.png" alt=""/></div>
        <ul class="navList" style="top:20px">
  				 <li><a href="index.php">首页</a></li>
                <li><a href="theme.php">主题分类</a></li>
                <li><a href="index.php#feedback">意见反馈</a></li>
                <li><a href="index.php#contact_us">联系我们</a></li>
        </ul>
       </div>
            <?php
            	session_start();
            	@require_once("./qqlogin/API/qqConnectAPI.php");
            	
							if(empty($_SESSION['access_token']) && empty($_SESSION['openid']) && empty($_SESSION['UserName'])){
								header("location:index.php");
								
            	?>
         <!--<ul class="login"  style="top:20px">
               <li><a href="#" id="btnLogin">登录</a></li>
               <li><a href="#" id="btnResgiter">注册</a></li>
            </ul>-->
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
            		echo "<a href='personal.html'><img src='".$arr['figureurl_qq_1']."'/></a>";
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
			
			}
		}
		$sqlid = "select user_id from tb_user where user_qqopenid='{$openid}';";
  			$row = mysqli_fetch_array(mysqli_query($link,$sqlid));	
        	$userid = $row['user_id'];    
  			$_SESSION['UserId'] = $userid;
            		?>
		
                		</span>
            		</div>
            <div class="tuiChu">
                <ul>
                    <li><a href="personal.html">用户中心</a></li>
                    <li><span id="loginout"><a href="">安全退出</a></span></li>
                </ul>
            </div>
            
            	
            </div>
           <?php
           }
           	}
           	?>
        </div>
</div>
<div class="kong"></div>
<div class="personal">
    <img src="images/a.png" alt=""/>
    <span class="name">
    	<?php
		echo isset($_SESSION['UserName'])?$_SESSION['UserName']:$arr["nickname"];   	
    	
    ?></span>
    <!--<span class="time">注册于2017/04/19</span>-->
</div>
<div class="ceLan">
    <button>个人设置</button>
    <ul>
        <li id="grxx">个人信息</li>
        <li id="tx">头像</li>
        <li id="sjh">手机号</li>
        <li id="yx">邮箱</li>
        <li id="sjzh">社交账号</li>
    </ul>
</div>
<div class="content">
    <div class="message" style="display:block">
        <h4>个人信息</h4>
        <form action="">
            <p class="hang"><span class="tName">昵称</span> <input type="text" placeholder="" class="niCheng"/></p>
            <p class="hang"><span class="tName">性别</span> <input type="radio" class="check"/> <span class="tName">男</span> <input
                    type="radio" class="check"/> <span class="tName">女</span></p>
            <p class="hang">
                <span class="tName">生日</span>
                <select name="" id="year">
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                </select>
                <select name="" id="month">
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </p>
            <p class="hang">
                <span class="tName">行业</span>
                <select name="" id="hangYe">
                    <option value="请选择">请选择</option>
                    <option value="互联网">互联网</option>
                    <option value="电子商务">电子商务</option>
                    <option value="广告">广告</option>
                    <option value="公关/会展">公关/会展</option>
                    <option value="金融/银行/保险/证券">金融/银行/保险/证券</option>
                    <option value="家装/室内设计">家装/室内设计</option>
                    <option value="交通物流">交通物流</option>
                    <option value="能源/机械">能源/机械</option>
                </select>
            </p>
            <p class="hang">
                <span class="tName">职业</span>
                <select name="" id="zhiYe">
                    <option value="请选择">请选择</option>
                    <option value="设计师">设计师</option>
                    <option value="市场/公关/销售人员">市场/公关/销售人员</option>
                    <option value="产品/运营">产品/运营</option>
                    <option value="创意/策划">创意/策划</option>
                    <option value="文案/新媒体">文案/新媒体</option>
                    <option value="管理人员">管理人员</option>
                    <option value="学生">学生</option>
                    <option value="教师">教师</option>
                    <option value="技术人员">技术人员</option>
                </select>
            </p>
            <p class="hang">
                <span class="tName">QQ</span>
                <input type="text" class="niCheng"/>
            </p>
            <input type="submit" value="保存" class="baoCun"/>
        </form>
    </div>
    <div class="photo" style="display: none">
        <h4>头像</h4>
        <form action="">
            <input type="file" value="上传头像" class="upLoad"/>
            <span>请上传jpg、png格式，640*640像素，5M以下图片</span>
            <br/>
            <input type="submit" value="提交" class="baoCun" style="margin-left: 43px"/>
        </form>
    </div>
    <div class="phone" style="display: none" >
        <h4>手机号</h4>
        <form action="" class="action">
            <input type="text" class="tel" placeholder="请输入手机号"/><br/>
            <input type="text" class="checked" placeholder="图形验证码"/>
            <div class="img_1"></div><br/>
            <input type="text" class="telCheck" placeholder="请输入验证码"/>
            <button>发送验证码</button>
            <br/>
            <input type="submit" value="提交" class="baoCun" style="margin-left: 118px"/>
        </form>
    </div>
    <div class="email" style="display: none;">
        <h4>邮箱</h4>
        <form action="">
            <p class="hang">
                <span class="tName">邮箱：</span>
                <input type="text" placeholder="请输入邮箱" class="niCheng" style="width: 232px"/>
            </p>
            <p class="hang">
                <span class="tName">验证码：</span>
                <input type="text" placeholder="邮箱验证码" class="niCheng" style="margin-left: 9px;width: 138px"/>
                <button>获取验证码</button>
            </p>
            <input type="submit" value="提交" class="baoCun" style="margin-left: 169px"/>
        </form>
    </div>
    <div class="social" style="display: none">
        <h4>社交账号</h4>
        <div class="qq">
            <span class="iconfont">&#xe657;</span>
            <span class="shuxing">QQ昵称：</span>
            <span class="name">
            	
          
            </span>
            <button style="margin-left: 182px;">绑定</button>
        </div>
        <div class="qq">
            <span class="iconfont" style="color:green">&#xe6b1;</span>
            <span class="shuxing">微信昵称：</span>
            <span class="name">未知</span>
            <button style="margin-left: 182px;">绑定</button>
        </div>
        <div class="qq">
            <span class="iconfont" style="color:red">&#xe6b2;</span>
            <span class="shuxing">微博昵称：</span>
            <span class="name">未知</span>
            <button style="margin-left: 182px;">绑定</button>
        </div>
    </div>
</div>
<div class="clearFloat">
</div>
<footer>zhutixiu.com 2018 All Rights Reserved</footer>
<script>
    var btn1 = document.getElementById("grxx");
    var btn2 = document.getElementById("tx");
    var btn3 = document.getElementById("sjh");
    var btn4 = document.getElementById("yx");
    var btn5 = document.getElementById("sjzh");
    var cont1 = document.getElementsByClassName("message").item(0);
    var cont2 = document.getElementsByClassName("photo").item(0);
    var cont3 = document.getElementsByClassName("phone").item(0);
    var cont4 = document.getElementsByClassName("email").item(0);
    var cont5 = document.getElementsByClassName("social").item(0);
    var isT1 = true;
    btn1.onclick = function(){
        cont1.style.display = "block";
        cont2.style.display = "none";
        cont3.style.display = "none";
        cont4.style.display = "none";
        cont5.style.display = "none";
    };
    btn2.onclick = function(){
        cont1.style.display = "none";
        cont2.style.display = "block";
        cont3.style.display = "none";
        cont4.style.display = "none";
        cont5.style.display = "none";
    };
    btn3.onclick = function(){
        cont1.style.display = "none";
        cont2.style.display = "none";
        cont3.style.display = "block";
        cont4.style.display = "none";
        cont5.style.display = "none";
    };
    btn4.onclick = function(){
        cont1.style.display = "none";
        cont2.style.display = "none";
        cont3.style.display = "none";
        cont4.style.display = "block";
        cont5.style.display = "none";
    };
    btn5.onclick = function(){
        cont1.style.display = "none";
        cont2.style.display = "none";
        cont3.style.display = "none";
        cont4.style.display = "none";
        cont5.style.display = "block";
    };
</script>
</body>
</html>