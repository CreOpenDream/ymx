<script type="text/javascript" src="js/jquery-1.11.3.js" ></script>
<script>
    var btn1 = document.getElementById("grxx");
    var btn2 = document.getElementById("tx");
    var btn3 = document.getElementById("sjh");
    var btn4 = document.getElementById("yx");
    var btn5 = document.getElementById("sjzh");
    var btn6 = document.getElementById("lsmb");
    var cont1 = document.getElementsByClassName("message").item(0);
    var cont2 = document.getElementsByClassName("photo").item(0);
    var cont3 = document.getElementsByClassName("phone").item(0);
    var cont4 = document.getElementsByClassName("email").item(0);
    var cont5 = document.getElementsByClassName("social").item(0);
    var cont6 = document.getElementsByClassName("history").item(0);
    var isT1 = true;
    btn1.onclick = function(){
        cont1.style.display = "block";
        cont2.style.display = "none";
        cont3.style.display = "none";
        cont4.style.display = "none";
        cont5.style.display = "none";
        cont6.style.display = "none";
        
    };
    btn2.onclick = function(){
        cont1.style.display = "none";
        cont2.style.display = "block";
        cont3.style.display = "none";
        cont4.style.display = "none";
        cont5.style.display = "none";
        cont6.style.display = "none";
        
    };
    btn3.onclick = function(){
        cont1.style.display = "none";
        cont2.style.display = "none";
        cont3.style.display = "block";
        cont4.style.display = "none";
        cont5.style.display = "none";
        cont6.style.display = "none";
        
    };
    btn4.onclick = function(){
        cont1.style.display = "none";
        cont2.style.display = "none";
        cont3.style.display = "none";
        cont4.style.display = "block";
        cont5.style.display = "none";
        cont6.style.display = "none";
        
    };
    btn5.onclick = function(){
        cont1.style.display = "none";
        cont2.style.display = "none";
        cont3.style.display = "none";
        cont4.style.display = "none";
        cont5.style.display = "block";
        cont6.style.display = "none";
        
    };
        btn6.onclick = function(){
        cont1.style.display = "none";
        cont2.style.display = "none";
        cont3.style.display = "none";
        cont4.style.display = "none";
        cont5.style.display = "none";
        cont6.style.display = "block";
        
    };
    
    	$(".baoCun").click(function(){
    		var btnid = $(this).attr('id');
    		if(btnid == "form1"){
    			
    		var	data = 	{
			NickName:$("#nickname").val(),
    		Birthdate:$("#year").val()+"-"+$("#month").val()+"-01",
    		Sex:$("#male").attr("checked")==true?"男":"女",
    		Profession:$("#hangYe").val(),
    		Occupation:$("#zhiYe").val(),
    		Qq:$("#qq").val(),
    		Action:1
    	};

    	$.post("personalPro.php",
    	data,
    	 function(msg) {
  				if(msg == "1"){
  					alert("修改成功");
  				}
		});				
    		}
    		if(btnid == "form2"){
    			
    		}
    		if(btnid == "form3"){
    			
    		}
    		if(btnid == "form4"){
    			
    		}
			
	
	});
	//退出登录
	  	$("#loginout").click(function(){
		  	htmlobj=$.ajax({url:"login_out.php",async:false});
		 	if(htmlobj.responseText == "ok"){
		 		//刷新本页面
		 		location.reload();
		 	}
	 	});
</script>