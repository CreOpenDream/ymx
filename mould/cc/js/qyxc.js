/**
 * Created by Administrator on 2018/3/6.
 */
var music = document.getElementById("as");
var audio = document.getElementsByTagName("audio").item(0);
var isPlay = true;
audio.addEventListener("ended",function(event){
    music.setAttribute("class","play");
},false);
music.addEventListener("touchstart",function(e){
    if(isPlay) {
        audio.pause();
        //this.removeAttribute("class");
        this.style.animationPlayState = "paused";
        isPlay = false;
    }else{
        audio.play();
        //this.setAttribute("class","play")
        this.style.animationPlayState = "running";
        isPlay = true;
    }
},false);
var count = 1;

$(".top").click(function(){
    if(count == 1){
        $("#page1").slideUp(550);
        $("#page2").slideDown(1000);
        count++;
    }else if(count == 2){
        $("#page2").slideUp(550);
        $("#page3").slideDown(1000);
        count++;
    }else if(count == 3){
        $("#page3").slideUp(550);
        $("#page4").slideDown(1000);
        count = 1;
    }
});
