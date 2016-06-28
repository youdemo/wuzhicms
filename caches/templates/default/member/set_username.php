<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','head'); ?>
<!--正文部分-->
<link href="<?php echo R;?>css/validform.css" rel="stylesheet" />
<script src="<?php echo R;?>js/validform.min.js"></script>
<div class="container memberframe">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <!--左侧开始-->
            <div class="memberleft">
                <div class="membertitle"><h3>会员中心</h3></div>
                <div class="memberborder">
                    <?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','left'); ?>
                </div>
            </div>
            <!--左侧结束-->

            <!--右侧开始-->
            <div class="memberright">

                <div class="memberbordertop">
                    <section class="panel">
                        <header class="panel-heading"><span class="title">设置用户名</span></header>

                        <div id="myTabContent" class="tab-content tabsbordertop">

                            <div role="tabpanel" class="tab-pane fade active in" id="tabs1" aria-labelledby="1tab">
                                <div class="panel-body" id="panel-bodys">
                                    <form class="form-horizontal" role="form" name="passworform" action="" method="post" id="passworform" onsubmit="return check_password();">
                                        <table class="table  table-hover text-center">
                                            <tbody>

                                            <tr>
                                                <td><div class="form-groupinfo"><label class="col-sm-3 control-label text-right">用户名：</label><div class="col-sm-3 text-left">
                                                    <input type="text" name="username" class="form-control Validform_error" placeholder="请输入用户名" datatype="/^[a-z0-9\u4E00-\u9FA5\uf900-\ufa2d\-]{3,20}$/i" errormsg="用户名为3-20位数字、字母、汉字和-组成" sucmsg="OK" ajaxurl="index.php?m=member&amp;f=index&amp;v=public_check_user" nullmsg="请填写信息！">
                                                </div></div></td>
                                            </tr>


                                            <tr>
                                                <td><div class="form-groupinfo"><label class="col-sm-3 control-label text-right"> </label><div class="col-sm-3 text-left"><button type="submit" name="submit" class="btn btn-order">点击验证</button></div></div></td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </form>
                                </div>

                            </div>






                        </div>


                    </section>
                </div>

            </div>
            <!--右侧结束-->


        </div>
    </div>
</div>
<!--正文部分-->
<script type="text/javascript">
    $(function(){
        $(".form-horizontal").Validform({
            tiptype:1
        });
    })
</script>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","foot"); ?>