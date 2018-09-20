<?php
    //引入连接数据库文件
    require_once('./connect.php');

    //接收数据
    $username=$_POST['username'];
    $password=md5($_POST['password']);

    //构建sql语句
    $sesql="select * from user where username='".$username."'and password='".$password."'";

    //执行sql语句
    $result=mysqli_query($link,$sesql);
    
    //获取结果集
    $rs=mysqli_fetch_assoc($result);

    if($rs !=null){
        session_start();
        $_SESSION['username']=$rs['username'];
        $_SESSION['id']=$rs['id'];
        $arr=["isSuccess"=>true,"message"=>"登录成功!"];
        echo json_encode($arr);
    } else{
        $arr=["isSuccess"=>false,"message"=>"登录失败!"];
        echo json_encode($arr);
    };

    //回收内存资源
    mysqli_free_result($result);
    require_once('./freeClose.php');

?>