<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>

</head>
<body>
  <ul>
  <?php 
    // $arr = array('apple','orange','banana','pineapple');
    // for ($i=0; $i < count($arr); $i++) { 
    //   echo '<li>'.$arr[$i].'</li>';
    // }
    // 获取cookie
    $cookie = $_COOKIE;
    // var_dump($cookie['abc']);
    // echo $cookie['abc'];
    // 设置cookie
    setcookie('key','abc');
    echo 123;
   ?>
   </ul>
</body>
</html>