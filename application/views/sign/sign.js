$.fx.speeds._default = 100;
var sportOption;
var compOption;
var messageOption;

function init(){
    charts();
    setCharts();
}


function charts(){
    sportChart();
    compChart();
    messageChart();
}

function setCharts(){
    setSportChart();
    setCompChart();
    setMessageChart();
}


function sportChart(){
    sportOption = {
        grid: {
            x: 0,
            y: 30,
            x2:0,
            y2:5
        },
        
        xAxis: [
            {
                type: 'category',
                data: ['周一','周二','周三','周四','周五','周六','周日']
            }
        ],
        yAxis: [
            {
                type: 'value',
                min: 0,
                max: 700,
                interval: 100,
                // axisLabel: {
                //     formatter: '{value} ml'
                // }
            }
        ],
        series: [
        {
            type:'bar',
            data:[251,174,579,30,335,218,119],
            itemStyle: {
                normal: {
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = [
                          '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                           '#FE8463','#9BCA63'
                        ];
                        return colorList[params.dataIndex]
                    }
                }
            }
        },
        {
            type:'line',
            data:[251,174,579,30,335,218,119]
        }
        ]
    };
}


function compChart(){
    compOption = {
        grid: {
            x: 0,
            y: 30,
            x2:0,
            y2:5        
        },
        
        xAxis: [
            {
                type: 'category',
                data: ['周一','周二','周三','周四','周五','周六','周日']
            }
        ],
        yAxis: [
            {
                type: 'value',
                min: 0,
                max: 700,
                interval: 100,
                // axisLabel: {
                //     formatter: '{value} ml'
                // }
            }
        ],
        series: [
            {
                name:'b',
                type:'line',
                data:[8,16,32,64,128,256,512]
            }
        ]
    };
}

function messageChart(){
    messageOption = {

        visualMap: {
            show: false,
            min: 80,
            max: 600,
            inRange: {
                colorLightness: [0, 1]
            }
        },

        series : [
            {
                type:'pie',
                radius : '90%',
                center: ['50%', '50%'],
                data:[305,260,254,235,400]
                    .sort(function (a, b) { return a.value - b.value}),
                roseType: 'angle',
                labelLine: {
                    normal: {
                        show:false
                    }
                },
                itemStyle: {
                    normal: {
                        color: function(params) {
                            // build a color map as your need.
                            var colorList = [
                              '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B'
                            ];
                            return colorList[params.dataIndex]
                        }
                    }
                },

                animationType: 'scale',
                animationEasing: 'elasticOut',
                animationDelay: function (idx) {
                    return Math.random() * 200;
                }
            }
        ]
    };
}


function setSportChart(){  
    myChart = echarts.init(document.getElementById('sportChart'));
    myChart.setOption(sportOption);
}

function setCompChart(){  
    myChart = echarts.init(document.getElementById('compChart'));
    myChart.setOption(compOption);
}

function setMessageChart(){  
    myChart = echarts.init(document.getElementById('messageChart'));
    myChart.setOption(messageOption);
}
