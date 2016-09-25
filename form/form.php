<?php
header('Content-Type:text/html;charset=utf-8');
//$username = $_GET['username'];
//$password = $_GET['password'];
$username = $_POST['username'];
$password = $_POST['password'];
echo '用户名：'.$username.'密码：'.$password;
/*运行结束回到初始界面*/
header("location:./form.html");
/*判断同步请求是否成功，在后面加一个标识位flag*/
header("location:./form.html?flag=1");
?>