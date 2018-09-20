<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>借款申请信息</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
      <!-- 引入 bootstrapValidator样式-->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="./dist/css/borrow-apply.min.css">
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./dist/js/checkUserState.min.js"></script>
</head>
<body>
    <!-- 头部 -->
    <?php
      require_once('./header.php');
    ?>
   
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
                    <div class="panel-heading">借款信息 信用标</div>
                    <div class="panel-body">
                        <!-- 表单 -->
                        <form id="borrowForm" class="form-horizontal el-borrow-form">
									<div class="form-group">
										<label class="control-label">
											借款类型
										</label>
										<select class="form-control" name="borrowType" id="borrowType">
											<option value="t1">信用贷</option>
											<option value="t2">车易贷</option>
											<option value="t3">房易贷</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">
											借款金额
										</label>
										<div class="input-group">
											<input class="form-control" name="borrowAmount" />
											<span class="input-group-addon">元</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											借款利息
										</label>
										<div class="input-group">
											<input class="form-control" name="currentRate" />
											<span class="input-group-addon">%</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											借款期限
										</label>
										<div class="input-group">
											<select class="form-control" name="monthes2Return">
												<option value="1">1</option>
												<option value="3">3</option>
												<option value="6">6</option>
												<option value="9">9</option>
												<option value="12">12</option>
												<option value="24">24</option>
											</select>
											<span class="input-group-addon">月</span>
										</div>
									</div>
					
									<div class="form-group">
										<label class="control-label">
											还款方式
										</label>
										<label class="radio-inline">
											<input type="radio" value="0" checked="checked" name="repayment" />
											按月分期
										</label>
										<label class="radio-inline">
											<input type="radio" value="1" name="repayment" />
											按月到期
										</label>
									</div>
					
									<div class="form-group">
										<label class="control-label">
											最小投标
										</label>
										<div class="input-group">
											<input class="form-control" name="minAmount" />
											<span class="input-group-addon">元</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											最大投标
										</label>
										<div class="input-group">
											<input class="form-control" name="maxAmount" />
											<span class="input-group-addon">元</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											投标奖金
										</label>
										<div class="input-group">
											<input class="form-control" name="rewardAmount" value="0" />
											<span class="input-group-addon">%</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label">
											招标天数
										</label>
										<div class="input-group">
											<select class="form-control" name="disableDays">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
											</select>
											<span class="input-group-addon">天</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											借款标题
										</label>
										<input name="borrowTitle" class="form-control" />
									</div>
									<div class="form-group">
										<label>
											借款描述
										</label>
										<textarea name="description" rows="4" class="form-control col-sm-6" style="resize: none;"></textarea>
									</div>
									<div class="form-group">
										<button class="btn btn-primary" id="btnSubmit" type="button" data-loading-text="提交">
											提交申请
										</button>
									</div>
								</form>

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
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
    <script src="./dist/js/borrow.min.js"></script>
</body>
</html>