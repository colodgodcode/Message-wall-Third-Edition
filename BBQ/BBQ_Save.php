<?php 

//接收发送内容
$TEXT = $_POST['SendText'];
$NAME = $_POST['UserName'];


//判断发送内容是否为空，如果为空，自动跳转到BBQ_KONG.php页面
//发送姓名可以为空，如果为空，则自动更名001
if($TEXT == ''){
    die(header("location:./BBQ_KONG.php"));
}

if($NAME == ''){
    $NAME = "001";
}

//调用敏感词组,注意注释
include_once('./BBQ_MinGanCi.php');

//调用中文字符切割规则
//注意，这个功能仅限于php7.0
include_once('./BBQ_QieGe.php');

//切割内容，姓名
//把发送内容分别切割，切割为一个字符一组，两个字符一组，可以加
$Jian_text_1 = mb_str_split($TEXT,1);

//调用内容限制,200个字符
include_once('./BBQ_TEXT_XianZhi.php');

$Jian_name_1 = mb_str_split($NAME,1);

//调用用户名限制，20个字符
include_once('./BBQ_NAME_XianZhi.php');

$Jian_text_2 = mb_str_split($TEXT,2);
$Jian_name_2 = mb_str_split($NAME,2);

//把上述切割后的字符组，与敏感字符组放一块，进行检查
//检查是否有重合的，重合的为交集
//输出交集字符组
$result_name_1=array_intersect($Jian_name_1,$connot_1);
$result_name_2=array_intersect($Jian_name_2,$connot_2);
$result_text_1=array_intersect($Jian_text_1,$connot_1);
$result_text_2=array_intersect($Jian_text_2,$connot_2);

//判断 内容/姓名交集 是否为空，如果为实，就提示；如果为空，向下判断
//如果为实，有敏感词;如果为空，没有
if(empty($result_name_1)){
}else{
    die("有敏感词！！");
}
if(empty($result_name_2)){
}else{
    die("有敏感词！！");
}
if(empty($result_text_1)){
}else{
    die("有敏感词！！");   
}
if(empty($result_text_2)){
}else{
    die("有敏感词！！");   
}

//插入数据库
include('./BBQ_Send_Save_Backup.php');

//跳转到主页
header("location:./BBQ_YF.php");

?>