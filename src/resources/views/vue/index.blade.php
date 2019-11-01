<?php
?>
<link href="/layui/css/layui.css" rel="stylesheet"/>
<script src="/js/jquery2.2.4/jquery.js"></script>
<script src="/layui/layui.js"></script>
<script>
    layui.use('upload', function(){
        var $ = layui.jquery
            ,upload = layui.upload;
        //多图片上传
        upload.render({
            elem: '#test3'
            ,url: '/uploadFile'
            ,multiple: true,
            accept: 'file'
            ,exts: 'jpg|jpeg|pdf'
            ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                    console.log(file);
                });
            }
            ,done: function(res){
                //上传完毕
                console.log(res);
            }
        });
    });
</script>

<div>
    <button type="button" class="layui-btn" id="test3"><i class="layui-icon"></i>上传文件</button>
</div>
