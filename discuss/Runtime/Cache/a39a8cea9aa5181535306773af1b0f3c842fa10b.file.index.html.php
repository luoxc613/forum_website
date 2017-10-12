<?php /* Smarty version Smarty-3.1.6, created on 2016-09-05 19:03:26
         compiled from "F:/orange/luntan/discuss/Home/View\Register\index.html" */ ?>
<?php /*%%SmartyHeaderCode:16023563b139a5a9d68-16132152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a39a8cea9aa5181535306773af1b0f3c842fa10b' => 
    array (
      0 => 'F:/orange/luntan/discuss/Home/View\\Register\\index.html',
      1 => 1447860715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16023563b139a5a9d68-16132152',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_563b139aa4980',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563b139aa4980')) {function content_563b139aa4980($_smarty_tpl) {?><!DOCTYPE HTML>
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
					<a href="<?php echo @__MODULE__;?>
/Index/about.html">关于我们</a>
				</li>
			</ul>
		</div>
		<div class="signinandup">
			<a href="<?php echo @__MODULE__;?>
/Login/index">登录</a>
			<a href="<?php echo @__CONTROLLER__;?>
/index">注册</a>
		</div>
	</div>
	<div class="signupbg">
		<div class="signupdiv">
			<div class="signupimg">
				<img src="<?php echo @CSS_URL;?>
images/login.gif" alt="sigin image" />
			</div>
			<div class="signupform">
				<p>注册</p>
				<a href="<?php echo @__MODULE__;?>
/Login/index">切换登录</a>
				<form method="post" action="<?php echo @__SELF__;?>
">
					<input type="text" name="username" placeholder="用户名" autofocus="autofocus" required="required" />
					<input type="text" name="nickname" placeholder="昵称" required="required" />
					<input type="password" name="password" placeholder="输入密码" required="required" />
					<input type="password" name="r_password" placeholder="请再次输入密码" required="required" />
					<input type="submit" name="submit" value="注册">
				</form>
			</div>
		</div>
	</div>
	<div class="footer">
		<p>版权所有 © 2013 3.武汉奎可利金融科技有限公司&nbsp;&nbsp;&nbsp;<!-- <a href="">后台入口</a> -->
        </p>
		<p>备案号是 鄂ICP备14006544号</p>
	</div>
</body>
</html><?php }} ?>