<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>借款申请信息</title>
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
                    <div class="panel-heading">借款项目</div>
                    <div class="panel-body">
                        <!-- 表格数据 -->
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>标题</th>
                                <th>时间</th>
                                <th>借款金额(元)</th>
                                <th>期限(月)</th>
                                <th>利率(%)</th>
                                <th>状态</th>
                            </tr>
                            </thead>
                            <tbody id="tableData">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- 页尾 -->
   <?php 
      require_once('./footer.php');
    ?>
    <!-- 引入jquery template模板 -->
    <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/p2p.min.js"></script>
     <!-- 定义模板 -->
     <script type="text/html" id="dataTempl">
        <tr>
            <td>${borrowTitle}</td>
            <td>${submitDatetime}</td>
            <td>${borrowAmount}</td>
            <td>${monthes2Return}</td>
            <td>${currentRate}</td>
            <td>待发布</td>
        </tr>
    </script>
    <script src="./dist/js/borrowList.min.js"></script>
</body>
</html>