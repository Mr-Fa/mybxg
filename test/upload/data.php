<?php 
  // var_dump($_FILES);
  // 获取上传的文件名称
  $filename = $_FILES['myfile']['name'];
  // 获取文件在服务器中临时位置
  $tmpname = $_FILES['myfile']['tmp_name'];
  // 目标位置
  $targetname = './'.time().$filename;
  // 把临时文件移动到目标位置
  move_uploaded_file($tmpname,$targetname);
  // 返回图片
  echo '<img src="'.$targetname.'">';
  
 ?>