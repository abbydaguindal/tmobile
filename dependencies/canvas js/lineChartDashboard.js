var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            var config = {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'Forecast',
                        backgroundColor:'rgba(120, 0, 150, .4)',
                        borderColor: '#780096',
                        data: [
                           1468,2000,1500,3159,2000,3000,4536
                        ],
                        fill: true,
                        
                    }, 
                    {
                        label: 'Handled',
                        fill: true,
                        backgroundColor: 'rgba(131, 145, 207,.5)',
                        borderColor: '#8391cf',
                        data: [
                            1568,2568,526,3222,2635,3568,1536
                        ],
                    },
                    {
                        label: 'Acceptable',
                        fill: true,
                        backgroundColor: 'rgba(255, 157, 102,.8)',
                        borderColor: '#ff9d66',
                        data: [
                            1499,3123,1654,3560,2456,3500,1236
                        ],
                    },
                    {
                        label: 'Scheduled',
                        fill: true,
                        backgroundColor: 'rgba(255, 102, 180,.8)',
                        borderColor: '#ff66b4',
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
                    fontSize: 5                        
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
                var ctx = document.getElementById('canvas').getContext('2d');

                window.myLine = new Chart(ctx, config);
            };

