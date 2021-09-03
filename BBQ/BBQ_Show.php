<?php

//！！！注意别有空格！！！
include_once('./BBQ_MYSQL_Backup.php');

//设定数据传输的编码
$db->query("SET NAMES UTF8");

//编写SQL
$sql = "SELECT * FROM $dbform ORDER BY num DESC LIMIT 0,100"; 

//执行
$mysqli_result = $db->query($sql);

if($mysqli_result === false){
    echo 'SQL有错误';
    exit;
}

$rows = [];

while($row = $mysqli_result->fetch_array(MYSQLI_ASSOC)){
    $rows[] = $row;
}


?>
