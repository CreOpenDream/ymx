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
  
});

</script>