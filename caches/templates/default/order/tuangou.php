<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","head",TPLID); ?>

<link rel="stylesheet" href="<?php echo R;?>js/dialog/ui-dialog.css" />
<script src="<?php echo R;?>js/dialog/dialog-plus.js"></script>
<link href="<?php echo R;?>css/validform.css" rel="stylesheet" />
<script src="<?php echo R;?>js/validform.min.js"></script>
<style>
    .Validform_wrong {
        position: absolute;
        left:350px;
        top: 2px;
    }
    .Validform_right {
        position: absolute;
        left:350px;
        top: 2px;
    }
</style>
<!-- end 为表单验证修改样式-->
<div class="container">
    <div class="dingdan-box ">
        <div class="row">
            <h2 class=" text-center margin_bottom50 ">填写联系人信息</h2>
            <hr>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-4col-xs-12">
                <form class="form-horizontal" name="myform" action="" method="post">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="请输入姓名" name="truename" value="<?php echo $memberinfo['truename'];?>" datatype="s2-5" errormsg="姓名至少2个中文字符,最多5个中文字符！" nullmsg="请输入姓名">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="请输入手机号码" name="mobile" value="<?php echo $memberinfo['mobile'];?>" datatype="m" errormsg="请输入正确的手机号码" nullmsg="请输入手机号码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            订单标题：<?php echo $title;?>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary btn-block"> <strong class="font_size18">提交订单</strong> </button></form>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>
</div>
<script>
    function st_pinpai(lid) {
        $("#chexing").empty();
        var option = $("<option>").val('').text("请选择车型");
        $("#chexing").append(option);
        $.getJSON("/api/get_linkagedata.php", { lid:lid, time: "2pm" }, function(json){
            if(json.code=='100') {
                var str = '';
                $.each(json.lists, function( index, value ) {
                    if(value.isgroup==1) {
                        option = $("<option>").val(value.lid).text(value.name+' ').attr('disabled',true);
                    } else {
                        option = $("<option>").val(value.lid).text('  '+value.name);
                    }
                    $("#chexing").append(option);
                });
            }

        });
    }
    $(function(){
        $(".form-horizontal").Validform({
            tiptype:3
        });
    })
</script>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","foot",TPLID); ?>