<?php 

  $uname = $_GET['uname'];
  $pw = $_GET['password'];

  if($uname == 'admin' && $pw == '123'){
    // 开启session
    session_start();
    $_SESSION['username'] = $uname;

  };
  // 如果客户端禁用了cookie，可以通过URL重写（其实就是在所有的URL中添加sessionID作为参数）的方式使用session

  $str = $_SESSION['username'];
  echo $str;

 ?>