var ctx = document.getElementById("daily_Attendance");
var data = {
    labels: ["2015-01", "2015-02", "2015-03", "2015-04", "2015-05", "2015-06", "2015-07", "2015-08", "2015-09", "2015-10", "2015-11", "2015-12"],
    datasets: [{
        data: [87, 86, 87.2, 89, 88, 87, 88, 87, 86, 85, 91, 90],
        backgroundColor: "rgb(255,0,125)"
    }]
  }
var myChart = new Chart(ctx, {
  type: 'bar',
  data: data,
  options: {
    hover: {
        animationDuration: 0
      },
    animation: {
        duration: 1,
        onComplete: function() {
            var chartInstance = this.chart,
            ctx = chartInstance.ctx;

            ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
            ctx.textAlign = 'center';
            ctx.textBaseline = 'bottom';

            this.data.datasets.forEach(function(dataset, i) {
            var meta = chartInstance.controller.getDatasetMeta(i);                     
                meta.data.forEach(function(bar, index) {
                    var data = dataset.data[index];
                    ctx.fillText(data + "%", bar._model.x, bar._model.y - 5);                                                          
                });
            });
        }
    },    
    responsive: true,
    scales: {
        yAxes: [{
            ticks: {            
                   min: 0,
                    max: 100,
                   callback: function(value){return value+ "%"}
                },  
				   scaleLabel: {
                   display: true,
                   labelString: "Percentage"
                }
            }]           
    },    
    tooltips: {
        "enabled": false
    },
    legend: {
        display: false,        
     },
     title: {
        display: true,
        text: 'Daily Attendance Showrate Trend',
        position: 'left',
        fontSize: 18
    }
  }
});
//
var ctx = document.getElementById("day_Of_Week");
var data = {
    labels: ["2015-01", "2015-02", "2015-03", "2015-04", "2015-05", "2015-06", "2015-07"],
    datasets: [{
        data: [10.63, 10.09, 10.41, 9.92, 10.88, 11.79, 11.49],
        backgroundColor: "rgb(255,0,125)"
    }]
  }
var myChart = new Chart(ctx, {
  type: 'bar',
  data: data,
  options: {
    hover: {
        animationDuration: 0
      },
    animation: {
        duration: 1,
        onComplete: function() {
            var chartInstance = this.chart,
            ctx = chartInstance.ctx;

            ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
            ctx.textAlign = 'center';
            ctx.textBaseline = 'bottom';

            this.data.datasets.forEach(function(dataset, i) {
            var meta = chartInstance.controller.getDatasetMeta(i);
            meta.data.forEach(function(bar, index) {
                var data = dataset.data[index];
                ctx.fillText(data + "%", bar._model.x, bar._model.y - 5);
            });
            });
        }
    },    
    responsive: true,
    scales: {
        yAxes: [{
            ticks: {                               
                   callback: function(value){return value+ "%"}
                },  
				   scaleLabel: {
                   display: true,
                   labelString: "Percentage"
                },
                gridLines: {
                    display:true
                }
            }],
            xAxes: [{                
                    gridLines: {
                        display:false
                    }
                }]
    },
    
    tooltips: {
        "enabled": false
    },
    legend: {
        display: false,        
     },
     title: {
        display: true,
        text: 'DAY OF WEEK TREND - ABS %',
        position: 'top',
        fontSize: 18
    }
  }
});
//
var ctx = document.getElementById("week_Of_Week");
var data = {
    labels: ["2015-01", "2015-02", "2015-03", "2015-04", "2015-05"],
    datasets: [{
        data: [12.93, 12.26, 10.02, 9.05, 10.85],
        backgroundColor: "rgb(255,0,125)"
    }]
  }
var myChart = new Chart(ctx, {
  type: 'bar',
  data: data,
  options: {
    hover: {
        animationDuration: 0
      },
    animation: {
        duration: 1,
        onComplete: function() {
            var chartInstance = this.chart,
            ctx = chartInstance.ctx;

            ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
            ctx.textAlign = 'center';
            ctx.textBaseline = 'bottom';

            this.data.datasets.forEach(function(dataset, i) {
            var meta = chartInstance.controller.getDatasetMeta(i);
            meta.data.forEach(function(bar, index) {
                var data = dataset.data[index];
                ctx.fillText(data + "%", bar._model.x, bar._model.y - 5);
            });
            });
        }
    },    
    responsive: true,
    scales: {
        yAxes: [{
            ticks: {            
                   
                   callback: function(value){return value+ "%"}
                },  
				   scaleLabel: {
                   display: true,
                   labelString: "Percentage"
                }
            }],
            xAxes: [{                
                gridLines: {
                    display:false
                }
            }]
    },
    
    tooltips: {
        "enabled": false
    },
    legend: {
        display: false,        
     },
     title: {
        display: true,
        text: 'WEEK OVER WEEK ABS %',
        position: 'top',
        fontSize: 18
    }
  }
});

