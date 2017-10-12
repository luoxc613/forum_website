<?php /* Smarty version Smarty-3.1.6, created on 2016-10-10 23:21:14
         compiled from "F:/orange/luntan/discuss/Home/View\Article\publish.html" */ ?>
<?php /*%%SmartyHeaderCode:28734563f5831037ac8-00558260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdbf34ecb689d45de503efa211b357a3da2a0e12' => 
    array (
      0 => 'F:/orange/luntan/discuss/Home/View\\Article\\publish.html',
      1 => 1476112872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28734563f5831037ac8-00558260',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_563f583156bc7',
  'variables' => 
  array (
    'd' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563f583156bc7')) {function content_563f583156bc7($_smarty_tpl) {?><!DOCTYPE HTML>
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
					<a href="<?php echo @__CONTROLLER__;?>
/index?tag=1">高频交易</a>
				</li>
				<li>
					<a href="<?php echo @__CONTROLLER__;?>
/index?tag=2">阿尔法策略</a>
				</li>
				<li>
					<a href="<?php echo @__CONTROLLER__;?>
/index?tag=3">事件驱动策略</a>
				</li>
				<li>
					<a href="<?php echo @__MODULE__;?>
/Index/about.html">关于我们</a>
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
                  
                   <a href="<?php echo @__CONTROLLER__;?>
/tuichu">退出登录</a>
               
            <?php }?>
        </div>
        <?php } ?>
	</div>
	<div class="contentbg">
		<div class="passagediv">
			<form class="inner" action="<?php echo @__SELF__;?>
" method="post" name="articalfrom" enctype="multipart/form-data">
				<!-- <div class="classlist">
						<h3 id="selected" name="class" onmouseover="showitem()" onmouseout="hiditem()">选择分类</h3>
						<ul id="classlist">
						<li class="classitem" onclick="changeitem(0)" onmouseover="showitem()" onmouseout="hiditem()">高频交易</li>
						<li class="classitem" onclick="changeitem(1)" onmouseover="showitem()" onmouseout="hiditem()">阿尔法策略</li>
						<li class="classitem" onclick="changeitem(2)" onmouseover="showitem()" onmouseout="hiditem()">事件驱动策略</li>
					</ul>
				</div> -->
				<p class="coverimgtxt">选择分类：</p>
				<input type="radio" checked="checked" name="class" value="1" /><label>高频交易</label>
				<input type="radio" checked="checked" name="class" value="2" /><label>阿尔法策略</label>
				<input type="radio" checked="checked" name="class" value="3" /><label>事件驱动策略</label><br />
				<p class="coverimgtxt">输入文章标题：</p>
				<input type="text" name="title" class="articalname" placeholder="请输入文章标题..." autofocus="autofocus" required="required" />
				<p class="coverimgtxt">上传封面照片：</p>
				<div class="file-box">
				
				 
				<input type="input" name="picture" laceholder="请输入上传封面照片URL..."class="filebtn" multiple />
				<!-- <input type='text' name='textfield' id='textfield' class='txt' />
				<input type='button' class='btn' value='浏览...' />
				<input type="file" name="fileField" class="file" id="fileField" size="28" onchange="document.getElementById('textfield').value=this.value" /> -->
				
				</div> 
				<p class="coverimgtxt">输入文章概要：</p>
				<textarea class="summary" required="required" name="introduction" placeholder="请输入文章概要..."></textarea>
				<p class="bigger">内容</p>
				<div class="wmd-panel2">
					<div id="wmd-button-bar"></div>
					<textarea name="content1"class="wmd-input" id="wmd-input"></textarea>
				</div>
				<input id="submitartical" type="submit" value="发表文章" onclick="submitarc()" />
				<input id="cancel" type="submit" value="取消" onclick="clearartical()" />
				<div id="wmd-preview" name="artical" class="wmd-panel wmd-preview"></div>
				<input name="content" type="text" id="articalcontent"  />
				<div class="clear"></div>
			</form>
		</div>
	</div>
	<div class="footer">
		<p>版权所有 © 2013 3.武汉奎可利金融科技有限公司&nbsp;&nbsp;&nbsp;<!-- <a href="">后台入口</a> -->
        </p>
		<p>备案号是 鄂ICP备14006544号</p>
	</div>
	<script type="text/javascript" src="<?php echo @JS_URL;?>
lib/Markdown.Converter.js"></script>
	<script type="text/javascript" src="<?php echo @JS_URL;?>
lib/Markdown.Sanitizer.js"></script>
	<script type="text/javascript" src="<?php echo @JS_URL;?>
lib/Markdown.Editor.js"></script>

	<script type="text/javascript">
            (function () {
                var converter1 = Markdown.getSanitizingConverter();
                
                converter1.hooks.chain("preBlockGamut", function (text, rbg) {
                    return text.replace(/^ {0,3}""" *\n((?:.*?\n)+?) {0,3}""" *$/gm, function (whole, inner) {
                        return "<blockquote>" + rbg(inner) + "</blockquote>\n";
                    });
                });
                
                var editor1 = new Markdown.Editor(converter1);
                
                editor1.run();
            })();
    </script>
	<script type="text/javascript"> 
       function submitarc() {
       		var articalcontent = document.getElementById('wmd-preview').innerHTML;
       		document.getElementById('articalcontent').value = articalcontent;
        } 
       
		function clearartical() {
			if (confirm("你确定放弃发布这篇文章？")) {  
            document.getElementById('wmd-preview').innerHTML = null;
            document.getElementById('wmd-input').value = null;
        	}  
		}
    </script>
	<noscript>你的浏览器没有启用脚本，所以无法正常显示~</noscript>
	
</body>
</html><?php }} ?>