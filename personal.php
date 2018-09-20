<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人中心</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/personal.min.css">
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./dist/js/checkUserState.min.js"></script>
</head>
<body>
    <!-- 头部 -->
    <?php
      require_once('./header.php');
    ?>
    <!-- 内容 -->
    <div class="container" id="parent">
        <div class="row">
            <!-- 左边 -->
            <div class="col-sm-3 col-xs-6" id="leftMune">
            
                <!-- 引入侧边栏 -->
                <?php
                    require_once('./sidebar.php');
                ?>
            </div>
            <!-- 右侧内容 -->
            <div class="col-sm-9 col-xs-12" id="rightContent">
                <button type="button" class="btn btn-primary btn-xs" id="tagOnOff">隐藏</button>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-2 col-xs-12 img"><img class="img-thumbnail" src="./images/head_icon.jpg" alt=""></div>
                            <div class="col-sm-10 col-xs-12 textContent">
                                <p>昵 称：<span id="realneme"></span></p>
                                <p>用户名：<span id="username"></span></p>
                                <p>最后登录时间：2016-10-25 15:30:10</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <!-- 个人金额 -->
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <h4>总金额：<span>10000元</span></h4>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <h4>可用金额：<span>8000元</span></h4>   
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <h4>冻结金额：<span>2000元</span></h4>
                            </div>
                           
                        </div>
                        <!-- 充值 提取 -->
                         <div class="recharge">
                            <button type="button" class="btn btn-primary btn-lg">账户充值</button>
                            <button type="button" class="btn btn-danger btn-lg">账户提现</button>
                        </div>

                        <!-- 认证 -->
                        <div class="row attestation">
                            <!-- 实名认证 -->
                            <div class="col-xs-12 col-sm-4">
                                 <div class="row att-content">
                                     <div class="col-xs-4"><img class="img-responsive" src="./images/shiming.png" alt=""></div>
                                     <div class="col-xs-8 text">
                                         <h5>实名认证</h5>
                                         <p>未认证 <a href="">马上认证</a></p>
                                     </div>
                                 </div>
                                <p>实名认证之后才能在平台投资</p>
                            </div>
                             <!-- 手机认证 -->
                             <div class="col-xs-12 col-sm-4">
                                 <div class="row att-content">
                                     <div class="col-xs-4"><img class="img-responsive" src="./images/shouji.jpg" alt=""></div>
                                     <div class="col-xs-8 text">
                                         <h5>手机认证</h5>
                                         <p>未认证 <a href="">马上认证</a></p>
                                     </div>
                                 </div>
                                <p>实名认证之后才能在平台投资</p>
                            </div>
                            <!-- 邮箱认证 -->
                            <div class="col-xs-12 col-sm-4">
                                 <div class="row att-content">
                                     <div class="col-xs-4"><img class="img-responsive" src="./images/youxiang.jpg" alt=""></div>
                                     <div class="col-xs-8 text">
                                         <h5>邮箱认证</h5>
                                         <p>未认证 <a href="">马上认证</a></p>
                                     </div>
                                 </div>
                                <p>实名认证之后才能在平台投资</p>
                            </div>
                            <!-- VIP会员 -->
                            <div class="col-xs-12 col-sm-4">
                                 <div class="row att-content">
                                     <div class="col-xs-4"><img class="img-responsive" src="./images/baozhan.jpg" alt=""></div>
                                     <div class="col-xs-8 text">
                                         <h5>VIP会员</h5>
                                         <p>未认证 <a href="">马上认证</a></p>
                                     </div>
                                 </div>
                                <p>实名认证之后才能在平台投资</p>
                            </div>
                        </div>   
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
    

    <!-- 切换显示或隐藏菜单 -->
    <script src="./dist/js/personal.min.js"></script>
</body>
</html>