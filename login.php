<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录测试</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入 bootstrapValidator样式-->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
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
          <span>用户登录</span>
        </div>
      </div><!-- /.container-fluid -->
    </nav>

    <!-- 用户登录填写表单内容 -->
    <div class="container ">
        <div class="panel panel-default">
            <div class="panel-heading">用户登录</div>
            <div class="panel-body">    
                    <form class="form-horizontal" id="LOGForm">
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
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">登陆</button>
                                <a href="./register.php" class="gologin">新用户 马上注册</a><br/>
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

    <!-- 模态框 -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalTitle">Modal title</h4>
            </div>
            <div class="modal-body" id="myModalContent">
                内容
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button> -->
                <button type="button" class="btn btn-default" id="goPersonal">进入个人中心</button>
            </div>
            </div>
        </div>
    </div>

    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <script src="./dist/js/p2p.min.js"></script>
    <script src="./dist/js/reLogin.min.js"></script>
</body>
</html>