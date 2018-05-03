<div class="container" id="preview">
    <p>为定制你所需要的模块，请您输入以下信息。</p>
    <form action="modelPro.php" id="myform" method="post" name="gsj" enctype="multipart/form-data">
        <table class="inP2">
        	<tr>
        		<td>头像：</td>
                <td><input type="file" name="pic[]" /></td>
        	</tr>
            <tr>
                <td>姓名：</td>
                <td><input type="text" name="inp1"/></td>
                <td>年龄：</td>
                <td><input type="text" name="inp2"/></td>
            </tr>
            <tr>
                <td>籍贯：</td>
                <td><input type="text" name="inp3"/></td>
                <td>学历：</td>
                <td><input type="text" name="inp4"/></td>
            </tr>
            <tr>
                <td>专业：</td>
                <td><input type="text" name="inp5"/></td>
                <td>兴趣爱好：</td>
                <td><input type="text" name="inp6"/></td>
            </tr>
            <tr>
                <td>个人格言：</td>
                <td><input type="text" name="inp7"/></td>
                <td>工作经历1：</td>
                <td><input type="text" name="inp8" placeholder="请输入哪一年毕业于哪个学校，并且在校情况"/></td>
            </tr>
            <tr>
                <td>工作经历2：</td>
                <td><input type="text" name="inp9" placeholder="哪一年在哪工作，且工作内容"/></td>
                <td>工作经历3：</td>
                <td><input type="text" name="inp10" placeholder="哪一年在哪工作，且工作内容"/></td>
            </tr>
            <tr>
                <td>工作经历4：</td>
                <td><input type="text" name="inp11" placeholder="哪一年在哪工作，且工作内容"/></td>
                <td>语言能力：</td>
                <td><input type="text" name="inp12" /></td>
            </tr>
            <tr>
                <td>软件能力：</td>
                <td><input type="text" name="inp13" /></td>
                <td>其他能力：</td>
                <td><input type="text" name="inp14" /></td>
            </tr>
            <tr>
                <td>能力备注：</td>
                <td><input type="text"  name="inp15" placeholder="填写自己的学习能力，性格方面"/></td>
                <td>作品图1：</td>
                <td><input type="file" name="pic[]" /></td>
            </tr>
            <tr>
                <td>作品图2：</td>
                <td><input type="file" name="pic[]" /></td>
                <td>作品图3：</td>
                <td><input type="file" name="pic[]" /></td>
            </tr>
            <tr>
                <td>作品图4：</td>
                <td><input type="file" name="pic[]" /></td>
                <td>作品简述：</td>
                <td><input type="text" name="inp16" /></td>
            </tr>
        </table>
        <input type="submit" value="提交" id="submit"/>
        <!--传递模板id-->
        
        <?php
        	//$index 模板id
        	echo "<input type='hidden' name='mould' value='".$index."' />";
        	?>
       
        
    </form>
</div>
