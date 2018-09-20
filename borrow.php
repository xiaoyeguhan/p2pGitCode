<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我要借款</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/borrow.min.css">
</head>
<body>
    <!-- 头部 -->
    <?php
      require_once('./header.php');
    ?>
    <!-- 内容 -->
    <div class="container">
        <div class="row">
            <!-- 信用贷 -->
            <div class="col-md-4 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">信用贷</div>
                    <div class="panel-body">
                        <p class="bigText">可借金额 ¥ 2,000.00</p>
                        <p><a href="#">申请条件</a></p>
                        <p class="diText">仅成都地区</p>
                        <ul>
                            <li>填写基本资料</li>
                            <li>身份认证</li>
                            <li>视频认证</li>
                        </ul>
                        <p class="centerText"><a href="./borrow-apply.php?type=t1">立即申请</a></p>
                    </div>
                </div>
            </div>

            <!-- 车易贷 -->
            <div class="col-md-4 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading bgec7e20">车易贷</div>
                    <div class="panel-body">
                    <p class="bigText">可借金额 ¥ 2,000.00</p>
                        <p><a href="#">申请条件</a></p>
                        <p class="diText">仅成都地区</p>
                        <ul>
                            <li>填写基本资料</li>
                            <li>身份认证</li>
                            <li>视频认证</li>
                        </ul>
                        <p class="centerText"><a href="./borrow-apply.php?type=t2">立即申请</a></p>
                    </div>
                </div>
            </div>

            <!-- 房易贷 -->
            <div class="col-md-4 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading bg2ca2ee">房易贷</div>
                    <div class="panel-body">
                    <p class="bigText">可借金额 ¥ 2,000.00</p>
                        <p><a href="#">申请条件</a></p>
                        <p class="diText">仅成都地区</p>
                        <ul>
                            <li>填写基本资料</li>
                            <li>身份认证</li>
                            <li>视频认证</li>
                        </ul>
                        <p class="centerText"><a href="./borrow-apply.php?type=t3">立即申请</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- 页尾 -->
   <?php 
      require_once('./footer.php');
    ?>

    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
</body>
</html>