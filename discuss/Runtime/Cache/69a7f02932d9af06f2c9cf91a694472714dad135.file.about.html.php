<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 19:02:12
         compiled from "F:/orange/luntan/discuss/Home/View\Index\about.html" */ ?>
<?php /*%%SmartyHeaderCode:5147563eae94c3df45-16601329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69a7f02932d9af06f2c9cf91a694472714dad135' => 
    array (
      0 => 'F:/orange/luntan/discuss/Home/View\\Index\\about.html',
      1 => 1447671699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5147563eae94c3df45-16601329',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_563eae95089e9',
  'variables' => 
  array (
    'd' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563eae95089e9')) {function content_563eae95089e9($_smarty_tpl) {?><!DOCTYPE HTML>
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
                    <a href="<?php echo @__CONTROLLER__;?>
/index">首页</a>
                </li>
                <li>
                    <a href="<?php echo @__MODULE__;?>
/Article/index?tag=1">高频交易</a>
                </li>
                <li>
                    <a href="<?php echo @__MODULE__;?>
/Article/index?tag=2">阿尔法策略</a>
                </li>
                <li>
                    <a href="<?php echo @__MODULE__;?>
/Article/index?tag=3">事件驱动策略</a>
                </li>
                <li>
                    <a href="<?php echo @__CONTROLLER__;?>
/about.html">关于我们</a>
                </li>
            </ul>
        </div>
       <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
     
            <?php if ($_smarty_tpl->tpl_vars['v']->value['session']!=''){?>
                  
                   <a href="<?php echo @__MODULE__;?>
/Article/publish">发布文章</a>
                   <a href="<?php echo @__MODULE__;?>
/Article/tuichu">退出登录</a>
               
            <?php }?>
        </div>
        <?php } ?>  
    </div>
    <div class="contentbg">
        <div class="passagediv aboutus"> 
        <h3>关于我们</h3>
        <h4>什么是宽客小岛</h4>
        <p>我们是全球的社区，拥有成千的相信科技力量丰富人类生活的成员。</p>
        <p>我们是公益组织，致力于为全世界用户提升互联网使用体验。</p>
        <p>我们还是一项开源项目，代码被全世界分享，共同恪守Mozilla宣言。</p>
        <h4>准则</h4>
        <p>互联网是现代生活不可分割的一部分，是教育，交流，合作，商业，娱乐，以及整体社会的关键组成部分。
互联网是全球公共资源，必须保证开放性和可用性。
互联网应该丰富人类生活。
用户的网络安全是基本要求，不可忽视。
互联网用户必须有能力感知和规范自己的上网行为。
作为公共资源的互联网其有效性取决于信息交互（网络协议，数据格式，内容）创新，和世界各地用户的自主参与。
自由和开放源代码软件有助于互联网作为公共资源的持续发展。
透明的社区流程有利于提升社区的可参与性，责任制，和诚信度。
互联网发展过程中的商业化参与有众多优点。维持商业目标和公共利益之间的平衡至关重要。
扩展互联网的公共利益层面是一个非常重要的目标，值得我们赋予时间、精力，和承诺。
</p>
        <h4>联系我们</h4>
        <p>联系电话（TEL）：1545761248
</p>
        <p>地址（ADD）：xxxxxxxxxxxxxxxxxxxxxxxxx</p>
        <p>邮箱：xxxxxxxxx@xxxxx.com</p>
        </div>
    </div>
    <div class="footer">
        <p>
            版权所有 © 2013 xxxxxxxxxx. xxxx有限公司&nbsp;&nbsp;&nbsp;
            <a href="">后台入口</a>
        </p>
        <p>京ICP备xxxxxxxxx号 京公网安备xxxxxxxxxxxx</p>
    </div>
</body>
</html><?php }} ?>