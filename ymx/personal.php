<!DOCTYPE html>
<html>
	<?php
		@include_once("./include/SqlHelper.php");
		@include_once("./include/dbconn.php");//数据库连接
		@include_once("./include/personal/header.php");//头部
	?>
<body>
 <?php
	@include_once("./include/personal/nav.php");//导航
	include_once("./include/personal/content.php");//内容
	@include_once("./include/personal/footer.php");//底部
	@include_once("./include/personal/scripts.php");//脚本
 ?>

</body>
</html>