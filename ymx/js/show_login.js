/**
 * Created by lgh on 2018/3/10.
 */
function openNew(){
    //��ȡҳ��ĸ߶ȺͿ��
    var sWidth=document.body.scrollWidth;
    var sHeight=document.body.scrollHeight;
    var login = document.getElementById("login");

    //��ȡҳ��Ŀ�������߶ȺͿ��
    var wHeight=document.documentElement.clientHeight;
    var oMask=document.createElement("div");
    oMask.id="mask";
    oMask.style.height=sHeight+"px";
    oMask.style.width=sWidth+"px";
    document.body.appendChild(oMask);
    login.style.display = "block";

    //��ȡ��½��Ŀ�͸�
    var dHeight=login.offsetHeight;
    var dWidth=login.offsetWidth;
    //���õ�½���left��top
    login.style.left=sWidth/2-dWidth/2+"px";
    login.style.top=wHeight/2-dHeight/2+"px";
    //����رհ�ť
    var oClose=document.getElementById("close");

    //�����½�����������Ҳ���Թرյ�½��
    oClose.onclick=oMask.onclick=function(){
        login.style.display = "none";
        document.body.removeChild(oMask);
    };
};

window.onload=function(){
//            openNew();
    var oBtn=document.getElementById("btnLogin");
    var ob = document.getElementById("btnResgiter");
    //�����¼��ť
    if(ob != null && oBtn !=null){
    	 oBtn.onclick=ob.onclick=function(){
        openNew();
        return false;
    }
    }
   

}