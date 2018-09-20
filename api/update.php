<?php
    require_once('./connect.php');
    session_start();
    $id=$_SESSION['id'];
    //接收数据
    $realname=$_POST['realname'];
    $idcard=$_POST['idcard'];
    // $phone=$_POST['phone'];
    $tel=$_POST['tel'];
    $edu=$_POST['edu'];
    $income=$_POST['income'];
    $address=$_POST['address'];

    //构建sql语句 update 表名 set 字段=新的值， 字段=新的值 [where 条件表达式]
    $upSql="update user set realname='".$realname."', idcard='".$idcard."', tel='".$tel."', edu='".$edu."', income=".$income.", address='".$address."' where id=".$id."";
    
    //执行sql语句
    $result=mysqli_query($link,$upSql);
    if($result){
        $reArr=["isSuccess"=>true,"message"=>"修改成功!"];
        echo json_encode($reArr);
    } else{
        $reArr=["isSuccess"=>false,"message"=>"修改失败!"];
        echo json_encode($reArr);
    }
    
    //回收资源
    mysqli_free_result($result);
    //关闭数据库
    require_once('./freeClose.php');
?>