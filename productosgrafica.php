<!DOCTYPE html>
<html>
    <head>
      <title>TODO supply a title</title>
      <meta charset="UTF-8">    
      <meta name="viewport" content="width=device-width, initial-scale=0.5">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    </head>
    <body>
        <canvas id="myChart" width="50" height="50"></canvas>
    </body>
    <script>
        var ctx= document.getElementById("myChart").getContext("2d");
        var myChart= new Chart(ctx,{
            type:"bar",
            data:{
                labels:['Coca-Cola','Pepsi','Big-cola'],
                datasets:[{
                    label:'Ventas',
                    data:[100,60,30],
                    backgroundColor:[
                        'rgb(66, 134, 244,0.8)',
                        'rgb(74, 135, 72,0.8)',
                        'rgb(229, 89, 50,0.8)'
                    ]
                }]
            },
            options:{
                scales:{
                    yAxes:[{
                            ticks:{
                                beginAtZero:true
                            }
                    }]
                }
            }
        });
    </script>
</html>