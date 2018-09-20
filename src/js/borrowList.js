$(function(){
    //获取我的借款列表
    $.get('./api/borrowList.php',function(data){
        // console.log(data);
        // 模板与数据合并
        var htmlstr=$('#dataTempl').tmpl(data);
        //将合并后的html放入表格
        $('#tableData').html(htmlstr);
    },'json');

})