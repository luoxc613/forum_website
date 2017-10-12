<?php /* Smarty version Smarty-3.1.6, created on 2015-11-24 23:37:40
         compiled from "F:/orange/luntan/discuss/Home/View\Article\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:20922563c95efafb048-98922590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2167ef402be1945f1bdbc925f4ca71da30e26da2' => 
    array (
      0 => 'F:/orange/luntan/discuss/Home/View\\Article\\detail.html',
      1 => 1448379458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20922563c95efafb048-98922590',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_563c95f036d74',
  'variables' => 
  array (
    'e' => 0,
    'v4' => 0,
    'f' => 0,
    'v' => 0,
    'a' => 0,
    'b' => 0,
    'v2' => 0,
    'c' => 0,
    'v3' => 0,
    'd' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c95f036d74')) {function content_563c95f036d74($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>宽客小岛</title>
    <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
lib/normalize.css"></head>
    <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
style.css">
<body>
    <div class="headerbg">
        <div class="topnav">
            <ul class="nav">
                <li>
                    <a href="<?php echo @__MODULE__;?>
/Index/index.html">首页</a>
                </li>
                <?php  $_smarty_tpl->tpl_vars['v4'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v4']->_loop = false;
 $_smarty_tpl->tpl_vars['k4'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['e']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v4']->key => $_smarty_tpl->tpl_vars['v4']->value){
$_smarty_tpl->tpl_vars['v4']->_loop = true;
 $_smarty_tpl->tpl_vars['k4']->value = $_smarty_tpl->tpl_vars['v4']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['v4']->value['tag']==1){?>
                <li>
                    <a href="<?php echo @__CONTROLLER__;?>
/index?tag=1" class="selected">高频交易</a>
                </li> 

                <li>
                    <a href="<?php echo @__CONTROLLER__;?>
/index?tag=2">阿尔法策略</a>
                </li>
                <li>
                    <a href="<?php echo @__CONTROLLER__;?>
/index?tag=3">事件驱动策略</a>
                </li>
                <?php }?>
                 <?php if ($_smarty_tpl->tpl_vars['v4']->value['tag']==2){?>
                <li>
                    <a href="<?php echo @__CONTROLLER__;?>
/index?tag=1" >高频交易</a>
                </li> 

                <li>
                    <a href="<?php echo @__CONTROLLER__;?>
/index?tag=2" class="selected">阿尔法策略</a>
                </li>
                <li>
                    <a href="<?php echo @__CONTROLLER__;?>
/index?tag=3">事件驱动策略</a>
                </li>
                <?php }?>

                 <?php if ($_smarty_tpl->tpl_vars['v4']->value['tag']==3){?>
                <li>
                    <a href="<?php echo @__CONTROLLER__;?>
/index?tag=1" >高频交易</a>
                </li> 

                <li>
                    <a href="<?php echo @__CONTROLLER__;?>
/index?tag=2">阿尔法策略</a>
                </li>
                <li>
                    <a href="<?php echo @__CONTROLLER__;?>
/index?tag=3" class="selected">事件驱动策略</a>
                </li>
                <?php }?>
                <?php } ?>
                <li>
                    <a href="<?php echo @__MODULE__;?>
/Index/about.html">关于我们</a>
                </li>
            </ul>
        </div>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <div class="signinandup">
            <?php if ($_smarty_tpl->tpl_vars['v']->value['session']==''){?>
            <a href="<?php echo @__MODULE__;?>
/Login/index">登录</a>
            <a href="<?php echo @__MODULE__;?>
/Register/index">注册</a>

            <?php }?>
     
            <?php if ($_smarty_tpl->tpl_vars['v']->value['session']==2){?>
                  
                   <a href="<?php echo @__CONTROLLER__;?>
/publish">发布文章</a>
                   <a href="<?php echo @__CONTROLLER__;?>
/tuichu">退出登录</a>
               
            <?php }?>
             <?php if ($_smarty_tpl->tpl_vars['v']->value['session']==1){?>
                  
                   <a href="<?php echo @__CONTROLLER__;?>
/tuichu">退出登录</a>
               
            <?php }?>
        </div>
        <?php } ?>
    </div>

    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['a']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <div class="contentbg">
        <div class="passagediv">
       
            <h2><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</h2>
            <div class="contentmeta">
                <p>发布于&nbsp;</p>
                <span class="releasetime"><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
</span>
                <p>作者:</p>
                <span class="author"><?php echo $_smarty_tpl->tpl_vars['v']->value['nickname'];?>
</span>
                <p>评论:</p>
                <span class="commentnuum"><?php echo $_smarty_tpl->tpl_vars['v']->value['reply'];?>
</span>
            </div>
            <div class="wholepassage">
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>

                </p>
            </div>
            <?php } ?>
            <div class="comments">
                <div class="commentsheader">&nbsp;&nbsp;评论</div>
                <div class="list">
                    <ul class="commentlist">
                        <?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v2']->_loop = false;
 $_smarty_tpl->tpl_vars['k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['b']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v2']->key => $_smarty_tpl->tpl_vars['v2']->value){
$_smarty_tpl->tpl_vars['v2']->_loop = true;
 $_smarty_tpl->tpl_vars['k2']->value = $_smarty_tpl->tpl_vars['v2']->key;
?>
                        <li class="commentitem">
                            <div class="user">
                                <?php echo $_smarty_tpl->tpl_vars['v2']->value['nickname'];?>

                            </div>
                            <div class="marktime">
                                <span><?php echo $_smarty_tpl->tpl_vars['v2']->value['time'];?>
</span>
                            </div>
                            <!-- <form  method= "post" action="<?php echo @__SELF__;?>
" name="commentform"> -->
                             <input type="button" name="content" value="回复" class="showreplybtn" onclick="showreply(this)" />
                        <div class="commentcontent">
                                <p><?php echo $_smarty_tpl->tpl_vars['v2']->value['content'];?>
</p>
                            </div>
                            <form class="replyform" method="post" action="<?php echo @__SELF__;?>
">
                            <textarea name="content"   >
                            </textarea>
                            <input type="hidden" name="a_id" value="<?php echo $_smarty_tpl->tpl_vars['v2']->value['a_id'];?>
">
                            <input type="hidden" name="r_id" value="<?php echo $_smarty_tpl->tpl_vars['v2']->value['id'];?>
">
                            <input type="submit" value="回复" />
                            <input type="button" value="取消" onclick="hiddenreply(this)" class="replycancel" />
                            </form>
                              <!-- <input type="hidden" name="a_id" value="<?php echo $_smarty_tpl->tpl_vars['v2']->value['a_id'];?>
"> -->
                              <!-- <input type="hidden" name="r_id" value="<?php echo $_smarty_tpl->tpl_vars['v2']->value['id'];?>
"> -->
                            <!-- <input type="hidden" name="u_id" value="<?php echo $_smarty_tpl->tpl_vars['v2']->value['user_id'];?>
"> -->

                            <!-- </form> -->
                            <?php  $_smarty_tpl->tpl_vars['v3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v3']->_loop = false;
 $_smarty_tpl->tpl_vars['k3'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['c']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v3']->key => $_smarty_tpl->tpl_vars['v3']->value){
$_smarty_tpl->tpl_vars['v3']->_loop = true;
 $_smarty_tpl->tpl_vars['k3']->value = $_smarty_tpl->tpl_vars['v3']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['v3']->value['r_id']==$_smarty_tpl->tpl_vars['v2']->value['id']){?>
                            <div class="rereply"  >
                                <p><?php echo $_smarty_tpl->tpl_vars['v3']->value['content'];?>
</p>
                                <span class="username"><?php echo $_smarty_tpl->tpl_vars['v3']->value['nickname'];?>
</span>
                                <span class="marktime"><?php echo $_smarty_tpl->tpl_vars['v3']->value['time'];?>
</span>
                            </div>
                            <?php }?>
                            <?php } ?>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <?php  $_smarty_tpl->tpl_vars['v3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v3']->_loop = false;
 $_smarty_tpl->tpl_vars['k3'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v3']->key => $_smarty_tpl->tpl_vars['v3']->value){
$_smarty_tpl->tpl_vars['v3']->_loop = true;
 $_smarty_tpl->tpl_vars['k3']->value = $_smarty_tpl->tpl_vars['v3']->key;
?>
                <form  method= "post" action="<?php echo @__SELF__;?>
" name="commentform" class="commentform">
                
                <input type="hidden" name="a_id" value="<?php echo $_smarty_tpl->tpl_vars['v3']->value['a_id'];?>
">
                <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['v3']->value['u_id'];?>
">
                <input type="hidden" name="r_id" value=0>
                <textarea   name="content" type="text" class="commentarea" required="required"></textarea>
                <input id="submitcomment" type="submit" value="发表评论" onclick="submitcomment()" /> 

                
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
     <div class="tcdPageCode">
            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

        </div>
    <div class="footer">
        <p>版权所有 © 2013 3.武汉奎可利金融科技有限公司&nbsp;&nbsp;&nbsp;<!-- <a href="">后台入口</a> -->
        </p>
        <p>备案号是 鄂ICP备14006544号</p>
    </div>
    
    <script src="<?php echo @JS_URL;?>
lib/jquery-2.0.0.min.js"></script>
    <script type="text/javascript"> 
    function showreply(a) {
        var showbtn = $(a);
        var replyform = $(showbtn).siblings('form');
        replyform.css({'display':'block'});
    }
    function hiddenreply(b) {
        var hidbtn = $(b);
        var replyform = $(hidbtn).parents('form');
        replyform.css({'display':'none'});
    }
    </script>
    
</body>
</html><?php }} ?>