<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>借款申请信息1111</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
      <!-- 引入 bootstrapValidator样式-->
    <link rel="stylesheet" href="./dist/css/borrow-apply.min.css">
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./dist/js/checkUserState.min.js"></script>
</head>
<body>
    <!-- 头部 -->
    <?php
      require_once('./header.php');
    ?>
   <!-- 内容 -->
   <div class="container">
        <div class="row">
            <!-- 左边 -->
            <div class="col-md-3 col-sm-12">
            
                <!-- 引入侧边栏 -->
                <?php
                    require_once('./sidebar.php');
                ?>
            </div>
            <!-- 右侧内容 -->
            <div class="col-md-9 col-sm-12 personage">
                <div class="panel panel-default">
                    <div class="panel-heading">借款统计</div>
                    <div class="panel-body">
                        <!-- 报表 -->
                        <div id="main" style="width:100%;height:400px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- 页尾 -->
   <?php 
      require_once('./footer.php');
    ?>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/p2p.min.js"></script>
     <!-- 引入echarts库文件 -->
     <script src="./lib/echarts/echarts-all.js"></script>
     <!-- 报表js -->
    <script src="./dist/js/borrowStatistics.min.js"></script>
</body>
</html>