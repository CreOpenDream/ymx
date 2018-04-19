<div class="container" id="preview">
    <p>为定制你所需要的企业宣传模块，请您输入以下信息。</p>
    <form action="modelPro.php" id="myform" method="post"  name="gsj" enctype="multipart/form-data">
        <span class="inp_1">请输入公司简介:</span>
        <textarea name="inp_1" id="inp_1" cols="30" rows="10">
        </textarea>
        <span class="inp_2">上传公司图片:</span>
        <input type="file"  name="pic[]" id="inp_2"/>
        <span class="inp_3">请输入企业宗旨：</span>
        <input type="text" name="inp_3" id="inp_3"/>
        <span class="inp_4">请输入经营理念：</span>
        <input type="text" name="inp_4" id="inp_4"/>
        <span class="inp_5">请输入价值观念：</span>
        <textarea name="inp_5" id="inp_5" cols="30" rows="10"></textarea>
        <span class="inp_6">请输入企业特点：</span>
        <textarea name="inp_6" id="inp_6" cols="30" rows="10"></textarea>
        <span class="inp_7">上传团队照片：</span>
        <input type="file" name="pic[]" id="inp_7"/>
        <input type="button" value="提交" id="inp_btn" class="submit"/>
    </form>
</div>