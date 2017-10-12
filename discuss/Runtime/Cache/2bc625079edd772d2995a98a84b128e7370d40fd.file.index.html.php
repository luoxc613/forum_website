<?php /* Smarty version Smarty-3.1.6, created on 2016-10-10 23:30:36
         compiled from "F:/orange/luntan/discuss/Home/View\Article\index.html" */ ?>
<?php /*%%SmartyHeaderCode:6359563c4afe2f5977-53555240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bc625079edd772d2995a98a84b128e7370d40fd' => 
    array (
      0 => 'F:/orange/luntan/discuss/Home/View\\Article\\index.html',
      1 => 1476113428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6359563c4afe2f5977-53555240',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_563c4afebd904',
  'variables' => 
  array (
    'e' => 0,
    'v4' => 0,
    'c' => 0,
    'v' => 0,
    'a' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c4afebd904')) {function content_563c4afebd904($_smarty_tpl) {?><!DOCTYPE HTML>
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
 $_from = $_smarty_tpl->tpl_vars['c']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
     <?php if ($_smarty_tpl->tpl_vars['v']->value['session']==3){?>
                  <a href="<?php echo @__MODULE__;?>
/User/threelevel_1">个人中心</a>
                   <a href="<?php echo @__CONTROLLER__;?>
/publish">发布文章</a>
                   <a href="<?php echo @__CONTROLLER__;?>
/tuichu">退出登录</a>
               
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['v']->value['session']==2){?>
                  <a href="<?php echo @__MODULE__;?>
/User/twolevel_1">个人中心</a>
                   <a href="<?php echo @__CONTROLLER__;?>
/publish">发布文章</a>
                   <a href="<?php echo @__CONTROLLER__;?>
/tuichu">退出登录</a>
               
            <?php }?>
             <?php if ($_smarty_tpl->tpl_vars['v']->value['session']==1){?>
                  
                  <a href="<?php echo @__MODULE__;?>
/User/onelevel">个人中心</a>
                   <a href="<?php echo @__CONTROLLER__;?>
/tuichu">退出登录</a>
               
            <?php }?>
        </div>
        <?php } ?>
    </div>
    <div class="smallbanner">
        <img src="<?php echo @CSS_URL;?>
images/smallbanner.gif" />
    </div>
    <div class="contentbg">
        <div class="contentlist">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['a']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <li class="passagelist">
                <div class="rightfig" >
                    
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
" alt="picture of artical" /></div>
                <div class="leftinfo">
                    <div class="classification"><?php if ($_smarty_tpl->tpl_vars['v']->value['tag']==1){?>高频交易<?php }?><?php if ($_smarty_tpl->tpl_vars['v']->value['tag']==2){?>阿尔法策略<?php }?><?php if ($_smarty_tpl->tpl_vars['v']->value['tag']==3){?>事件驱动<?php }?></div>
                    <h2><a href="<?php echo @__CONTROLLER__;?>
/detail?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></h2>
                    <div class="contentmeta">
                        <p>发布于&nbsp;</p>
                        <span><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
</span>
                        <p>作者:</p>
                        <span><?php echo $_smarty_tpl->tpl_vars['v']->value['nickname'];?>
</span>
                        <p>评论:</p>
                        <span><?php echo $_smarty_tpl->tpl_vars['v']->value['reply'];?>
</span>
                    </div>
                    <p class="passagesum">
                        <?php echo $_smarty_tpl->tpl_vars['v']->value['introduction'];?>

                    </p>
                </div>
            </li>
            <?php } ?>
            
        </div>
        <div class="tcdPageCode">
            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

        </div>
    </div>
    <div class="footer">
        <p>版权所有 © 2013 3.武汉奎可利金融科技有限公司&nbsp;&nbsp;&nbsp;<!-- <a href="">后台入口</a> -->
        </p>
        <p>备案号是 鄂ICP备14006544号</p>
    </div>
    
</body>
</html><?php }} ?>