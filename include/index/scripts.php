   <script src="js/index.js"></script>
    <script src="js/login.js" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery-1.11.3.js" ></script>
<script type="text/javascript">
	function qqLogin(){

	}

	$(document).ready(function(){
  $("#loginout").click(function(){
  htmlobj=$.ajax({url:"./include/index/login_out.php",async:false});
 	alert(htmlobj.responseText == "ok");
  });
});


</script>