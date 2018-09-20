<!-- 顶部导航 -->
<nav class="navbar navbar-inverse">
     <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-phone-alt"></span>028-86261949</a>
        </div>

        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
              <li id="homePage"><a href="./index.php?muneId=0">首页</a></li>
              <li><a href="#">帮助</a></li>
              <li><a href="#" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<img src='./images/contract.png'/>">联系客服</a></li>
          </ul>
        </div>
     </div>
</nav>
    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 顶部导航栏登录前与登录后的状态切换 -->
    <script>
      $.get('./api/checkState.php',(data)=>{
          if(data.isSuccess){
              let strHtml=`<li><a href="./personal.php">${data.username}</a></li>
              <li><a href="#">赶快充值</a></li>
              <li><a href="./api/loginOut.php">注销</a></li>`;
              $('#homePage').after(strHtml);
          } else{
              let strHtml=`<li><a href="./login.php">登陆</a></li>
              <li><a href="./register.php">注册</a></li>`;
              $('#homePage').after(strHtml);
          }
    },'json')
    </script>
