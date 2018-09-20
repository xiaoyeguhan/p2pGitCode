   
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
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
          <ul class="nav navbar-nav" id="mainMune">
            <li  class="active"><a href="./index.php?muneId=0">首页</a></li>
            <li><a href="./invest.php?muneId=1">我要投资</a></li> 
            <li><a href="./borrow.php?muneId=2">我要借款</a></li> 
            <li><a href="./personal.php?muneId=3">个人中心</a></li> 
            <li><a href="#">新手指引</a></li> 
            <li><a href="#">关于我们</a></li>
          </ul>
      </div><!-- /.container-fluid -->
    </nav>
    <script src="./lib/jquery/jquery.min.js"></script>

    <!-- 导航栏状态切换 -->
    <script>
      let urlId=location.href.split('=')[1];
      $('#mainMune li').eq(urlId).addClass('active').siblings('li').removeClass('active');
    </script>