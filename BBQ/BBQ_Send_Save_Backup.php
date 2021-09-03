<?php

//调用，连接数据库
include('./BBQ_MYSQL_Backup.php');

//定义时间
$TIME = time();

//设定数据传输的编码
$db->query("SET NAMES UTF8");

//编写SQL
$sql = "INSERT INTO $dbform ( senduser, sendtext, sendtime ) VALUES ( '{$NAME}', '{$TEXT}', '{$TIME}' );";

//执行
$is = $db->query($sql);

//判断是否执行成功
if($is == true){
    echo "成功";
}else{
    echo "失败";
}
?>