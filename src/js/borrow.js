$(function(){
  //申请借款提交数据
    $('#btnSubmit').on('click',function(){
        var Data=$('#borrowForm').serialize();
        const Url='./api/addBorrow.php';
        $.post(Url,Data, function(result) {
            if(result.isSuccess){
                alert(result.message);
                location.href="./borrow-list.php";
            } else{
                alert(result.message);
            }
        }, 'json');
    })
   
    //获取借款方式
    let borrowType=location.href.split('=')[1];
    $('#borrowType').val(borrowType);
    // console.log(borrowType);


})