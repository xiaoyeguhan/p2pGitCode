<?php
     header('Content-Type:text/html;chaset=utf-8');

     session_start();
     session_destroy();

     echo '<script>alert("退出成功!!");location.href="../login.php";</script>';
?>