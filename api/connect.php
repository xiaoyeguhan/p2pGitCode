<?php
    //设置编码头
    header('Content-Type:text/html;chaset=utf-8');
    //连接数据库
    $link=mysqli_connect('localhost','root','root','p2p',3306) or then('连接数据库失败!!');
    // var_dump($link);
?>