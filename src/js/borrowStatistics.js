
 var myChart = echarts.init(document.getElementById('main')); 
        
 var option = {
    title : {
        text: '借款统计',
        subtext: '2018.09',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient : 'vertical',
        x : 'left',
        data:[]
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {
                show: true, 
                type: ['pie', 'funnel'],
                option: {
                    funnel: {
                        x: '25%',
                        width: '50%',
                        funnelAlign: 'left',
                        max: 1548
                    }
                }
            },
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    series : [
        {
            name:'访问来源',
            type:'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:[]
        }
    ]
};

 // 为echarts对象加载数据 
 myChart.setOption(option); 

 //发送ajax请求获取动态报表数据
 $.get('./api/getBorrowStatistics.php',function(data){
        console.log(data);
        option. legend.data=data.title;
        option.series[0].data=data.borrowdata;
        myChart.hideLoading();
        myChart.setOption(option); //重新渲染数据

 },'json')