
// window.onload = function () {

// var chart = new CanvasJS.Chart("chartContainer", {
// 	theme:"light2",
// 	animationEnabled: true,
	
// 	axisY :{
// 		includeZero: false,
		
// 	},
// 	toolTip: {
// 		shared: "true"
// 	},
// 	legend:{
// 		cursor:"pointer",
// 		itemclick : toggleDataSeries
// 	},
// 	data: [{
// 		type: "spline",
// 		visible: true,
// 		showInLegend: true,
// 		name: "Forecast",
// 		dataPoints: [
// 			{ label: "3:00", y: 2.22 },
// 			{ label: "6:00", y: 2.20 },
// 			{ label: "9:00", y: 2.44 },
// 			{ label: "12:00", y: 2.45 }
// 		]
// 	},
// 	{
// 		type: "spline", 
// 		showInLegend: true,
// 		visible: true,
// 		name: "Offered Calls",
// 		dataPoints: [
// 			{  label: "3:00", y: 3.86 },
// 			{  label: "6:00", y: 3.76 },
// 			{  label: "9:00", y: 3.77 },
// 			{  label: "12:00", y: 3.65 }
// 		]
// 	},
// 	{
// 		type: "spline",
// 		visible: true,
// 		showInLegend: true,
// 		name: "Handled Calls",
// 		dataPoints: [
// 			{  label: "3:00", y: 4.37 },
// 			{  label: "6:00", y: 4.27 },
// 			{  label: "9:00", y: 4.72 },
// 			{  label: "12:00", y: 4.87 }
// 		]
// 	},
// 	{
// 		type: "spline", 
// 		showInLegend: true,
// 		name: "Acceptable Calls",
// 		dataPoints: [
// 			{  label: "3:00", y: 6.64 },
// 			{  label: "6:00", y: 6.31 },
// 			{  label: "9:00", y: 6.59 },
// 			{  label: "12:00", y: 6.95 }
// 		]
// 	}]
// });
// chart.render();

// function toggleDataSeries(e) {
// 	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible ){
// 		e.dataSeries.visible = false;
// 	} else {
// 		e.dataSeries.visible = true;
// 	}
// 	chart.render();
// }

// }

// lineChartDashboard
var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            var config = {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'Forecast',
                        backgroundColor:'rgba(115, 0, 140, 0.1)',
                        borderColor: '#780096',
                        data: [
                           1468,2000,1500,3159,2000,3000,4536
                        ],
                        fill: true,
                    }, 
                    {
                        label: 'Handled',
                        fill: true,
                        backgroundColor: 'rgba(120, 130, 200, 0.1)',
                        borderColor: '#8391cf',
                        data: [
                            1568,2568,526,3222,2635,3568,1536
                        ],
                    },
                    {
                        label: 'Acceptable',
                        fill: true,
                        backgroundColor: 'rgba(180, 75, 92, 0.1)',
                        borderColor: '#ea8f5c',
                        data: [
                            1499,3123,1654,3560,2456,3500,1236
                        ],
                    },
                    {
                        label: 'Scheduled',
                        fill: true,
                        backgroundColor: 'rgba(245, 100, 174, 0.1)',
                        borderColor: '#f47fbb',
                        data: [
                            1868,1268,2526,1222,4635,4000,5536
                        ],
                    }]
                },
                options: {
                    responsive: true,                    
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
                    legend:{
                    display:true,
                    position:'bottom',                                   
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: false,
                                labelString: 'Month'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: false,
                                labelString: 'Value'
                            }
                        }]
                    }
                }
            };
    
            window.onload = function() {
                var ctx = document.getElementById('dashboardLineGraph').getContext('2d');
                window.myLine = new Chart(ctx, config);
            };