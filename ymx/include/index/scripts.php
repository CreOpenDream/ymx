   <script src="js/index.js"></script>
    <script src="js/show_login.js"></script>
    <script src="js/login.js" charset="utf-8"></script>
     
<script type="text/javascript" src="js/jquery-1.11.3.js" ></script>
<script src="js/jquery.aniview.min.js"></script>
    <script>
        $(document).ready(function() {
            var options = {
                animateThreshold: 100,
                scrollPollInterval: 50
            };
            $('.aniview').AniView(options);
        });
    </script>
<script type="text/javascript">

	window.isTrueYzm = false;
	$(document).ready(function(){
		//退出登录
  $("#loginout").click(function(){
  htmlobj=$.ajax({url:"./include/index/login_out.php",async:false});
 	if(htmlobj.responseText == "ok"){
 		//刷新本页面
 		location.reload();
 	}
  });
  
  	//登录
  	$("#login_btn").click(function(){
  		if($("#login_username").val().length == 0 && $("#login_pwd").val().length == 0)
  			return false;
  		 htmlobj=$.ajax({url:"loginPro.php?UserName="+$("#login_username").val()+"&PassWord="+$("#login_pwd").val(),async:false});
  	if(htmlobj.responseText == "1"){
 		//刷新本页面
 		location.reload();
 	}
  	});
	//注册
	$("#lgh1").click(function(){
		
		if($("#input_1").val() != $("#input_2").val())
			return false;
	
		$.post("captchaPro.php",
		{
			validate: $("#yzm").val()
    	},
    	 function(data) {
  				if(data == "1"){
					$(".tishi_5").text("验证码输入正确");  	
		$.post("regPro.php",
		{
			UserName:$("#reg_username").val(),
    		PassWord:$("#input_1").val()
    	},
    	 function(data) {
  				if(data == "1"){
  					alert("注册成功");
  					location.reload();
  				}
		});				
  				}
  				else{
					$(".tishi_5").text("验证码输入错误");  					
  				}
  		}				
	);
		
		
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