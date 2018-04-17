<!DOCTYPE html>
<html>
	<?php
	
		@include_once("./include/dbconn.php");//数据库连接
		@include_once("./include/index/header.php");//头部
	?>
	<body>
	
    <div class="cont_1">
      <?php
	@include_once("./include/index/nav.php");//导航
	@include_once("./include/index/carousel_figure.php");//轮播图
      ?>
    </div>
    
    <div class="cont_2">
      <?php
	@include_once("./include/index/case_show.php");//案例展示
      ?>
    </div>
    
    <div class="cont_4">
          <?php
	@include_once("./include/index/core_features.php");//核心特性
      ?>
    </div>
    
    <div class="cont_3">
        
       <?php
       	@include_once("./include/index/contact_us.php");//联系我们
       	@include_once("./include/index/feed_back.php");//反馈
       	@include_once("./include/index/footer.php");//底部栏
       	?>
        
    </div>
   
   <?php
   		@include_once("./include/index/slide_pad.php");//浮动块
   	 	@include_once("./include/index/login_form.php");//登录表单
   	 	@include_once("./include/index/scripts.php");//脚本
   	?>
 
</body>
</html>