<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人资料</title>
    <!-- 引入 bootstrap框架样式-->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入 bootstrapValidator样式-->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入自定义样式 -->
    <link rel="stylesheet" href="./dist/css/userinfo.min.css">
    <!-- 引入jquery库文件 -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入请求状态文件 -->
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
                    <div class="panel-heading">个人资料</div>
                    <div class="panel-body">
                        <!-- 表单 -->
                        <form class="form-horizontal" id="myForm">
                            <!-- 用户名 -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">用户名</label>
                                <div class="col-sm-10" id="username">
                                    
                                </div>
                            </div>
                            <!-- 真实姓名 -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">真实姓名</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="realname" placeholder="请输入真实姓名">    
                                </div>
                            </div>
                            <!-- 证件号码 -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">证件号码</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="idcard" placeholder="请输入证件号码">
                                </div>
                            </div>
                            <!-- 手机号码 -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">手机号码</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone"  placeholder="请输入手机号码">
                                </div>
                            </div>
                            <!-- 联系电话 -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">联系电话</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="tel" placeholder="请输入联系电话">
                                </div>
                            </div>
                            <!-- 个人学历 -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">个人学历</label>
                                <div class="col-sm-10">
                                  <select name="edu" id="">
                                      <option value="初中" selected>初中</option>
                                      <option value="中专/高中">中专/高中</option>
                                      <option value="专科">专科</option>
                                      <option value="本科">本科</option>
                                      <option value="硕士研究生">硕士研究生</option>
                                      <option value="博士研究生">博士研究生</option>
                                  </select>
                                </div>
                            </div>
                            <!-- 个人收入 -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">个人收入</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="income" placeholder="请输入个人收入">
                                </div>
                            </div>
                            <!-- 联系地址 -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">联系地址</label>
                                <div class="col-sm-10">
                                    <textarea name="address" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <!-- 保存数据 -->
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存数据</button>
                                </div>
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
    <!-- 引入 bootstrap框架样式-->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入 bootstrapValidator插件库 -->
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <script src="./dist/js/p2p.min.js"></script>
    <!-- 表单验证及回填数据 -->
    <script src="./dist/js/userinfo.min.js"></script>
    <!-- 回填 用户名-->
    <script>
    $.get('./api/personageText.php',function(data){
        $('#username').text(data);
    })
    </script>
</body>
</html>