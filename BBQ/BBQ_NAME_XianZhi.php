<?php

//判断输入内容长度，是否超过限制
$PANDUAN_NAME = count($Jian_name_1);
$PANDUAN_NAME = (int)$PANDUAN_NAME;
if($PANDUAN_TEXT > $xianzhi_user){
    die(header("location:./BBQ_YF.php"));
}


?>