var weekData;
var week;
var monthData;
var month;
var tag;
var health;
var lineColor = 'rgb(66,139,202)';

$(document).ready(function(){
    $("#sport").addClass('active');
    var h1 = $("#data").css('height');
    $("#rightPart").css('height', h1);

    $('#mySwitch').on('switch-change', function (e, data) {
        if (tag=="month") {
            setMonthChart();
        }
        else{
            setWeekChart();
        }
    });
    $(".charts").click(function(event) {
        $(".charts").removeClass("active");
    });
    $('#weekChart').click(function(event) {
        setWeekChart();
        $(this).addClass("active");
    });
    $('#monthChart').click(function(event) {
        setMonthChart();
        $(this).addClass("active");
    });
    $('#sleepChart').click(function(event) {
        setSleepChart();
        $(this).addClass("active");
    });
});


//在sportHead.php中调用
function init(weekDataArray, monthDataArray, weekArray, monthArray){
    weekData = weekDataArray;
    week = weekArray;
    monthData = monthDataArray;
    month = monthArray;
    setWeekChart();
}


function setWeekChart(){
    tag = "week";
    var option;
    option = {
        tooltip: {
            trigger: 'axis',
            formatter: function (params) {
                var res = params[0].value+'km';
                res += '<br/>' + ((params[0].value*1600).toFixed(0))+'steps';
                return res;
            }
        },
        grid: {
                x: 40,  //left
                y: 40,  //top
                x2:50,   //right
                y2:40   //down
            },
        
        xAxis: [
            {
                type: 'category',
                data: week
            }
        ],
        yAxis: [
            {
                type: 'value',
                name: 'km',
                min: 0,
                max: 10,
                interval: 1,
                axisLabel: {
                    formatter: '{value} km'
                }
            },
            {
                type: 'value',
                name: 'steps',
                min: 0,
                max: 16000,
                interval: 1600
            }
        ],
        series: [
            {
                name:'a',
                type:'bar',
                data:weekData,
                itemStyle: {
                    normal: {color:lineColor}
                },
                label: {
                    normal: {
                        show: true,
                        formatter: '{c}'+'km',
                        position: 'top'
                    }
                },
            }
            
        ]
    };
    myChart = echarts.init(document.getElementById('chart'));
    myChart.setOption(option);
    var stat = document.getElementById("stats");
    var s="";
    s = "<ul><hr><li>maximum amount of exercise this week: 9.8 km<li><hr>\
    <li>minimum amount of exercise this week: 0.3 km<hr></li>\
    <li>average amount of exercise this week: 6.3 km<hr></li>\
    </ul>";
    stat.innerHTML = s;
}


function setMonthChart(){
    tag = "month";
    var option;
    option = {
        tooltip: {
            trigger: 'axis',
            formatter: function (params) {
                var res = params[0].name;
                res += '<br/>' +  params[0].value+'km';
                res += '<br/>' + ((params[0].value*1600).toFixed(0))+'steps';
                return res;
            }
        },
        grid: {
                x: 40,  //left
                y: 40,  //top
                x2:50,   //right
                y2:40   //down
            },
        
        xAxis: [
            {
                type: 'category',
                data: month
            }
        ],
        yAxis: [
            {
                type: 'value',
                name: 'km',
                min: 0,
                max: 10,
                interval: 1,
                axisLabel: {
                    formatter: '{value} km'
                }
            },
            {
                type: 'value',
                name: 'steps',
                min: 0,
                max: 16000,
                interval: 1600
            }
        ],
        series: [
            {
                type:'line',
                data:monthData,
                markPoint: {
                    data: [
                        {type: 'max', name: 'maximum'},
                        {type: 'min', name: 'minimum'}
                    ]
                },
                itemStyle: {
                    normal: {color:lineColor}
                },
                markLine: {
                    data: [
                        {
                            type: 'average', 
                            name: 'average'
                        }
                    ]
                }
            }
            
        ]
    };
    myChart = echarts.init(document.getElementById('chart'));
    myChart.setOption(option);
    var stat = document.getElementById("stats");
    var s="";
    s = "<ul><hr><li>maximum amount of sports this month: 9.6 km<li><hr>\
    <li>minimum amount of sports this month: 0.1 km<hr></li>\
    <li>average amount of sports this month: 5.46 km<hr></li>\
    </ul>";
    stat.innerHTML = s;
}


function setSleepChart(){
    tag = "sleep";
    var option;
    option = {
        tooltip: {
            trigger: 'axis',
            formatter: function (params) {
                var res = params[0].name;
                res += '<br/>' +  params[0].value+'\nquality of sleep';
                return res;
            }
        },
        grid: {
                x: 40,  //left
                y: 40,  //top
                x2:50,   //right
                y2:40   //down
            },
        
        xAxis: [
            {
                type: 'category',
                data: month
            }
        ],
        yAxis: [
            {
                type: 'value',
                name: 'index of sleep',
                min: 0,
                max: 100,
                interval: 10,
                axisLabel: {
                    formatter: '{value}'
                }
            }
        ],
        series: [
            {
                type:'line',
                //data:getData(45,90,21),
                data:[70,45,50,50,56,70,75,90,83,77,80,85,65,70,83,85,87,80,90,88,85,56,70,75,90,70,83,85,87],
                markPoint: {
                    data: [
                        {type: 'max', name: 'maximum'},
                        {type: 'min', name: 'minimum'}
                    ]
                },
                itemStyle: {
                    normal: {color:lineColor}
                },
                markLine: {
                    data: [
                        {
                            type: 'average', 
                            name: 'average'
                        }
                    ]
                }
            }
            
        ]
    };
    myChart = echarts.init(document.getElementById('chart'));
    myChart.setOption(option);
    var stat = document.getElementById("stats");
    var s="";
    s = "<ul><hr><li>deep sleeping time last night 1 h<li><hr>\
    <li>total sleep time last night 6.5 h<hr></li>\
    </ul>";
    stat.innerHTML = s;
}


