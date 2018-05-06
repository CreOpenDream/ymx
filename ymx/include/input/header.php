<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css"/>
     <link rel="shortcut icon" href="images/ymx.ico" type="image/x-icon" />
     <link rel="bookmark" href="images/ymx.ico"/>
     <?php
     if(isset($_GET['mould'])){
     	$index = $_GET['mould'];
     	//判断get的值是否越界
     	$dbhelper = new SqlHelper();
     	$res = $dbhelper->execute_dql("select count(*) from tb_mould");
     	$res = mysqli_fetch_row($res);

     	if($index <1 || $index >$res[0])
     		$index = 1;
     }else{
     	$index = 1;
     }
     	?>
    <link rel="stylesheet" href="css/input.css"/>
    <link rel="stylesheet" href="css/input_2.css"/>
    <title>易模秀_页面定制</title>
</head>