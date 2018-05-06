<div class="cont">

<?php
	$dbhelper = new SqlHelper();
		//dql语句，返回的是对象
	$res = $dbhelper->execute_dql("select * from tb_mould");
	 while ($obj=mysqli_fetch_object($res))
    {
    
	?>

    <div class="moBan">
        <div class="img_1">
        	<?php
        		echo "<img src='".$obj->mould_coverimgurl."' alt=''/>";
        		?>
        </div>
        <div class="msg">
            <p class="title_1">
            	<?php echo $obj->mould_name;?>
            </p>
            <span class="jiaGe">￥
            	<?php
            		echo number_format($obj->mould_price,2);
            	 ?>
            	</span>
            <a href="#" class="iconfont">&#xe600;</a>
            <span class="fangKe">
            	<?php echo $obj->mould_visit;?>
            	
            </span>
        </div>
        <div class="mask">
            <a href="#" class="erWeiMa">
            	
            	<?php 
            		
            		echo "<img id='img_qr' src='http://qr.liantu.com/api.php?w=130&text=".$obj->mould_expurl."' style='width: 130px;height: 130px;margin-top: 33px;margin-left: 63px;' alt=''/>";            		
            	?>
            
            </a>
            <p>手机扫一扫预览模板</p>
            <?php
            	session_start();
          		 if(empty($_SESSION['access_token']) && empty($_SESSION['openid']) && empty($_SESSION['UserName'])){
            
            	?>
            <span class="btn" onclick="alert('请先登录!')">立即使用</span>
            
            <?php
            }else{
            	echo "<a class='btn' href='input.php?mould=".$obj->mould_id."'>立即使用</a>";
            }
            	?>
        </div>
    </div>
	<?php
	}
	?>
</div>
<div class="fenYe">
    <a href="#">首页</a>
    <a href="#">上一页</a>
    <a href="#" class="as">1</a>
    <!--<a href="#" class="as">2</a>
    <a href="#" class="as">3</a>
    <a href="#" class="as">4</a>
    <a href="#" class="as">5</a>
    <a href="#" class="as">6</a>
    <a href="#" class="as">7</a>
    <a href="#" class="as">8</a>
    <a href="#" class="as">9</a>
    <a href="#" class="as">10</a>-->
    <a href="#">下一页</a>
    <a href="#">尾页</a>
</div>
