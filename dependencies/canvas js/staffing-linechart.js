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
                        label: 'Actual',
                        fill: true,
                        backgroundColor: 'rgba(120, 130, 200, 0.1)',
                        borderColor: '#8391cf',
                        data: [
                            1568,2568,526,3222,2635,3568,1536
                        ],
                    },
               
                 ]
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
                var ctx = document.getElementById('canvas').getContext('2d');
                window.myLine = new Chart(ctx, config);
            };