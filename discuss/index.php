<?php 
	
	header("Content-Type: text/html; charset=utf-8") ;
date_default_timezone_set("PRC");
 	define('APP_DEBUG',true);

   define("SITE_URL","/luntan/");
   define("SIMG_URL",SITE_URL."discuss/public/");
  define("JS_URL",SITE_URL."discuss/public/js/");
  define("CSS_URL",SITE_URL."discuss/public/css/");
  define("IMG_URL",SITE_URL."discuss/public/image/");
  // define("FONTS_URL",SITE_URL."party/public/fonts/");
  // define("LOGIN_URL",SITE_URL."party/index.php/User/Login/index");
	include "../ThinkPHP/ThinkPHP.php";
?>
