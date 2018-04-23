<!DOCTYPE html>
<html>
	<?php
		@include_once("./config/conn.php");//数据库连接
		@include_once("./include/theme/header.php");//头部
	?>
	<body>
	

      <?php
	@include_once("./include/theme/nav.php");//导航
	@include_once("./include/theme/search.php");//搜索
	@include_once("./include/theme/category.php");//分类
	@include_once("./include/theme/content.php");//内容
	@include_once("./include/theme/footer.php");//底部
      ?>
   <?php
   	 	@include_once("./include/index/login_form.php");//登录表单
   	 	@include_once("./include/index/scripts.php");//脚本
   
   	?>
</body>
</html>