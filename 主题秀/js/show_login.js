/**
 * Created by lgh on 2018/3/10.
 */
function openNew(){
    //获取页面的高度和宽度
    var sWidth=document.body.scrollWidth;
    var sHeight=document.body.scrollHeight;
    var login = document.getElementById("login");

    //获取页面的可视区域高度和宽度
    var wHeight=document.documentElement.clientHeight;
    var oMask=document.createElement("div");
    oMask.id="mask";
    oMask.style.height=sHeight+"px";
    oMask.style.width=sWidth+"px";
    document.body.appendChild(oMask);
    login.style.display = "block";

    //获取登陆框的宽和高
    var dHeight=login.offsetHeight;
    var dWidth=login.offsetWidth;
    //设置登陆框的left和top
    login.style.left=sWidth/2-dWidth/2+"px";
    login.style.top=wHeight/2-dHeight/2+"px";
    //点击关闭按钮
    var oClose=document.getElementById("close");

    //点击登陆框以外的区域也可以关闭登陆框
    oClose.onclick=oMask.onclick=function(){
        login.style.display = "none";
        document.body.removeChild(oMask);
    };
};

window.onload=function(){
//            openNew();
    var oBtn=document.getElementById("btnLogin");
    var ob = document.getElementById("btnResgiter");
    //点击登录按钮
    oBtn.onclick=ob.onclick=function(){
        openNew();
        return false;
    }

}