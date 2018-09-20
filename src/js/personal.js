$(function(){
    //tagOnOff按钮的点击事件
$('#tagOnOff').on('click',function(){
    $('#parent').toggleClass('active');
    if($('#parent').hasClass('active')){
        $(this).text('显示');
    } else{
        $(this).text('隐藏');
    }
});


/* 触摸事件 */
//定义开始触摸x
var x1;
$(window).on('touchstart',function(e){
    x1=e.originalEvent.changedTouches[0].clientX;
})

$(window).on('touchend',function(e){
    var x2=e.originalEvent.changedTouches[0].clientX;
    var dx=x2-x1;
    if(Math.abs(dx)>=100){
        // $("#tagOnOff").trigger('click');
        if(dx<0){
            $('#parent').addClass('active');
        } else{
            $('#parent').removeClass('active');
        }
    } 
    //改变按钮的文字内容
    if($('#parent').hasClass('active')){
        $('#tagOnOff').text('显示');
    } else{
        $('#tagOnOff').text('隐藏');
    }
});



//回填昵名和用户名
$.get('./api/getname.php',function(data){
        // console.log(data);
        $('#realneme').text(data[0].realname);
        $('#username').text(data[0].username);
},'json');

})
