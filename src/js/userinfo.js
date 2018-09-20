$(function () {
    $('#myForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            realname: {
                validators: {
                    notEmpty: {
                        message: '姓名不能为空'
                    }
                }
            },
            idcard:{
                validators: {
                    notEmpty: {
                        message: '身份证号不能为空'
                    },
                    stringLength: {
                        min: 18,
                        max: 18,
                        message: '身份证号长度必须18位'
                    }
                }
            },
            phone:{
                validators: { 
                    notEmpty: {
                        message: '手机号码不能为空'
                    },
                    regexp: {//正则验证
                        regexp:/^1\d{10}$/,
                        message: '请输入正确的手机号码'
                    }
                }   
            },
            tel:{
                validators: { 
                    notEmpty: {
                        message: '联系电话不能为空'
                    },
                    regexp: {//正则验证
                        regexp:/^(0[0-9]{2,3}\-)([2-9][0-9]{6,7})+(\-[0-9]{1,4})?$/,
                        message: '请输入正确的联系电话'
                    }
                }   
            },
            income:{
                validators: { 
                    notEmpty: {
                        message: '收入不能为空'
                    },
                    regexp: {//正则验证
                        regexp:/^\d+$/,
                        message: '请输入数字类型的值'
                    }
                }   
            },
            address:{
                validators: { 
                    notEmpty: {
                        message: '地址不能为空'
                    }
                }   
            },
           
        }
    })
    //验证成功后的回调
    .on('success.form.bv', function(e) {
        //使用ajax提交表单数据,阻止表单提交的默认行为
        e.preventDefault();

        //获取验证的表单实例
        var $myForm = $(e.target);

        //获取表单验证实例
        var bv = $myForm.data('bootstrapValidator');

        // 使用ajax请求提交表单数据
        const Url='./api/update.php';
        var Data=$myForm.serialize();
        //三个参数:提交的url地址,对象形式或字符串拼接的数据,回调函数
        $.post(Url,Data, function(data) {
            console.log(data);
            if(data.isSuccess){
                alert(data.message);
                location.href="./personal.php?muneId=3";
            } else{
                alert(data.message);
            }
        }, 'json');
    });  

});