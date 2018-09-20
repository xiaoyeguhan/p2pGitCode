<?php
     //连接数据库
     require_once('./connect.php');

     //构建sql语句
     $sql="select * from borrowinfo";
 
     //执行sql语句
     $result=mysqli_query($link,$sql);

     //准备数据
     $title=["信用贷","车易贷","房易贷"];
     $data=[
         ["value"=>0,"name"=>"信用贷"],
         ["value"=>0,"name"=>"车易贷"],
         ["value"=>0,"name"=>"房易贷"],
     ];
 
     //遍历结果集
     while($rs=mysqli_fetch_assoc($result)){
         if($rs['borrowType']=='t1'){
             $data[0]['value']+=$rs['borrowAmount'];
         } else if($rs['borrowType']=='t2'){
            $data[1]['value']+=$rs['borrowAmount'];
         } else if($rs['borrowType']=='t3'){
            $data[2]['value']+=$rs['borrowAmount'];
         }
     };
    
    $dataArr=["title"=> $title,"borrowdata"=>$data];
    echo json_encode($dataArr);
 
     //关闭连接
     require_once('./freeClose.php');
?>