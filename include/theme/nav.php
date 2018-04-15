  <div class="nav" style="height: 80px;background-color: #a5c176;">
           <div class="logo" style="padding-top: 11px">
           	<img src="images/ymx_logo.png" alt=""/>
           	</div>
            <ul class="navList">
                <li><a href="http://www.ncgds.cn/ymx">首页</a></li>
                <li><a href="theme.php">主题分类</a></li>
                <li><a href="#feedback">意见反馈</a></li>
                <li><a href="#contact_us">联系我们</a></li>
                <!--<li><a href="#">关于我们</a></li>-->
            </ul>
         <?php
            	session_start();
            	@require_once("./qqlogin/API/qqConnectAPI.php");
            	
							if(empty($_SESSION['access_token']) && empty($_SESSION['openid']) && empty($_SESSION['UserName'])){
            	?>
         <ul class="login">
               <li><a href="#" id="btnLogin">登录</a></li>
               <li><a href="#" id="btnResgiter">注册</a></li>
            </ul>
            <?php
            }
            else{
            	
            	if(empty($_SESSION['access_token']) && empty($_SESSION['openid']) && !empty($_SESSION['UserName'])){
            	?>
            <div class="logined">
            	<div class="nick-warp">
            		<span class="icon">
            			<div class="app-logo"
            				>
            	<?php
            		echo "<img src='images/p_50.png'>";
            		?>
            			</div>
            			</span>
            			<span class="nick">
            				<span><?php echo "".$_SESSION['UserName'];?></span>
            				<span><button type="button" id="loginout">退出登录</button></span>
            			</span>
            		<span class="triangle-down" ></span>
            	</div>
            </div>
            	<?php
            	}else{
 	
            	$access_token = $_SESSION['access_token'];
            	$openid = $_SESSION['openid'];
            	
            $qc = new QC($_SESSION['access_token'], $_SESSION['openid']);
						$arr = $qc->get_user_info();
            	?>
                 <div class="logined">
       
            	<div class="nick-warp">
            		<span class="icon">
            			<div class="app-logo"
            				>
            	<?php
            		echo "<img src=\"".$arr['figureurl']."\">";
            		?>
            			</div>
            			</span>
            			<span class="nick">
            				<span>CRE</span>
            				<span><button type="button" id="loginout">退出登录</button></span>
            			</span>
            		<span class="triangle-down" ></span>
            	</div>
            </div>			
           <?php
           }
           	}
           	?>
        </div>