<?php
    require_once('./connect.php');

    session_start();
    $id=$_SESSION['id'];

    //接收参数
    $borrowType=$_POST['borrowType'];
    $borrowAmount=$_POST['borrowAmount'];
    $currentRate=$_POST['currentRate'];
    $monthes2Return=$_POST['monthes2Return'];
    $repayment=$_POST['repayment'];
    $minAmount=$_POST['minAmount'];
    $maxAmount=$_POST['maxAmount'];
    $rewardAmount=$_POST['rewardAmount'];
    $disableDays=$_POST['disableDays'];
    $borrowTitle=$_POST['borrowTitle'];
    $description=$_POST['description'];


    //构建sql语句
    $inSql="insert into borrowinfo (borrowType,borrowAmount,currentRate,monthes2Return,repayment,minAmount,maxAmount,rewardAmount,disableDays,borrowTitle,description,userid) values('".$borrowType."',".$borrowAmount.",".$currentRate.",".$monthes2Return.",'".$repayment."',".$minAmount.",".$maxAmount.",".$rewardAmount.",".$disableDays.",'".$borrowTitle."','".$description."',".$id.")";
    
    //执行sql语句
    $result=mysqli_query($link, $inSql);

    if($result){
        $resultArr=["isSuccess"=>true,"message"=>"提交数据成功!"];
        echo json_encode($resultArr);
    } else{
        $resultArr=["isSuccess"=>false,"message"=>"提交数据失败!"];
        echo json_encode($resultArr);
    }

    //关闭连接
    require_once('./freeClose.php');

    
?>