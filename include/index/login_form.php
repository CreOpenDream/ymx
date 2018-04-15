 <div id="login">
        <div class="loginCon">
            <div class="title">
                <a href="#" id="login1">登录</a>
                <a href="#" id="register">注册</a>
                <div id="close" class="iconfont">&#xe635;</div>
            </div>
            <form class="forM" style="display: block;">
                <input type="text" id="login_username" placeholder="请输入用户登录名" name="UserName" class="inPut" onblur="checkHefa(this.value)"/>
                <p class="tishi"></p>
                <input type="password" id="login_pwd" placeholder="6-16位密码，区分大小写，不能用空格" name="PassWord" class="inPut" onblur="checkFrom1(this.value)"/>
                <p class="tishi_1"></p>
                <input type="checkbox" checked class="ch"/><span class="qiTian">7天内自动登录</span>
                <a href="#" class="wjps">忘记密码</a>
                <input type="button" value="登录" class="loginBtn"/>
            </form>
            <form class="forM_2 forM" style="display: none;" >
                <input type="text" id="reg_username" placeholder="请填入你的用户名，8-10位字母或数字组合" name="UserName" class="inPut" style="height: 25px;margin-bottom: 18px;" onblur="check_1(this.value)"/>
                <p class="tishi_2"></p>
                <input type="password" placeholder="请输入6-16位的密码，区分大小写" name="PassWord" class="inPut" id="input_1" style="height: 25px;margin-bottom: 18px;" onblur="check_2(this.value)"/>
                <p class="tishi_3"></p>
                <input type="password" placeholder="请再次输入你的密码" class="inPut" id="input_2" style="height: 25px;margin-bottom: 18px;" onblur="check_3()"/>
                <p class="tishi_4"></p>
                <input type="text" placeholder="请输入验证码" name="validate" id="yzm" class="yan"/>
               
                <div class="identifyingImg">
                	  <span>
                    	<img title="点击刷新" src="./captcha.php" align="absbottom" onclick="this.src='captcha.php?'+Math.random();"></img>
                    </span>
                </div>
                 <p class="tishi_5" style="color: red;"></p>
                <input type="button" value="注册" class="loginBtn" id="lgh1"/>
            </form>
            <div class="foot">
                <span>其他方式登录</span>
                <a href="qqlogin/oauth/index.php"id="qqLoginBtn" onclick="qqLogin()" class="iconfont qq">&#xe657</a>
                <a href="#" class="iconfont weixin">&#xe6b1</a>
            </div>
        </div>
    </div>