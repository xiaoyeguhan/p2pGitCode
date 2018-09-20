$(function () {
    //-------------------注册表单验证------------------------
    $('#reForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                message: '用户名验证失败',
                validators: {
                    notEmpty: {
                        message: '用户名不能为空'
                    },
                    stringLength: {
                        min: 6,
                        max: 12,
                        message: '用户名长度必须在6到12位之间'
                    }
                }
            },
            password:{
                message: '密码验证失败',
                validators: {
                    notEmpty: {
                        message: '密码不能为空'
                    },
                    stringLength: {
                        min: 6,
                        max: 18,
                        message: '密码长度必须在6到18位之间'
                    }
                }
            },
            checkPassword:{
                message: '密码验证失败',
                validators: {
                    notEmpty: {
                        message: '密码不能为空'
                    },
                    identical: {//与指定控件内容比较是否相同，比如两次密码不一致
                        field: 'password',//指定控件name
                        message: '两次密码输入不一致'
                    }
                }
            },
            email:{
                message: '邮箱验证失败',
                validators: {
                    emailAddress: {//验证email地址
                    message: '请输入正确的email地址'
                },
                    notEmpty: {
                        message: '邮箱不能为空'
                    }
                }   
            },
            phone:{
                message: '电话验证失败',
                validators: { 
                    notEmpty: {
                        message: '电话不能为空'
                    },
                    regexp: {//正则验证
                        regexp:/^1\d{10}$/,
                        message: '请输入正确的电话号码'
                    },
                }   
            }
           
        }
    })
    //验证成功后的回调
    .on('success.form.bv', function(e) {
        //使用ajax提交表单数据,阻止表单提交的默认行为
        e.preventDefault();

        //获取验证的表单实例
        var $form = $(e.target);

        //获取表单验证实例
        var bv = $form.data('bootstrapValidator');

        // 使用ajax请求提交表单数据
        var postUrl='./api/userAdd.php';
        var postData=$form.serialize();
        //三个参数:提交的url地址,对象形式或字符串拼接的数据,回调函数
        $.post(postUrl, postData, function(result) {
            //根据ajax返回的结果处理逻辑
            if(result.isSuccess){
                alert(result.message);
                location.href='./login.php';
            } else{
                alert(result.message);
            }
        }, 'json');
    });  
    
    
    //--------------------登录表单验证-----------------------
    $('#LOGForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: '用户名不能为空'
                    },
                    stringLength: {
                        min: 6,
                        max: 12,
                        message: '用户名长度必须在6到12位之间'
                    }
                }
            },
            password:{
                validators: {
                    notEmpty: {
                        message: '密码不能为空'
                    },
                    stringLength: {
                        min: 6,
                        max: 18,
                        message: '密码长度必须在6到18位之间'
                    }
                }
            }
           
        }
    })
    //验证成功后的回调
    .on('success.form.bv', function(e) {
        //使用ajax提交表单数据,阻止表单提交的默认行为
        e.preventDefault();

        //获取验证的表单实例
        var $logform = $(e.target);

        //获取表单验证实例
        var bv = $logform.data('bootstrapValidator');

        // 使用ajax请求提交表单数据
        const Url='./api/logincheck.php';
        var Data=$logform.serialize();
        //三个参数:提交的url地址,对象形式或字符串拼接的数据,回调函数
        $.post(Url,Data, function(result) {
            console.log(result);
            //根据ajax返回的结果处理逻辑
            if(result.isSuccess){
                //改变模态框标题
                $('#myModalTitle').text(result.message);
                //改变模态框内容
                $('#myModalContent').html(`<i class="glyphicon glyphicon-ok"></i> ${result.message} 等待<span id="num">5</span>秒后跳转页面`);
                let num=5;
                let timesID=setInterval(()=>{
                    num--;
                    $('#num').text(num);
                    if(num==0){
                        clearInterval(timesID);
                        location.href='./personal.php?muneId=3';//跳转页面
                    }
                },1000);
            } else{
                 //改变模态框标题
                 $('#myModalTitle').text(result.message);
                 //改变模态框内容
                 $('#myModalContent').html(`<i class="glyphicon glyphicon-remove"></i>${result.message}`);
            }
             //显示模态框
             $('#myModal').modal('show');
        }, 'json');
    });  



    //跳转页面
    $('#goPersonal').on('click',function(){
        location.href="./personal.php?muneId=3";
    })
});
