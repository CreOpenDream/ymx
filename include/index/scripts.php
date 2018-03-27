   <script src="js/index.js"></script>
    <script src="js/show_login.js"></script>
    <script src="js/login.js" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery-1.11.3.js" ></script>
<script type="text/javascript">
	function qqLogin(){

	}

	$(document).ready(function(){
  $("#loginout").click(function(){
  htmlobj=$.ajax({url:"./include/index/login_out.php",async:false});
 	if(htmlobj.responseText == "ok"){
 		//刷新本页面
 		location.reload();
 	}
  });

	//登录注册页签定位
  $("#btnResgiter").click(function(){
  	$("#login1").css('color', '#80858a').css('border-bottom','1px solid #d6d0d9');
  	$('#register').css('color','#f01400').css('border-bottom','1px solid #f01400');
  	$('.forM').css('display','none');
  	$('.forM_2').css('display','block');
  });
    $("#btnLogin").click(function(){
  	$('#register').css('color','#80858a').css('border-bottom','1px solid #d6d0d9');
  	$("#login1").css('color', '#f01400').css('border-bottom','1px solid #f01400');
  	$('.forM').css('display','block');
  	$('.forM_2').css('display','none');
  });
  
});

</script>