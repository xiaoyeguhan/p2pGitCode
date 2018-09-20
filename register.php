<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
    <!-- 引入bootstrap样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入 bootstrapValidator样式-->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入自定义样式 -->
    <link rel="stylesheet" href="./dist/css/regLogin.min.css">
</head>
<body>
     <!-- 顶部导航 -->
    <?php 
            require_once('./topNav.php');
    ?>

    <!-- 主导航 -->
    <nav class="navbar  navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><img src="./images/logo.png" alt="网站logo"></a>
          <span>用户注册</span>
        </div>
      </div><!-- /.container-fluid -->
    </nav>
    <!-- 注册表单内容 -->
    <div class="container ">
        <div class="panel panel-default">
            <div class="panel-heading">用户注册</div>
            <div class="panel-body">    
                    <form class="form-horizontal" id="reForm">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">用&nbsp;&nbsp;户&nbsp;名</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" placeholder="用户名">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">密&emsp;&emsp;码</label>
                            <div class="col-sm-9">
                            <input type="password" class="form-control"  name="password"  placeholder="密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">确认密码</label>
                            <div class="col-sm-9">
                            <input type="password" class="form-control"  name="checkPassword"  placeholder="确认密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">邮&emsp;&emsp;箱</label>
                            <div class="col-sm-9">
                             <input type="text" class="form-control"  name="email"  placeholder="电子邮箱">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">电&emsp;&emsp;话</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control"  name="phone"   placeholder="电话">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">同意协议并注册</button>
                                <a href="./login.php" class="gologin">已有账号,马上登陆</a><br/>
                                <a href="">《使用协议说明书》</a>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>

    <!-- 引入页尾 -->
    <?php 
        require_once('./footer.php');
    ?>

    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <script src="./dist/js/p2p.min.js"></script>
    <script src="./dist/js/reLogin.min.js"></script>
</body>
</html>