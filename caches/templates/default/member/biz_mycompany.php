<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','head'); ?>
<link rel="stylesheet" href="<?php echo R;?>js/dialog/ui-dialog.css" />
<script src="<?php echo R;?>js/dialog/dialog-plus.js"></script>
<link href="<?php echo R;?>css/validform.css" rel="stylesheet" />
<script src="<?php echo R;?>js/validform.min.js"></script>
<script src="<?php echo R;?>js/base.js"></script>
<script type="text/javascript" src="<?php echo R;?>js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="<?php echo R;?>js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="<?php echo R;?>js/ueditor/ueditor.all.min.js"></script>

<link href="<?php echo R;?>js/jquery-ui/jquery-ui.css" rel="stylesheet">
<script src="<?php echo R;?>js/jquery-ui-1.10.1.custom.min.js"></script>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>设置公司信息</h5>
                    </div>
                    <div class="ibox-content">
                        <form name="myform" class="form-horizontal" action="" method="post" id="myform">
                            <table class="table-dashed table-striped table-advance">
                                <tr>
                                    <td><div class="form-groupinfo"><label class="col-sm-2 control-label text-right text-blod"><font color="red">*</font> 公司名称：</label><div class="col-sm-10 text-left">
                                        <input type="text" style="color:#" name="form[title]" id="title" maxlength="80" value="<?php echo $data['title'];?>" <?php if($data['title'] && $data['status']==9) { ?>readonly<?php } ?> class="form-control" datatype="*6-80" nullmsg="请输入公司名称" errormsg="公司名称至少6个字符,最多80个字符！">                                       </div></div></td>
                                </tr>

                                <?php $n=1;if(is_array($field_list)) foreach($field_list AS $info) { ?>
                                <tr>
                                    <td><div class="form-groupinfo"><label class="col-sm-2 control-label text-right text-blod"><?php if($info['star']) { ?><font color="red">*</font><?php } ?> <?php echo $info['name'];?>：</label><div class="col-sm-10 text-left">
                                        <?php echo $info['form'];?>
                                    </div></div></td>
                                </tr>
                                <?php $n++;}?>
                                <tr>
                                    <td><div class="form-groupinfo"><label class="col-sm-2 control-label text-right"> </label><div class="col-sm-3 text-left"><input type="submit" name="submit" id="submit" value="提交" class="btn btn-primary"></div></div></td>
                                </tr>
                            </table>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-form" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 b-r">
                            <h3 class="m-t-none m-b">登录</h3>

                            <p>欢迎登录本站(⊙o⊙)</p>

                            <form role="form">
                                <div class="form-group">
                                    <label>用户名：</label>
                                    <input type="email" placeholder="请输入用户名" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>密码：</label>
                                    <input type="password" placeholder="请输入密码" class="form-control">
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>登录</strong>
                                    </button>
                                    <label>
                                        <input type="checkbox" class="i-checks">自动登录</label>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <h4>还不是会员？</h4>
                            <p>您可以注册一个账户</p>
                            <p class="text-center">
                                <a href="form_basic.html"><i class="fa fa-sign-in big-icon"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 全局js -->
    <script src="<?php echo R;?>member/js/jquery.min.js?v=2.1.4"></script>
    <script src="<?php echo R;?>member/js/bootstrap.min.js?v=3.3.5"></script>

    <!-- 自定义js -->
    <script src="<?php echo R;?>member/js/content.js?v=1.0.0"></script>

    <!-- iCheck -->
    <script src="<?php echo R;?>member/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
<script>
    $(document).ready(function () {
        $('.form-groupinfo').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
    $("#submit").click(function(){
        t=setTimeout("hide_formtips()",3000);
    });
    function hide_formtips() {
        $.Hidemsg();
        clearInterval(t);
    }
    $(function(){
        $(".form-horizontal").Validform({
            tiptype:1
        });
    })
</script>
</body>

</html>