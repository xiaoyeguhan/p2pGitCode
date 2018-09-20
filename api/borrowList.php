<?php

    //连接数据库
    require_once('./connect.php');

    //构建sql语句
    session_start();
    $id=$_SESSION['id'];
    $sql="select * from borrowinfo where userid=".$id;

    //执行sql语句
    $result=mysqli_query($link,$sql);
    //定义数组
    $resultData=[];
    //遍历结果集
    while($rs=mysqli_fetch_assoc($result)){
        array_push( $resultData,$rs);
    };
    echo json_encode($resultData);

    //关闭连接
    require_once('./freeClose.php');
    
?>