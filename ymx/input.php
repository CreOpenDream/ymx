<!DOCTYPE html>
<html>
	<?php
	@include_once ("./include/dbconn.php");
	//数据库连接
	@include_once ("./include/SqlHelper.php");
	//SqlHelper工具类
	@include_once ("./include/input/header.php");
	//头部
	?>
	<body>

		<?php
		@include_once ("./include/input/nav.php");
		//导航
		if ($index == 1)
			@include_once ("./include/input/content.php");
		//输入内容
		else if ($index == 2)
			@include_once ("./include/input/content_2.php");
		//输入内容

		@include_once ("./include/input/footer.php");
		//底部
		?>
	</body>
	<?php
	@include_once ("./include/input/scripts.php");
	//脚本
	?>
</html>