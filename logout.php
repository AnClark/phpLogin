<?php
/********************** 注销登录 **********************/
session_start();			//将会话还原回前台

//检验是否已登录
//如果已登录，就注销
if(isset($_SESSION['userid'])){
	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
	exit;
}
//如果未登录，就退回用户登录界面
else{
    header("Location:login.html");
    exit();
}
?>