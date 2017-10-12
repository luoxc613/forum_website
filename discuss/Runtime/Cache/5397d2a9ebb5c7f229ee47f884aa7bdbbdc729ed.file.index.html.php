<?php /* Smarty version Smarty-3.1.6, created on 2015-11-18 22:54:22
         compiled from "F:/orange/luntan/discuss/Home/View\Login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:23586563b1666551847-88039716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5397d2a9ebb5c7f229ee47f884aa7bdbbdc729ed' => 
    array (
      0 => 'F:/orange/luntan/discuss/Home/View\\Login\\index.html',
      1 => 1447857890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23586563b1666551847-88039716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_563b16668dbd1',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563b16668dbd1')) {function content_563b16668dbd1($_smarty_tpl) {?><!DOCTYPE HTML>
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
				<a href="<?php echo @__CONTROLLER__;?>
/index">登录</a>
				<a href="<?php echo @__MODULE__;?>
/Register/index">注册</a>
			</div>
		</div>
		<div class="signinbg">
		<div class="signindiv">
			<div class="signinimg">
				<img src="<?php echo @CSS_URL;?>
images/login.gif" alt="signin image" />
			</div>
			<div class="signinform">
				<p>登录</p>
				<a href="<?php echo @__MODULE__;?>
/Register/index">切换注册</a>
				<form action="<?php echo @__SELF__;?>
" method="post">
					<input type="text" name="username" placeholder="用户名" autofocus="autofocus" required="required" />
					<input type="password" name="password" placeholder="输入密码" required="required" />
					<input type="submit" name="submit" value="登录" required="required" />
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