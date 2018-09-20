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
    <!-- 引入分页插件样式 -->
    <link rel="stylesheet" href="./lib/JqueryPagination/jquery.pagination.css">
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./dist/js/checkUserState.min.js"></script>
</head>
<body>
    <!-- 头部 -->
    <?php
      require_once('./header.php');
    ?>
   
   <div class="container">
       <h4>投资列表</h4>
        <!-- 按钮组 -->

        <form action="invest_list.html" id="searchForm">
			<div style="margin: 20px 0px;">
					<span class="text-muted">标的状态</span><div style="margin-left: 30px" class="btn-group" data-toggle="buttons">
				  <label class="btn btn-default active">
				    <input type="radio" name="bidRequestState" value="-1" autocomplete="off" checked />&emsp;全部&emsp;
				  </label>
				  <label class="btn btn-default">
				    <input type="radio" name="bidRequestState" value="2" autocomplete="off" />&emsp;招标中&emsp;
				  </label>
				  <label class="btn btn-default">
				    <input type="radio" name="bidRequestState" value="8" autocomplete="off" />&emsp;还款中&emsp;
				  </label>
				</div>
			</div>
		</form>
        <!-- 表格数据 -->
        <table class="table table-striped">
            <!-- 表头 -->
            <thead>
                <tr>
                    <th>借款人</th>
                    <th>标题</th>
                    <th>年利率</th>
                    <th>借款金额(元)</th>
                    <th>还款方式</th>
                    <th>进度</th>
                    <th>操作</th>
                </tr>
            </thead>
            <!--表格内容 -->
            <tbody id="tableData">
                
            </tbody>
            <!-- 表尾 -->
            <tfoot>
                
            </tfoot>

        </table>

        <!-- 分页 -->
        <div id="page" class="m-pagination"></div>

    </div>

   <!-- 页尾 -->
   <?php 
      require_once('./footer.php');
    ?>
    <!-- 引入jquery template模板 -->
    <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
     <!-- 定义模板 -->
     <script type="text/html" id="dataTempl">
        <tr>
            <td>${borrowTitle}</td>
            <td>${borrowTitle}</td>
            <td>${currentRate}</td>
            <td>${borrowAmount}</td>
            <td>${repayment}</td>
            <td>${monthes2Return}</td>
            <td><button type="button" class="btn btn-danger btn-xs">查看</button></td>
        </tr>
    </script>
    <!-- 引入分页库文件 -->
    <script src="./lib/JqueryPagination/jquery.pagination-1.2.7.min.js"></script>
    <script src="./dist/js/invest.min.js"></script>
</body>
</html>