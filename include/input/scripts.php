<script type="text/javascript" src="js/jquery-1.11.3.js" ></script>
<script type="text/javascript" src="js/jquery.form.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){	
		//退出登录
	  	$("#loginout").click(function(){
		  	htmlobj=$.ajax({url:"login_out.php",async:false});
		 	if(htmlobj.responseText == "ok"){
		 		//刷新本页面
		 		location.reload();
		 	}
	 	});
  		$("#inp_btn").click(function(){
  			$("#myform").ajaxForm({target: '#preview',   
                     beforeSubmit:function(){   
                     },   
                    success:function(){   
                    },   
                    error:function(){   
                    } }).submit();  
  			
  		});
	});

</script>