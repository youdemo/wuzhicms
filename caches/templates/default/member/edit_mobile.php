<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","head"); ?>
<body class="gray-bg">
<?php if($set_iframe==0) { ?>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","iframetop"); ?>
<?php } else { ?>
<div style="padding-top: 15px;"></div>
<?php } ?>
<div class="container-fluid  ie8-member">
    <div class="row row-40" >
        <?php if($set_iframe==0) { ?>
        <div class="col-sm-3 left-nav padding-right0">
            <!--左侧导航-->
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="nav-close"><i class="fa fa-times-circle"></i>
                </div>
                <div class="slimScrollDiv" style="position: relative; width: auto; height: 100%;">
                    <div class="sidebar-collapse" style="width: auto; height: 100%;">
                        <?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","left"); ?>
                    </div>
                </div>
            </nav>
            <!--end 左侧导航-->
        </div><!--col-sm-3--><?php } ?>

        <div class="<?php if($set_iframe==0) { ?>col-sm-9<?php } else { ?>col-sm-12<?php } ?> paddingleft0">

            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>修改手机</h5>
                        </div>
                        <div class="ibox-content" style="min-height: 500px;">
                            <div class="row">
                                <form class="form-horizontal" role="form" name="passworform" action="?m=member&f=index&v=edit_mobile" method="post" id="passworform" onsubmit="return check_form();">
                                    <table class="table-dashed table-advance table-hover ">
                                        <tbody>

                                        <tr>
                                            <td><div class="form-groupinfo"><label class="col-sm-3 control-label text-right">手机号：</label><div class="col-sm-3 text-left"><input type="mobile" class="form-control" id="mobile" placeholder="请输入手机号" name="mobile" type="text" value="<?php echo $memberinfo['mobile'];?>"></div></div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="form-groupinfo"><label class="col-sm-3 control-label text-right">验证码：</label><div class="col-sm-8 text-left">
                                                <div class="input-group">
                                                    <input type="text" id="Verificationcode" name="checkcode" class="form-control" placeholder="验证码" onfocus="javascript:document.getElementById('code_img').src='<?php echo WEBURL;?>api/identifying_code.php?rd='+Math.random();void(0);"> <span class="input-group-btn" style="padding-left: 10px;"><img src="<?php echo R;?>images/logincode.gif" id="code_img" alt="点击刷新" onclick="javascript:this.src='<?php echo WEBURL;?>api/identifying_code.php?rd='+Math.random();void(0);">
                                            </span></div>
                                            </div></div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="form-groupinfo"><label class="col-sm-3 control-label text-right"> </label><div class="col-sm-3 text-left"><button type="button" name="getsms" class="btn btn-warning" onclick="send_sms();">点击获取短信</button></div></div></td>
                                        </tr>

                                        <tr>
                                            <td><div class="form-groupinfo"><label class="col-sm-3 control-label text-right">短信验证码：</label><div class="col-sm-3 text-left"><input type="text" class="form-control" id="smscode" placeholder="请输入手机收到的短信验证码" name="smscode"></div></div></td>
                                        </tr>


                                        <tr>
                                            <td><div class="form-groupinfo"><label class="col-sm-3 control-label text-right"> </label><div class="col-sm-3 text-left"><button type="submit" name="submit" class="btn btn-primary">提 交</button></div></div></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="<?php echo R;?>js/dialog/ui-dialog.css" />
<script src="<?php echo R;?>js/dialog/dialog-plus.js"></script>
<!--正文部分-->


<script>
    $(document).ready(function () {
        $('.form-groupinfo').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>

<script type="text/javascript">
    function send_sms() {
        if($("#mobile").val()=='') {
            var d = dialog({
                content: '手机号不能为空！'
            });
            d.show();
            setTimeout(function () {
                d.close().remove();
                $("#mobile").focus();
            }, 2000);
            return false;
        }
        if($("#Verificationcode").val()=='') {
            var d = dialog({
                content: '验证码不能为空！'
            });
            d.show();
            setTimeout(function () {
                d.close().remove();
                $("#Verificationcode").focus();
            }, 2000);
            return false;
        }
        var mobile = $("#mobile").val();
        var checkcode = $("#Verificationcode").val();
        $.get("index.php?m=sms&f=sms&v=sendsms", { mobile: mobile,checkcode:checkcode, time: Math.random()},
                function(data){
                    if(data==201) {
                        alert('手机号错误');
                    } else if(data==202) {
                        alert('验证码错误');
                    } else if(data==0) {
                        var d = dialog({
                            content: '短信发送成功，请将收到的短信验证码填写到“短信验证码”'
                        });
                        d.show();
                        setTimeout(function () {
                            d.close().remove();
                        }, 5000);
                    } else {
                        alert('短信发送失败，请重试，或者联系客服！');
                    }
                });

    }
    function check_form() {
        var smscode = $("#smscode").val();
        if(smscode=='') {
            var d = dialog({
                content: '请输入收到的手机短信验证码'
            });
            d.show();
            setTimeout(function () {
                d.close().remove();
            }, 5000);
            $("#smscode").focus();
            return false;
        }
    }

</script>

<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","foot"); ?>