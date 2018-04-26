
<div class="ceLan">
    <button>个人设置</button>
    <ul>
        <li id="grxx">个人信息</li>
        <li id="tx">头像</li>
        <li id="sjh">手机号</li>
        <li id="yx">邮箱</li>
        <li id="sjzh">社交账号</li>
    </ul>
</div>
<div class="content">
    <div class="message" style="display:block">
        <h4>个人信息</h4>
        <form action="">
            <p class="hang"><span class="tName">昵称</span> <input type="text" placeholder="" class="niCheng"/></p>
            <p class="hang"><span class="tName">性别</span> <input type="radio" class="check"/> <span class="tName">男</span> <input
                    type="radio" class="check"/> <span class="tName">女</span></p>
            <p class="hang">
                <span class="tName">生日</span>
                <select name="" id="year">
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                </select>
                <select name="" id="month">
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </p>
            <p class="hang">
                <span class="tName">行业</span>
                <select name="" id="hangYe">
                    <option value="请选择">请选择</option>
                    <option value="互联网">互联网</option>
                    <option value="电子商务">电子商务</option>
                    <option value="广告">广告</option>
                    <option value="公关/会展">公关/会展</option>
                    <option value="金融/银行/保险/证券">金融/银行/保险/证券</option>
                    <option value="家装/室内设计">家装/室内设计</option>
                    <option value="交通物流">交通物流</option>
                    <option value="能源/机械">能源/机械</option>
                </select>
            </p>
            <p class="hang">
                <span class="tName">职业</span>
                <select name="" id="zhiYe">
                    <option value="请选择">请选择</option>
                    <option value="设计师">设计师</option>
                    <option value="市场/公关/销售人员">市场/公关/销售人员</option>
                    <option value="产品/运营">产品/运营</option>
                    <option value="创意/策划">创意/策划</option>
                    <option value="文案/新媒体">文案/新媒体</option>
                    <option value="管理人员">管理人员</option>
                    <option value="学生">学生</option>
                    <option value="教师">教师</option>
                    <option value="技术人员">技术人员</option>
                </select>
            </p>
            <p class="hang">
                <span class="tName">QQ</span>
                <input type="text" class="niCheng"/>
            </p>
            <input type="submit" value="保存" class="baoCun"/>
        </form>
    </div>
    <div class="photo" style="display: none">
        <h4>头像</h4>
        <form action="">
            <input type="file" value="上传头像" class="upLoad"/>
            <span>请上传jpg、png格式，640*640像素，5M以下图片</span>
            <br/>
            <input type="submit" value="提交" class="baoCun" style="margin-left: 43px"/>
        </form>
    </div>
    <div class="phone" style="display: none" >
        <h4>手机号</h4>
        <form action="" class="action">
            <input type="text" class="tel" placeholder="请输入手机号"/><br/>
            <input type="text" class="checked" placeholder="图形验证码"/>
            <div class="img_1"></div><br/>
            <input type="text" class="telCheck" placeholder="请输入验证码"/>
            <button>发送验证码</button>
            <br/>
            <input type="submit" value="提交" class="baoCun" style="margin-left: 118px"/>
        </form>
    </div>
    <div class="email" style="display: none;">
        <h4>邮箱</h4>
        <form action="">
            <p class="hang">
                <span class="tName">邮箱：</span>
                <input type="text" placeholder="请输入邮箱" class="niCheng" style="width: 232px"/>
            </p>
            <p class="hang">
                <span class="tName">验证码：</span>
                <input type="text" placeholder="邮箱验证码" class="niCheng" style="margin-left: 9px;width: 138px"/>
                <button>获取验证码</button>
            </p>
            <input type="submit" value="提交" class="baoCun" style="margin-left: 169px"/>
        </form>
    </div>
    <div class="social" style="display: none">
        <h4>社交账号</h4>
        <div class="qq">
            <span class="iconfont">&#xe657;</span>
            <span class="shuxing">QQ昵称：</span>
            <span class="name">
            	
          
            </span>
            <button style="margin-left: 182px;">绑定</button>
        </div>
        <div class="qq">
            <span class="iconfont" style="color:green">&#xe6b1;</span>
            <span class="shuxing">微信昵称：</span>
            <span class="name">未知</span>
            <button style="margin-left: 182px;">绑定</button>
        </div>
        <div class="qq">
            <span class="iconfont" style="color:red">&#xe6b2;</span>
            <span class="shuxing">微博昵称：</span>
            <span class="name">未知</span>
            <button style="margin-left: 182px;">绑定</button>
        </div>
    </div>
</div>
<div class="clearFloat">
</div>