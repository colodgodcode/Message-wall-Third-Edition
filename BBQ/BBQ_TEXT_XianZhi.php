<?php

include_once('./BBQ_PEIZHI.php');
//判断输入内容长度，是否超过限制
$PANDUAN_TEXT = count($Jian_text_1);
$PANDUAN_TEXT = (int)$PANDUAN_TEXT;
if($PANDUAN_TEXT > $xianzhi_text){
    die(header("location:./BBQ_TEXT_XIANZHI.php"));
}

?>