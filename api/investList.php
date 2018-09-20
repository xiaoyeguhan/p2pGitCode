<?php
    //连接数据库
    require_once('./connect.php');

    //接收数据
    $pageIndex=$_GET['pageIndex'];
    $pageSize=$_GET['pageSize'];

    //构建sql语句
    $sql="select * from borrowinfo";

    //执行sql语句
    $result=mysqli_query($link,$sql);

    $total=mysqli_num_rows($result);

    //构建分页sql语句
    $skipNum=$pageIndex*$pageSize;
    $sql.=" limit ".$skipNum.",".$pageSize;

    //执行分页sql语句
    $result=mysqli_query($link,$sql);
    // echo $sql;
    //定义数组
    $resultData=[];
    // //遍历结果集
    while($rs=mysqli_fetch_assoc($result)){
        array_push($resultData,$rs);
    };

    //准备json数据
    $resultArr=["total"=> $total,"list"=> $resultData];

    //返回数据给前端
    echo json_encode( $resultArr);
    
    //关闭连接
    require_once('./freeClose.php');
?>