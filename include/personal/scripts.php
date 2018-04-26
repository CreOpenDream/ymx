
<script>
    var btn1 = document.getElementById("grxx");
    var btn2 = document.getElementById("tx");
    var btn3 = document.getElementById("sjh");
    var btn4 = document.getElementById("yx");
    var btn5 = document.getElementById("sjzh");
    var cont1 = document.getElementsByClassName("message").item(0);
    var cont2 = document.getElementsByClassName("photo").item(0);
    var cont3 = document.getElementsByClassName("phone").item(0);
    var cont4 = document.getElementsByClassName("email").item(0);
    var cont5 = document.getElementsByClassName("social").item(0);
    var isT1 = true;
    btn1.onclick = function(){
        cont1.style.display = "block";
        cont2.style.display = "none";
        cont3.style.display = "none";
        cont4.style.display = "none";
        cont5.style.display = "none";
    };
    btn2.onclick = function(){
        cont1.style.display = "none";
        cont2.style.display = "block";
        cont3.style.display = "none";
        cont4.style.display = "none";
        cont5.style.display = "none";
    };
    btn3.onclick = function(){
        cont1.style.display = "none";
        cont2.style.display = "none";
        cont3.style.display = "block";
        cont4.style.display = "none";
        cont5.style.display = "none";
    };
    btn4.onclick = function(){
        cont1.style.display = "none";
        cont2.style.display = "none";
        cont3.style.display = "none";
        cont4.style.display = "block";
        cont5.style.display = "none";
    };
    btn5.onclick = function(){
        cont1.style.display = "none";
        cont2.style.display = "none";
        cont3.style.display = "none";
        cont4.style.display = "none";
        cont5.style.display = "block";
    };
</script>