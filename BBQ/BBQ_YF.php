<?php 
include('./BBQ_Show.php');
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>东墙</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--调用css文件-->
        <link rel="stylesheet" type="text/css" href="./BBQ_CSS/style.css">
        <!--禁止页面复制-->
        <body oncontextmenu='return false' ondragstart='return false' onselectstart='return false' onselect='document.selection.empty()' oncopy='document.selection.empty()'>

    </head>

    <body>

        <div class="ZhuTi">
            <!--首页页面标题-->
            <div class="BiaoTi">
                <h1>东墙上的留言板</h1>
            </div>

            <!--发表留言-->
            <div class='Send'>
                <form action="./BBQ_Save.php" method='post'>
                    <textarea name='SendText' class='TEXT' cols='50' rows='5' placeholder="你想写点啥"></textarea>
                    <input name='UserName' class='USER' type='text' placeholder="你叫啥（可为空）"/>
                    <input class='BTN' type='submit' value='发表' />
                  
                </form>
            </div>
            
            <?php
            foreach( $rows as $row){
            ?>
            <!--查看留言-->
            <div class='Show'>
                <div class='info'>
                    <div class='LOW'>
                        <b>第<?php echo $row["num"];?>楼</b>
                    </div>
                        
                    <b>User: </b><b><span class='USER'><?php echo $row['senduser'];?></span></b>
                    <b><span class='TIME'><?php echo date("Y-m-d H:i:s",$row['sendtime']);?></span></b>
                </div>
                <b><div  style="text-indent:2em" class='TEXT' style="width:100%;height:100%;word-wrap: break-word">
                    <?php echo $row['sendtext'];?>
                </div></b>
            </div>
    
            <?php
            }
            ?>
        </div>
    </body>

</html>