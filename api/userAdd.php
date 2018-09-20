<?php
    require_once('./connect.php');
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $email=$_POST['email'];
    $phone=$_POST['phone'];
   

    //构建sql语句
    $insertSql="insert into user(username,password,email,phone) values('".$username."','".$password."','".$email."','".$phone."')";

    // //执行sql语句
    $result=mysqli_query($link, $insertSql);
    
    if($result){
        $arr=["isSuccess"=>true,"message"=>"注册成功!"];
        echo json_encode($arr);
    } else{
        $arr=["isSuccess"=>false,"message"=>"注册失败!"];
        echo json_encode($arr);
    };

     //回收内存资源
     require_once('./freeClose.php');
?>