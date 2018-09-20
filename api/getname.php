<?php
    //连接数据库
    require_once('./connect.php');
    //构建sql语句
    session_start();
    $id=$_SESSION['id'];
    $sql="select username,realname from user where id=".$id;
    
    //执行sql语句
    $result=mysqli_query($link,$sql);

    //得到结果集
    $rs=mysqli_fetch_assoc($result);
    $resultData=[];
    //返回结果
    if($rs != null){
        array_push($resultData,$rs);
        echo json_encode($resultData);
    };

    //关闭连接
    require_once('./freeClose.php');
?>