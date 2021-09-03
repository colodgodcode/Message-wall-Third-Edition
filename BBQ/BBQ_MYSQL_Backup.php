<?php

//定义数据库连接信息，注意：不要有空格
$dbhost = 'demo:3306';  // mysql服务器主机地址,可以加上:端口
$dbuser = 'demo';            // mysql用户名
$dbpwd = 'demo';          // mysql用户名密码
$dbname ='demo';         //mysql数据库名
$dbform = 'demo';          //mysql表名

//连接数据库
$db = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

//判断是否连接成功
if($db->connect_errno <> 0){
    die('数据库连接失败');
}

?>
