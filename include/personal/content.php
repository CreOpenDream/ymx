
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
        <form>
            <p class="hang"><span class="tName">昵称</span> <input id="nickname" name="nickname" type="text" placeholder="" class="niCheng"/></p>
            <p class="hang"><span class="tName">性别</span> <input id="male" name="sex" value="男" type="radio" class="check" checked/> <span class="tName">男</span> <input
                    type="radio" name="sex" value="女" class="check"/> <span class="tName">女</span></p>
            <p class="hang">
                <span class="tName">生日</span>
                <select name="year" id="year">
                	<option value="1960">1960</option>
                    <option value="1961">1961</option>
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>
                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                	<option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
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
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                  
                  
                </select>
                <select name="month" id="month">
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
                <select name="profession" id="hangYe">
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
                <select name="occupation" id="zhiYe">
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
                <input name="qq" id="qq" type="text" class="niCheng"/>
            </p>
            <input id="form1" type="button" value="保存" class="baoCun"/>
        </form>
    </div>
    <div class="photo" style="display: none">
        <h4>头像</h4>
        <form action="">
            <input type="file" value="上传头像" class="upLoad"/>
            <span>请上传jpg、png格式，640*640像素，5M以下图片</span>
            <br/>
            <input id="form2" type="button" value="提交" class="baoCun" style="margin-left: 43px"/>
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
            <input id="form3" type="button" value="提交" class="baoCun" style="margin-left: 118px"/>
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
            <button id="form4" class="baoCun" style="margin-left: 169px"/>保存</button>
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