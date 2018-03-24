/**
 * Created by lgh on 2018/3/10.
 */
//按钮 自动 小圆点  保证index统一

var index = 0;
//所有图片
var aArr = document.querySelectorAll(".in a");
//所有小圆点
// var liArr = document.querySelectorAll(".clear li");
var h3 = document.getElementsByClassName(".sx");
//定时器
var timer;

var out = document.getElementById("out");

out.onmouseenter = function () {
    if (timer) {
        clearInterval(timer);
    }
};

out.onmouseleave = function () {
    init();
};

function init() {
    timer = setInterval(function () {
        btnEvent(1);
    }, 3000);
}

//初始化
init();

/**
 * 按钮点击
 */
function btnEvent(type) {
    if (type) {
        if (index === aArr.length - 1) {
            index = 0;
        } else {
            index++;
        }
    } else {
        if (!index) {
            index = aArr.length - 1;
        } else {
            index--;
        }
    }
    move(index);
}

/**
 * 移动图片
 */
function move(index) {
    for (var i = 0; i < aArr.length; i++) {
        aArr[i].style.zIndex = 0;
        aArr[i].style.opacity = 0;
//
    }
    aArr[index].style.zIndex = 1;
    aArr[index].style.opacity = 1;
//
}
//
//        for(var i= 0;i < aArr.length;i++){
//            if(aArr[i].style.opacity == 1){
//                h3[i].setAttribute("class","sx show")
//            }else{
//                h3[i].setAttribute("class","sx");
//            }
//        }
//回到顶部
var btn = document.getElementById("ag");
var clientHeight = document.documentElement.clientHeight;
window.onscroll = function(){
    var osTop = document.documentElement.scrollTop || document.body.scrollTop;
    if(osTop >= clientHeight){
        btn.style.display = "block";
    }else{
        btn.style.display = "none";
    }
}