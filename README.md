# Message-wall-Third-Edition
这是基于PHP7.0+MYSQL8.0+宝塔搭建的留言墙，是第一版和第二版的小升级，支持css背景动画  

支持敏感词屏蔽  

支持简单预防xss攻击  

支持数据库端口修改  

页面会显示数据库最新100条数据

安装教程
修改BBQ文件夹里面的BBQ_MYSQL_Backup.php文件，配置你的数据库的连接信息
eg. 注意不要有空格，注意mysql用户的权限

解压mysql.tar文件，并且把数据库文件导入你自己的mysql数据库，注意mysql地址是否允许连接
eg. 数据库支持内网穿透，对了，注意流量消耗。

配置BBQ文件夹里面的BBQ_PEIZHI.php文件。限制输入用户名的长度和输入内容的限制。
demo:http://121.37.19.56/BBQ/BBQ_YF.php

![2](https://user-images.githubusercontent.com/69858092/131965036-276b98a7-b4ef-4885-821b-82131aea86d9.jpg)

