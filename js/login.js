/**
 * Created by lgh on 2018/3/10.
 */
var login = document.getElementById("login1");
var register = document.getElementById("register");
var form_1 = document.getElementsByClassName("forM").item(0);
var form_2 = document.getElementsByClassName("forM_2").item(0);
register.onclick = function(){
    login.style.color = "#80858a";
    login.style.borderBottom = "1px solid #d6d0d9";
    register.style.color = "#f01400";
    register.style.borderBottom = "1px solid #f01400";
    form_1.style.display = "none";
    form_2.style.display = "block";
};
login.onclick = function(){
    register.style.color = "#80858a";
    register.style.borderBottom = "1px solid #d6d0d9";
    login.style.color = "#f01400";
    login.style.borderBottom = "1px solid #f01400";
    form_1.style.display = "block";
    form_2.style.display = "none";
};
//         判断用户名和密码输入框是否为空
var tishi = document.getElementsByClassName("tishi").item(0);
var tishi_1 = document.getElementsByClassName("tishi_1").item(0);
var tishi_2 = document.getElementsByClassName("tishi_2").item(0);
var tishi_3 = document.getElementsByClassName("tishi_3").item(0);
var tishi_4 = document.getElementsByClassName("tishi_4").item(0);
var tishi_5 = document.getElementsByClassName("tishi_5").item(0);
var input_1 = document.getElementById("input_1");
var input_2 = document.getElementById("input_2");
var yzm = document.getElementById("yzm");
function checkHefa(obj){
    setTimeout(function(){
        var numReg = /^[0-9a-zA-Z]*$/
        if(obj.length < 8||obj.length > 10){
            tishi.innerHTML = "用户名长度只能是8-10位，请重新输入！";
//                    return false;
        }else if(obj.length >= 8||obj.length <= 10){
            tishi.innerHTML = "";
        }else if(obj!=""&&!numReg.test(obj)) {
            tishi.innerHTML = "用户名只能是数字或者字母，请重新输入！";
//                    return false;
        }else if(numReg.test(obj)){
            tishi.innerHTML = "";
        }
        return true;
    },500);

}
//
function checkFrom1(obj){
    setTimeout(function(){
        if(obj.length <8 || obj.length > 16){
            tishi_1.innerHTML = "密码长度只能是8-16位，请重新输入！";
//                return false;
        }else if(obj.length >= 8&&obj.length <= 16){
            tishi_1.innerHTML = "";
        }
        return true;
    },500);
}
//
function check_1(obj){
    setTimeout(function(){
        var numReg = /^[0-9a-zA-Z]*$/
        if(obj.length < 8||obj.length > 10){
            tishi_2.innerHTML = "用户名长度只能是8-10位，请重新输入！";
//                    return false;
        }else if(obj.length >= 8||obj.length <= 10){
            tishi_2.innerHTML = "";
        }else if(obj!=""&&!numReg.test(obj)) {
            tishi_2.innerHTML = "用户名只能是数字或者字母，请重新输入！";
//                    return false;
        }else if(numReg.test(obj)){
            tishi_2.innerHTML = "";
        }
        return true;
    },500);
}
//
function check_2(obj){
    setTimeout(function(){
        if(obj.length <8 || obj.length > 16){
            tishi_3.innerHTML = "密码长度只能是8-16位，请重新输入！";
//                return false;
        }else if(obj.length >= 8&&obj.length <= 16){
            tishi_3.innerHTML = "";
        }
        return true;
    },500);
}
//
function check_3(){
    setTimeout(function(){
        if(input_1.value != input_2.value){
            tishi_4.innerHTML = "两次密码不一致，请再次输入！";
            input_1.value = "";
            input_2.value = "";
        }else if(input_1.value == input_2.value){
            tishi_4.innerHTML = "";
        }
        return true;
    },500);
}
