<?php
    session_start();
    if(isset($_SESSION['username'])){
        $resultArr=["isSuccess"=>true,"message"=>"登录成功!","username"=>$_SESSION['username']];
        echo json_encode($resultArr);
    } else{
        $resultArr=["isSuccess"=>false,"message"=>"未登陆!"];
        echo json_encode($resultArr);
    }
?>