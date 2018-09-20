$(function(){
    //配置分页参数
    $("#page").page({
        debug: true,
        showInfo: true,
        pageSize:5,
        showJump: true,
        showPageSizes: true,
        remote: {
            url: './api/investList.php',
            success: function (data) {
                // console.log(data);
                 // 模板与数据合并
                var htmlstr=$('#dataTempl').tmpl(data.list);
                //将合并后的html放入表格
                $('#tableData').html(htmlstr);
            }
        }
    });
    $("#page").on("pageClicked", function (event, pageIndex) {
        // $("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
    }).on('jumpClicked', function (event, pageIndex) {
        // $("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
    }).on('pageSizeChanged', function (event, pageSize) {
        // $("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
    });
  
    
  })